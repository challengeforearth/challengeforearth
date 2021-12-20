<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserChallenge;
use App\Models\Metachallenge;

class AuthenticatedSessionController extends Controller
{
    public function index()
    {
        $challengers = User::all()->count();
        $challengesSuccess = UserChallenge::where('status', 2)
                                                ->get();

        $nbChallenges = count($challengesSuccess);
        $kgeqCO2all = 0;
        foreach($challengesSuccess as $challenge){
            $stats = Metachallenge::where('challengeid', $challenge->challengeid)
                                ->get();
            foreach($stats as $stat){
                if($stat->key === 'kgeqCO2'){
                    $kgeqCO2all = $kgeqCO2all + $stat->value;
                }
            }
        }

        
        return view('auth.home')
        ->with('kgeqCO2all', $kgeqCO2all)
        ->with('challengers', $challengers)
        ->with('nbChallenges', $nbChallenges);
    }

    public function sources()
    {
        return view('auth.sources');
    }

    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->get()->first();
        if($user && $user->email_verified_at === NULL){
            return back()->withErrors([
                'not_verified' => "L'email n'est pas encore activé, veuillez consulter votre boîte mail",
            ]);
        }else{
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                return redirect()->intended('/dashboard');
            }
        }
        

        return back()->withErrors([
            'bad_credentials' => 'Les identifiants ne sont pas bons',
        ]);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
