<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\wisatawan;

class WisatawanController extends Controller
{
    public function index(){

    	//ngambil data dari tabel
    	$wisatawan = 'wisatawan';
    	$fillwisatawan = Wisatawan::all();

    	//mengirim data ke view index
    	return view('welcome', compact('wisatawan', 'fillwisatawan'));
    }

    public function create(){

    	$wisatawan = 'wisatawan';
    	return view('create', compact('wisatawan'));
    }
}