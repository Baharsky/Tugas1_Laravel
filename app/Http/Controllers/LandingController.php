<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pariwisata;

class LandingController extends Controller
{
    public function index(Request $request)
    {
    	$pariwisata = Pariwisata::all();
    	return view('landing_page', compact("pariwisata"));
    }
}
