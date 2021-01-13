<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fielable = ['nis', 'nama', 'kelas', 'alamat'];
}
