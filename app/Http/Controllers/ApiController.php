<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Auth;
use App\Models\ApiToken;
use App\Models\Challenge;
use App\Models\Journey;

class ApiController extends Controller
{

    private CONST REFRESHED = 3600;
    private CONST REVOKED = self::REFRESHED*48;

    /**
     * POST /api/login
     * HTTP request to get the token with credentials
     * @param  Request $request JSON body
     * @return JSON Response
     */
    public function login(Request $request)
    {

        $data = $request->post();

        // Token string generation
        $timestamp = time();
        $token = $this->generateToken($timestamp, 10);
        $expiration = $this->generateExpiration($timestamp);
        $scope = $data['scope'];
        $username = $data['username'];
        $password = $data['password'];
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){

            if(auth()->attempt(['username'=>$username,'password'=>$password])){
                // Test if user account activated.
                if(!$this->isAccountActivated()){
                    return response()->json(["response" => ["message" => "Account not activated yet.", "code" => 403, "error" => "Forbidden"
                    ]], 403);
                }

                // Token object creation
                $this->createApiToken(['username' => $username, 'token' => $token, 'timestamp' => $timestamp, 'expiration' => $expiration, 'scope' => $scope]);

                $response = [
                    "login" => [
                        "scope" => $scope,
                        "expires_in" => $expiration,
                        "access_token" => $token
                    ],
                    "response" => [
                        "message" => "Success",
                        "code" => 200
                    ]
                ];


                return response()->json($response, 200);
            }else{
                // Bad credentials, returns 403
                return response()->json(["response" => ["message" => "Invalid credentials.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
            }
        }
    }

    /**
     * GET /api/challenge/all
     * Returns a collection of Challenge objects
     * @return JSON Response
     */
    public function getAllChallenges(){
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){
            return response()->json(["response" => ["message" => "No token provided.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
        }else{
            $api_key = $_SERVER['HTTP_AUTHORIZATION'];
            $actualToken = $this->getTokenObject($api_key);
            if(!$actualToken){
                return response()->json(["response" => ["message" => "Bad token.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
            }else{
                // It's a read route, we juste read the data and returns in Response.
                $response = $this->responseToken($api_key, "read");
                if($response['response']['code'] === 200){
                    $challenges = Challenge::all()->groupBy('category');
                    return response()->json($challenges, $response['response']['code']);
                }else{
                    return response()->json($response, $response['response']['code']);
                }
            }
        }
    }

    /**
     * GET /api/challenge/{uuid}
     * Returns a Challenge object
     * @return JSON Response
     */
    public function getChallenge($uuid){
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){
            return response()->json(["response" => ["message" => "No token provided.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
        }else{
            $api_key = $_SERVER['HTTP_AUTHORIZATION'];
            $actualToken = $this->getTokenObject($api_key);
            if(!$actualToken){
                return response()->json(["response" => ["message" => "Bad token.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
            }else{
                // It's a read route, we juste read the data and returns in Response.
                $response = $this->responseToken($api_key, "read");
                if($response['response']['code'] === 200){
                    $challenge = Challenge::where('ChallengeId', $uuid)->get()->first();
                    return response()->json($challenge, $response['response']['code']);
                }else{
                    return response()->json($response, $response['response']['code']);
                }
            }
        }
    }

    /**
     * GET /api/journey/all
     * Returns a collection of Journey objects
     * @return JSON Response
     */
    public function getAllJourneys(){
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){
            return response()->json(["response" => ["message" => "No token provided.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
        }else{
            $api_key = $_SERVER['HTTP_AUTHORIZATION'];
            $actualToken = $this->getTokenObject($api_key);
            if(!$actualToken){
                return response()->json(["response" => ["message" => "Bad token.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
            }else{
                // It's a read route, we juste read the data and returns in Response.
                $response = $this->responseToken($api_key, "read");
                if($response['response']['code'] === 200){
                    $journeys = Journey::orderBy('order', 'asc')->get();
                    return response()->json($journeys, $response['response']['code']);
                }else{
                    return response()->json($response, $response['response']['code']);
                }
            }
        }
    }

    /**
     * GET /api/journey/{uuid}
     * Returns a Journey object
     * @return JSON Response
     */
    public function getJourney($uuid){
        if(!isset($_SERVER['HTTP_AUTHORIZATION'])){
            return response()->json(["response" => ["message" => "No token provided.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
        }else{
            $api_key = $_SERVER['HTTP_AUTHORIZATION'];
            $actualToken = $this->getTokenObject($api_key);
            if(!$actualToken){
                return response()->json(["response" => ["message" => "Bad token.", "code" => 403, "error" => "Forbidden"
                  ]], 403);
            }else{
                // It's a read route, we juste read the data and returns in Response.
                $response = $this->responseToken($api_key, "read");
                if($response['response']['code'] === 200){
                    $journey = Journey::where('JourneyId', $uuid)->get()->first();
                    return response()->json($journey, $response['response']['code']);
                }else{
                    return response()->json($response, $response['response']['code']);
                }
            }
        }
    }

    /* POST /login HELPERS */

    /**
     * This function get the token object form the api_key token sent in header HTTP request and check the current state of the token
     * @param  String $token    The api_key value in header (the token)
     * @param  String $minScope Minimal scope required to execute the route
     * @return JSON           Response
     */
    private function responseToken($token, $minScope){
        $timestamp = time();
        $actualToken = $this->getTokenObject($token);
        if($actualToken){
            return $this->checkTokenState($actualToken, $timestamp, $minScope);
        }else{
            return ["response" => ["message" => "Bad token.", "code" => 403, "error" => "Forbidden"
              ]];
        }
    }

    /**
     * This function generate a unique token based on timestamp, random number + MD5 hash
     * @param  Integer $timestamp Timestamp
     * @param  Integer $limit     Limit for the random number
     * @return String            Hashed password
     */
    private function generateToken($timestamp, $limit){
        return md5(rand(1, $limit) . $timestamp);
    }

    /**
     * This function generate expiration based on timestamp and class constant (1 hour)
     * @param  Integer $timestamp Timestamp
     * @return Integer            Timestamp + 1 hour
     */
    private function generateExpiration($timestamp){
        return $timestamp+self::REFRESHED;
    }

    /**
     * Create ApiToken object
     * @param  Array $array Array of values needed to the ApiToken creation
     */
    private function createApiToken($array){
        $apiToken = new ApiToken;
        $tokenId = (string) Str::uuid();
        $apiToken->TokenId = $tokenId;
        $apiToken->Email = $array['username'];
        $apiToken->Token = $array['token'];
        $apiToken->Timestamp = $array['timestamp'];
        $apiToken->Expiration = $array['expiration'];
        $apiToken->Scope = $array['scope'];
        $apiToken->State = "Valid";
        $apiToken->save();
    }

    /**
     * Test if account is activated with the Auth routes from Laravel
     * @return boolean False = not activated yet
     */
    private function isAccountActivated(){
        if(auth()->user()->email_verified_at === null){
          Auth::logout();
          return false;
        }
        return true;
    }

    /**
     * This function get the token object in database from unique token sent in header
     * @param  String $token The token from api_key
     * @return Boolean|Object        Returns false if the object doesn't exists, else, returns the object
     */
    private function getTokenObject($token){
        $token = ApiToken::where('Token', $token)->get()->first();
        if($token){
            return $token;
        }
        return false;
    }

    /**
     * Update the token state each time a HTTP request is sent
     * @param  String $token     The token from api_key
     * @param  Integer $timestamp Timestamp
     * @param  String $state     The current state of the token obj
     * @return Integer            Returns the timestamp + 1 hour updated from "now" (if revoked, no update)
     */
    private function updateTokenState($token, $timestamp, $state){
        $token->State = $state;
        if(!$this->isTokenRevoked($token, $timestamp)){
            // If the token is not revoked, update TImestamp & Expiration.
            // Else, we update nothing, we just revoke the actual token.
            $token->Timestamp = $timestamp;
            $token->Expiration = $timestamp+self::REFRESHED;
        }
        $token->save();
        return $timestamp+self::REFRESHED;
    }

    /**
     * Test if the token has "Valid" state
     * @param  ApiToken  $tokenObj  The token object
     * @param  Integer  $timestamp Timestamp
     * @return Boolean            True if Valid
     */
    private function isTokenValid($tokenObj, $timestamp){
        return $timestamp >= $tokenObj->Timestamp && $timestamp < $tokenObj->Expiration ? true : false;
    }

    /**
     * Test if the token has "Expired" state
     * @param  ApiToken  $tokenObj  The token object
     * @param  Integer  $timestamp Timestamp
     * @return Boolean            True if Valid
     */
    private function isTokenExpired($tokenObj, $timestamp){
        return $timestamp >= $tokenObj->Expiration && $timestamp < $tokenObj->Expiration+self::REVOKED ? true : false;
    }

    /**
     * Test if the token has "Revoked" state
     * @param  ApiToken  $tokenObj  The token object
     * @param  Integer  $timestamp Timestamp
     * @return Boolean            True if Valid
     */
    private function isTokenRevoked($tokenObj, $timestamp){
        return $timestamp >= $tokenObj->Expiration+self::REVOKED ? true : false;
    }

    /**
     * Refresh the token expiration and state then returns the informations
     * @param  ApiToken $tokenObj  The ApiToken object
     * @param  Integer $timestamp Timestamp
     * @param  String $scope     The scope
     * @return JSON            Response
     */
    private function refreshResponse($tokenObj, $timestamp, $scope){
        $expiration = $this->updateTokenState($tokenObj, $timestamp, "Refreshed");
            $response = [
                "login" => [
                    "scope" => $scope,
                    "expires_in" => $expiration,
                    "access_token" => $tokenObj->Token
                ],
                "response" => [
                    "message" => "Api Token refreshed",
                    "code" => 200
                ]
            ];
        return $response;
    }

    /**
     * Update the response if revoked
     * @param  ApiToken $tokenObj  The ApiToken object
     * @param  Integer $timestamp Timestamp
     * @param  String $state     The state
     * @return JSON            Response
     */
    private function revokedResponse($tokenObj, $timestamp, $state){
        $this->updateTokenState($tokenObj, $timestamp, $state);
        $response = ["response" => ["message" => "Api Token revoked.", "code" => 403, "error" => "Forbidden"]];
        return $response;
    }

    /**
     * Check the token state
     * @param  ApiToken $tokenObj  The ApiToken object
     * @param  Integer $timestamp Timestamp
     * @param  String $minScope     The minimal scope required
     * @return JSON            Response
     */
    private function checkTokenState($tokenObj, $timestamp, $minScope){
        if($this->isTokenRevoked($tokenObj, $timestamp)){ // REVOKED
            $response = $this->revokedResponse($tokenObj, $timestamp, "Revoked");
        }elseif($this->isTokenExpired($tokenObj, $timestamp)){ // EXPIRED
            $response = $this->refreshResponse($tokenObj, $timestamp, $tokenObj->Scope);
        }elseif($this->isTokenValid($tokenObj, $timestamp)){ // VALID
            $response = $this->refreshResponse($tokenObj, $timestamp, $tokenObj->Scope);
        }else{ // Others. Revoked in fact.
            $response = $this->revokedResponse($tokenObj, $timestamp, "Uncorrect");
        }
        $scopeResponse = $this->checkScope($tokenObj->Scope, $minScope);
        if($scopeResponse['response']['code'] === 403){
            return $scopeResponse;
        }
        return $response;
        
    }

    /**
     * Check if scope is enough. Read = 1, Write = 2. If the scope is read, but the minimal scope to execute the route is write,
     * it will returns 403. (obviously)
     * @param  String $tokenScope The token scope
     * @param  String $minScope   The minimal scope necessary
     * @return JSON             Response
     */
    private function checkScope($tokenScope, $minScope){
        $scopes = ["read" => 1, "write" => 2];
        $response = ["response" => ["message" => "Wrong scope.", "code" => 403, "error" => "Forbidden"]];
        if($scopes[$tokenScope] >= $scopes[$minScope]){
            $response = ["response" => ["message" => true, "code" => 200, "error" => "Success"]];
        }
        return $response;
    }
}

