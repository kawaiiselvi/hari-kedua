<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    //
    protected $table ='coba';
    protected $fillable =['nama', 'kelas', 'jurusan', 'jenis_kelamin'];
    protected $visible =['nama', 'kelas', 'jurusan', 'jenis_kelamin'];
    public $timestamps = true;
};
