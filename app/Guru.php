<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "Guru";
    protected $primaryKey = "id";
    protected $fillable = ['id', 'user_id', 'nip', 'nama', 'tempat_lahir', 'tgl_lahir', 'gender', 'phone_number', 'email', 'alamat', 'pendidikan'];
}