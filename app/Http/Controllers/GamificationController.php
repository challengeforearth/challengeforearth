<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Challenge;
use App\Models\UserChallenge;
use App\Models\Journey;
use App\Models\Badge;
use App\Models\Metachallenge;

class GamificationController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $challengesSuccessAuthUser = UserChallenge::where('status', 2)
                                                ->where('userid', $user->userid)
                                                ->get();
        $kgeqCO2 = 0;
        foreach($challengesSuccessAuthUser as $challengeSuccessAuthUser){
            $stat = Metachallenge::where('key', 'kgeqCO2')
                                ->where('challengeid', $challengeSuccessAuthUser->challengeid)
                                ->get()
                                ->first();
            if($stat){
                $kgeqCO2 = $kgeqCO2 + $stat->value;
            }
        }
        $challengesSuccess = UserChallenge::where('status', 2)
                                ->get();
        $nbChallenges = count($challengesSuccessAuthUser);
        return view('dashboard')
        ->with('kgeqCO2', $kgeqCO2)
        ->with('nbChallenges', $nbChallenges);
    }

    public function nosgestesclimats(){
        return view('nosgestesclimats');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function profile()
    {
        $user = Auth::user();
        $badgesEarned = [];
        $challengesWIP = [];
        $WIPs = UserChallenge::where('status', 1)
                            ->where('userid', $user->userid)
                            ->get();
        foreach($WIPs as $WIP){
            $challengeWIP = Challenge::find($WIP->challengeid);
            if($challengeWIP){
                $challengesWIP[] = $challengeWIP;
            }
        }
        $challengesSuccessAuthUser = UserChallenge::where('status', 2)
                                                ->where('userid', $user->userid)
                                                ->get();
        $kgeqCO2 = 0;
        $badges = Badge::all();
        foreach($challengesSuccessAuthUser as $challengeSuccessAuthUser){
            $stats = Metachallenge::where('challengeid', $challengeSuccessAuthUser->challengeid)
                                ->get();
            foreach($stats as $stat){
                if($stat->key === 'kgeqCO2'){
                    $kgeqCO2 = $kgeqCO2 + $stat->value;
                }
                if($stat->key === 'badge'){
                    $badge = Badge::find($stat->value);
                    if($badge){
                        $badgesEarned[] = $badge;
                    }
                }
            }
        }
        $challengers = User::all()
                        ->count();
        $nbChallenges = count($challengesSuccessAuthUser);
        foreach($badges as $badge){
            $badge->earned = 0;
            foreach($badgesEarned as $badgeEarned){
                if($badge->badgeid === $badgeEarned->badgeid && $badge->earned === 0){
                    $badge->earned = 1;
                }
            }
        }
        $user = User::find($user->userid);
        return view('profile')
        ->with('kgeqCO2', $kgeqCO2)
        ->with('nbChallenges', $nbChallenges)
        ->with('challengesWIP', $challengesWIP)
        ->with('badges', $badges)
        ->with('user', $user);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function stats()
    {
        $challenges_easy = Challenge::where('level', 'Débutant')->get()->count();
        $challenges_intermediate = Challenge::where('level', 'Intermédiaire')->get()->count();
        $challenges_hard = Challenge::where('level', 'Expert')->get()->count();
        return view('gamification::stats')
                ->with('challenges_easy', $challenges_easy)
                ->with('challenges_intermediate', $challenges_intermediate)
                ->with('challenges_hard', $challenges_hard);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function communities()
    {
        $challenges_easy = Challenge::where('level', 'Débutant')->get()->count();
        $challenges_intermediate = Challenge::where('level', 'Intermédiaire')->get()->count();
        $challenges_hard = Challenge::where('level', 'Expert')->get()->count();
        return view('gamification::index')
                ->with('challenges_easy', $challenges_easy)
                ->with('challenges_intermediate', $challenges_intermediate)
                ->with('challenges_hard', $challenges_hard);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function together()
    {
        $challenges_easy = Challenge::where('level', 'Débutant')->get()->count();
        $challenges_intermediate = Challenge::where('level', 'Intermédiaire')->get()->count();
        $challenges_hard = Challenge::where('level', 'Expert')->get()->count();
        return view('gamification::index')
                ->with('challenges_easy', $challenges_easy)
                ->with('challenges_intermediate', $challenges_intermediate)
                ->with('challenges_hard', $challenges_hard);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('gamification::create');
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
        return view('gamification::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('gamification::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
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
}
