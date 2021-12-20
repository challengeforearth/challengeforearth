<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Challenge;
use App\Models\Journey;
use App\Models\JourneyChallenge;
use App\Models\UserChallenge;
use App\Models\UserJourney;


class JourneyController extends Controller
{
    /*
     * @TO DO
     * Enlever les doublons sur UserJourney et UserChallenge
     * Cacher le bouton Relever Parcours (quand en cours/status 1)
     * Améliorer l'espace Journey (mobile first complété, finir la partie bureau)
     *
     */


    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $journeys = Journey::where('order', '>', 0)->orderBy('order')->get();
        return view('journeys')->with('journeys', $journeys);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('journey::create');
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
        $authuser = Auth::user();
        $userjourney = UserJourney::where('userid',$authuser->userid)->where('journeyid',$id)->get();
        $journey = Journey::find($id);
        if (!$userjourney->isEmpty()) {
            $challenges = $this->orderJourney($id);
            //appeler la fonction private en dessous qui retourne une journey triée.
            //la journey triée aura pour variable $challenges. $challenges = $this->fonction private
            //passer en paramêtre de cette fonction $journey->challenges
        }else{ //non trié
            $challenges = $journey->challenges;
        }
        foreach ($challenges as $challenge){
            $challenge->shortdescription = substr_replace($challenge->description, '...', 100);
            $userchallenge = UserChallenge::where('userid',$authuser->userid)->where('challengeid',$challenge->challengeid)->get()->first();
            $challenge->status = 0;
            if($userchallenge){
                $challenge->status = $userchallenge->status; 
            }
        }
        return view('journey')
            ->with("journey", $journey)
            ->with("challenges",$challenges);
        //with("clé",$valeur), clé est le nom de la variable a récupérer coté front, $valeur est la valeur a passer au front
    }

    /*
     *
     */
    private function orderJourney($journeyid){
        $next = null;
        $ordered = [];
        $journeychallenge = JourneyChallenge::where('journeyid', $journeyid)->get();
        foreach ($journeychallenge as $challenge) {
            if($challenge->childchallenge === null){
                $next = $challenge;
                $ordered[] = Challenge::find($next->challengeid);
            }
        }
        for ($i = 0; $i < count($journeychallenge) - 1; $i++){
            $next = JourneyChallenge::where('childchallenge',$next->challengeid)->where('journeyid',$journeyid)->get()
                ->first();
            $ordered[] = Challenge::find($next->challengeid);
        }
        return $ordered;
    }
    //partie 4: Insérer status challenge en bdd
    /* Au clic sur bouton démarrer parcours on ajoute déjà une ligne dans User_journey
     * mettre status a 1
     *
     * en même temps créer dans user_challenge autant de ligne que de challenge dans le parcours
     * en brut : insert into user_challenge(userid,challengeid,status) Values($user = auth::user, $challenge->challengeid,status=0)
     * update le premier challenge à 1
     * dans journey-details à la place du @each journeychallenge-locked, filtrer par challenges réalisés dans la table user_challenge

     * if status = 0 , charger la vue locked sinon, charger la vue normale.
     * requête Eloquent UserChallenge::where('challengeid',$challenge->challengeid)->get();
     */

    /*
     *
     *
     */
    public function launchjourney($id){
        $user = Auth::user();
        $challenges = $this->orderJourney($id);
        $userjourney = new UserJourney;

        $userjourney->userjourneyid = (string) Str::uuid();
        $userjourney->userid = $user->userid;
        $userjourney->journeyid = $id;
        $userjourney->status = 1;
        $userjourney->save();

        $compteur = 0;
        foreach ($challenges as $challenge) {
            $userchallenge = new UserChallenge;
            $userchallenge->userchallengeid = (string) Str::uuid();
            $userchallenge->userid = $user->userid;
            $userchallenge->challengeid = $challenge->challengeid;
            if ($compteur === 0) {
                $userchallenge->status = 1;
            }else {
                $userchallenge->status = 0;
            }
            $userchallenge->save();
            $compteur++;
        }
    }
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('journey::edit');
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
    /**
     * Access the specified difficulty for Journeys
     * @param string $level
     * @return Renderable
     */
    public function filterDifficulty($level)
    {
        $journeys=Journey::where('level',$level)->get();
        return view('challenge::journeys')->with("journeys",$journeys);
    }
}
