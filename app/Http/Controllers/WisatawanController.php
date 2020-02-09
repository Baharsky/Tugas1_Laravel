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

    public function store(Request $request){

    	$this->validate($request,[
    		'nama' => 'required',
			'gender' => 'required',
			'umur' => 'required',
			'asal' => 'required',    		
			'foto' => 'required'
    	]);

    	Wisatawan::create([
    		'nama' => $request->nama,
    		'gender' => $request->gender,
    		'umur' => $request->umur,
    		'asal' => $request->asal,
    		'foto' => $request->foto
    	]);
    	return redirect('/');
    }

    public function delete($id){
    	$delete = Wisatawan::find($id);
    	$delete->delete();

    	return redirect('/');
    }

    public function update($id){
    	$datas = Wisatawan::select('id', 'nama', 'gender', 'umur', 'asal','foto')
    		->where('id', '=', $id)
    		->first();

    		return view('update', compact('datas'));
    }

    public function updateStore($id, Request $request){
    	$id = $request['id'];

    	$update = Wisatawan::where('id', $id)->first();
    	$update->nama = $request['nama'];
    	$update->gender = $request['gender'];
    	$update->umur = $request['umur'];
    	$update->asal = $request['asal'];
    	$update->foto = $request['foto'];

    	$update->update();

    	return redirect('/');
    }
}