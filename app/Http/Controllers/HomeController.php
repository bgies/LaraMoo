<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = \Auth::user();
       if ($user->id == 2) {
          \Bouncer::assign('web-admin')->to($user);
          $abilities = $user->getAbilities();
          $abilityNames = [];
          foreach ($abilities as $ability) {
             $abilityNames[] = $ability->name;
          }
          $user->user_abilities = json_encode($abilityNames);
          $user->save();
          //echo $abilities;
       }
       
        return view('home');
    }
}
