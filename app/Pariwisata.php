<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pariwisata extends Model
{
    protected $table = 'pariwisata';


    protected $fillable = [
    	'nama_par',
    	'lokasi_par',
    	'detail_par',
    	'foto_par'
    ];
    protected $primaryKey = 'id';
}
