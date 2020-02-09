<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
			'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    	]);

    	$files = $request->file('foto');
    	$imagewisatawan = 'KTP-' . $request->nama . '.' . $files->getClientOriginalExtension();
    	$files->move(public_path("img "), $imagewisatawan);

    	Wisatawan::create([
    		'nama' => $request->nama,
    		'gender' => $request->gender,
    		'umur' => $request->umur,
    		'asal' => $request->asal,
    		'foto' => $insert['foto'] = "$imagewisatawan"
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
    	$this->validate($request, [
    		'foto' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    		]);

    	$wisatawan = Wisatawan::find($id);

    	if ($files = $request->file('foto')){
    		$showedWisatawan = public_path("img/{ $wisatawan->foto}");

    		if (File::exists($showedWisatawan)) {
    			unlink($showedWisatawan);
    		}

    		$pathMenuju = 'img/';

    			$imagewisatawan = 'KTP-' . $request->nama . '.' . $files->getClientOriginalExtension();
    			$files->move($pathMenuju, $imagewisatawan);

    		$id = $request['id'];

	    	$update = Wisatawan::where('id', $id)->first();
	    	$update->nama = $request['nama'];
	    	$update->gender = $request['gender'];
	    	$update->umur = $request['umur'];
	    	$update->asal = $request['asal'];
	    	$update->foto = $insert['foto'] = "$imagewisatawan";

	    	$update->update();
    	}


    	

    	return redirect('/');
    }
}