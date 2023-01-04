<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Kelas extends Model
{
    protected $table = 'Kelas';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'kode_kelas', 'nama_kelas'];
    public $timestamps = false;
}