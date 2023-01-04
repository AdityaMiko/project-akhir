<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Jadwal extends Model
{
    protected $table = 'Jadwal';
    protected $primaryKey = 'id';
    protected $fillable = ['kelas_id', 'mapel_id', 'guru_id', 'hari', 'jam_pelajaran'];
}