<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use App\Models\Token;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Custom method
        $error = "";
        $user = User::where('email', $request->email)->get()->first();
        $token = Token::where('email', $request->email)->get()->first();
        if($user && $token){
            if($token->token === $request->token){
                $user->password = Hash::make($request->password);
                $user->save();
            }else{
                $error = "Jeton invalide.";
            }
            
        }else{
            $error = "L'utilisateur n'existe pas avec cet email.";
        }
        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $error == ""
                    ? redirect()->route('login')->with('status', "Mot de passe réinitialisé !")
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => $error]);
    }
}
