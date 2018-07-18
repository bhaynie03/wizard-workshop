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
	// public function __construct()
	// {
	//     $this->middleware('auth')->except(['welcome_page', 'about', 'reading', 'cat3'  ]);
	// }

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function landing()
    {
    	return view('landing');
    }
}
