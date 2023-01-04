<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Siswa extends Model
{
    protected $table = 'Siswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nis', 'nama', 'gender', 'tempat_lahir', 'tgl_lahir', 'email', 'nama_ortu', 'alamat', 'phone_number', 'kelas_id'];
    public $timestamps = false;
}