<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class profilecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($user)
    {
        //dd($user);
       $user =User::find($user);
       
        return view('home',[
            'user'=>$user
        ]);
    }
}
