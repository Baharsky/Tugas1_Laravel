<?php

namespace App\Http\Controllers;

use App\Pariwisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Exports\PariwisataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class PariwisataController extends Controller
{
    public function index(){
    	$pariwisata=Pariwisata::all();
    	return view('pariwisata', ['fillpar' => $pariwisata]);
    }

    public function create(){

    	$pariwisata = 'pariwisata';

    	return view('createpar', compact('pariwisata'));
    }

    public function store(Request $request){

    	$this->validate($request,[
    		'nama_par' => 'required',
			'lokasi_par' => 'required',
			'detail_par' => 'required',
			'foto_par' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    	]);

    	$files = $request->file('foto_par');
    	$imagepar = 'PAR-' . $request->nama_par . '.' . $files->getClientOriginalExtension();
    	$files->move(public_path("img/Par "), $imagepar);

    	Pariwisata::create([
    		'nama_par' => $request->nama_par,
    		'lokasi_par' => $request->lokasi_par,
    		'detail_par' => $request->detail_par,
    		'foto_par' => $insert['foto_par'] = "$imagepar"
    	]);
    	return redirect('/pariwisata');
    }

    public function update($id){
    	$datas = Pariwisata::select('id', 'nama_par', 'lokasi_par', 'detail_par', 'foto_par')
    		->where('id', '=', $id)
    		->first();

    		return view('updatepar', compact('datas'));
    }

    public function updateStore($id, Request $request){
    	$this->validate($request, [
    		'foto_par' => 'required|image|mimes:jpeg,jpg,png|max:2048'
    		]);

    	$pariwisata = Pariwisata::find($id);

    	if ($files = $request->file('foto_par')){
    		$showedPariwisata = public_path("img/Par/{ $pariwisata->foto}");

    		if (File::exists($showedPariwisata)) {
    			unlink($showedPariwisata);
    		}

    		$pathMenuju = 'img/Par/';

    			$imagepariwisata = 'PAR-' . $request->nama_par . '.' . $files->getClientOriginalExtension();
    			$files->move($pathMenuju, $imagepariwisata);

    		$id = $request['id'];

	    	$update = Pariwisata::where('id', $id)->first();
	    	$update->nama_par = $request['nama_par'];
	    	$update->lokasi_par = $request['lokasi_par'];
	    	$update->detail_par = $request['detail_par'];
	    	$update->foto_par = $insert['foto_par'] = "$imagepariwisata";

	    	$update->update();
    	}

    	return redirect('/pariwisata');
    }

    public function delete($id){
    	$delete = Pariwisata::find($id);
    	$delete->delete();

    	return redirect('/pariwisata');
    }

    public function export_excel()
    {
        return Excel::download(new PariwisataExport, 'pariwisata.xlsx');
    }
}
