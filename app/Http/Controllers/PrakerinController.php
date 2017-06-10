<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{

// if & for
    public function percobaan()
    {
    	$a = 3;
    	$b = 2;
    	return view('index', compact('a', 'b'));
    }

//
    public function percobaan2()
    {
    	$a = "buvi";
    	$b = "bulis";
    	$c = "buwin";
    	$d = "bures";
    	$e = "buian";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    }

     public function percobaan3()
    {
    	$a = "buvias";
    	$b = "bulisas";
    	$c = "buwinas";
    	$d = "buresas";
    	$e = "buianas";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    }

     public function percobaan4()
    {
    	$a = "buviwe";
    	$b = "buliswe";
    	$c = "buwinwe";
    	$d = "bureswe";
    	$e = "buianwe";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    }

     public function percobaan5()
    {
    	$a = "buvida";
    	$b = "bulisda";
    	$c = "buwinda";
    	$d = "buresda";
    	$e = "buianda";
    	return view('index', compact('a', 'b', 'c', 'd', 'e'));
    }

//Parameter
    public function param($id)
    {
    	return view('welcome');
    }


	public function parameter($a)
    {
    	return view('welcome2', compact('a'));
    }
}

