<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Token;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\Contact;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);
        $user = User::create([
            'userid' => (string) Str::uuid(),
            'username' => $request->username,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if($user){
            $bytes = random_bytes(5);
            $token = bin2hex($bytes);
            Token::create([
                'tokenid' => (string) Str::uuid(),
                'email' => $request->email,
                'type' => 'registration',
                'token' => $token,
            ]);
            event(new Registered($user));
            $subject = 'Veuillez confirmer votre email pour valider votre inscription';
            $template = 'emails.validate-email';
            Mail::to($request->email)
                ->send(
                    new Contact(
                        [
                            'username' => $request->username,
                            'password' => $request->password,
                            'token' => $token
                        ],
                        $template,
                        $subject
                    )
                );
        }
        return redirect()->intended('/');
    }

    /**
     * validate the email by the token given in query string.
     *
     * @param  $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validateEmail($token)
    {
        $oToken = Token::where('token', $token)->get()->first();
        if($oToken && $oToken->created_at->timestamp + 86400 >= time()){
            $user = User::where('email', $oToken->email)->get()->first();
            if($user){
                $user->email_verified_at = time();
                $user->save();
                $subject = 'Merci de votre inscription !';
                $template = 'emails.registered';
                Mail::to($oToken->email)
                    ->send(
                        new Contact(
                            [
                                'username' => $user->username,
                                'password' => 'Celui que vous avez défini',
                                'token' => $token
                            ],
                            $template,
                            $subject
                        )
                    );
                Auth::login($user);
                return redirect()->intended('/socialhub');
            }else{
                return back()->withErrors([
                    'not_validated' => "L'email n'a pas été validé",
                ]);
            }
        }else{
            return back()->withErrors([
                'token_invalidated' => "Le lien n'est plus valable",
            ]);
        }
    }
}
