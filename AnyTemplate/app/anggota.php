<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table='table_anggota';
    protected $primaryKey='id';
    public $timestamps=false;

    protected $fillable=[
      'nama_anggota',
      'alamat',
      'nomer_telepon',
      'username',
      'password'
    ];
}
