<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MasterController extends Controller
{
    //
    function index(){
    	if(Auth::guest())
    		return view('master');
    	return redirect('/dashboard');
    }

    function dashboard(){
    	return view('dashboard');
    }
}
