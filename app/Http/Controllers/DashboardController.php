<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Feedback;

class DashboardController extends Controller
{
    public function create(Request $request)
    {
        $message = $request->post()['message'];
        if($message == ""){
            return json_encode(['status' => 200, 'message' => 'Le champ est vide...']);
        }
        $feedback = new Feedback;
        $feedback->feedbackid = (string) Str::uuid();
        $feedback->message = $message;
        $feedback->save();
        return json_encode(['status' => 201, 'message' => 'Merci pour votre feedback ! :-)']);
    }

    // public function admin(){
    //     return view('admin');
    // }

    // public function createChallenge(){
    //     return view('createchallenge');
    // }

    // public function manageChallenge(){
    //     return view('managechallenge');
    // }
}
