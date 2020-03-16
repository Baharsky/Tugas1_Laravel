<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\wisatawan;
use Illuminate\Support\Facades\DB;

use App\Exports\WisatawanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class WisatawanController extends Controller
{
    public function index(){

    	//ngambil data dari tabel
    	// $wisatawan = 'wisatawan';
    	// $fillwisatawan = Wisatawan::all();
    	// $wisatawan = DB::table('wisatawan')->paginate(3);

    	// //mengirim data ke view index
    	// return view('welcome', compact('wisatawan', 'fillwisatawan'));

    	$wisatawan=Wisatawan::all();
        $wisatawan=Wisatawan::paginate(2);
        return view('welcome', ['fillwisatawan' => $wisatawan]);
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
    	return redirect('/home');
    }

    public function delete($id){
    	$delete = Wisatawan::find($id);
    	$delete->delete();

    	return redirect('/home');
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

    	return redirect('/home');
    }

	public function search(Request $request){
	    $cari = $request->cari;
 
            // mengambil data dari table pegawai sesuai pencarian data
        $wisatawan = DB::table('wisatawan')
        ->where('nama','like',"%".$cari."%")
        ->orWhere('gender', 'like', "%".$cari."%")
        ->paginate();
 
            // mengirim data pegawai ke view index
        return view('welcome',['fillwisatawan' => $wisatawan]);
	   }

	public function export_excel()
    {
        return Excel::download(new WisatawanExport, 'wisatawan.xlsx');
    }
 
 // 	public function paginate()
	// {
	// 	$wisatawan = wisatawan::all();
 //    	        // mengambil data dari table pegawai
	// 	$wisatawan = DB::table('wisatawan')->paginate(5);
 
 //    	        // mengirim data pegawai ke view index
	// 	return view('/welcome',['wisatawan' => $pegawai]);
 
	// }

}