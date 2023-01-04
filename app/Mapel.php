<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Mapel extends Model
{
    protected $table = 'Mapel';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kode_mapel', 'nama_mapel'];
    public $timestamps = false;
}