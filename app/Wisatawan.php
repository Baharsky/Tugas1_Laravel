<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wisatawan extends Model
{
    protected $table = 'wisatawan';


    protected $fillable = [
    	'nama',
    	'gender',
    	'umur',
    	'asal',
    	'foto'
    ];
    protected $primaryKey = 'id';
}
