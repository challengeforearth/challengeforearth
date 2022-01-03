<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\UserChallenge;
use App\Models\Metachallenge;
use App\Models\Challenge;
use App\Models\Badge;

class ChallengeController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $challenges = Challenge::all();
        return view('challenge::index')->with('challenges', $challenges);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('challenge::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $challenge = Challenge::find($id);
        $challenge->status = 0;
        if($challenge){
            $user = Auth::user();
            $userchallenge = UserChallenge::where('userid',$user->userid)->where('challengeid',$id)->get()->first();
            $stats = Metachallenge::where('challengeid', $id)
                                ->get();
            if($userchallenge){
                $challenge->status = $userchallenge->status;
            }
            foreach($stats as $stat){
                if($stat->key === 'kgeqCO2'){
                    $challenge->kgeqCO2 = $stat->value;
                }
                if($stat->key === 'source'){
                    $challenge->source = $stat->value;
                }
                if($stat->key === 'badge'){
                    $badge = Badge::find($stat->value);
                    if($badge){
                        $challenge->badge = $badge;
                    }
                }
            }
        }
        return view('challenge-show')->with("challenge",$challenge);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('challenge::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $userchallenge = UserChallenge::where('userid',$user->userid)->where('challengeid',$id)->get()->first();
        if(!$userchallenge){
            $userchallenge = new UserChallenge;
            $userchallenge->userchallengeid = (string) Str::uuid();
        }
        $userchallenge->userid = $user->userid;
        $userchallenge->challengeid = $id;
        if($userchallenge->status === 1){
            $userchallenge->status = 2;
            $message = "Défi relevé !";
            $code = "fas fa-check";
        }elseif($userchallenge->status !== 2){
            $userchallenge->status = 1;
            $message = "Défi en cours";
            $code = "fas fa-fist-raised";
        }else {
            $message = "Défi relevé !";
            $code = "fas fa-check";
        }
        $userchallenge->save();
        return ["message" => $message, "code" => $code, "status" => $userchallenge->status];
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Access the specified categories for Challenge
     * @param string $category
     * @return Renderable
     */
    public function filterChallenges($category)
    {
        $challenges=Challenge::where('category',$category)->get();
        return view('challenge::index')->with("challenges",$challenges);
    }
}
