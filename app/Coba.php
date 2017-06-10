<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coba extends Model
{
    //
    protected $table ='coba';
    protected $fillable =['nama', 'kelas', 'jurusan', 'jenis kelamin'];
    protected $visible =['nama', 'kelas', 'jurusan', 'jenis kelamin'];
    public $timestamps = true;
};
