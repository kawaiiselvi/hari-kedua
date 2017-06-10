<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coba;

class CobaController extends Controller
{
    //
   public function test()
    {
    	$a = coba::all();
    	return $a;
    }

//parameter
     public function test3($id)
    {
    	$a = coba::find($id);
    	return $a;
    }
//latihan nama-kelas-jurusan-jenis kelamin
    public function test2($id)
    {
    	$tampilan = Coba::find($id);
    	return $tampilan;
    }

//foreach buah
    public function percobaan5()
    {
    	$buah = ['Mangga', 'Jeruk', 'Apel', 'Anggur', 'Manggis'];
    	return view('buah', compact('buah'));
    }

    public function ulang()
    {
    	$data = ['adi', 'tina', 'juju', 'icih'];
    	return view('index', compact('data'));
    }

//latihan foreach (menggabungkan)
    public function test8($a)
    {
    	$data = ['binatang' => ['kucing', 'kelinci', 'singa','lumba-lumba','koala'],
    	'kendaraan' => ['motor', 'mobil', 'sepeda','pesawat','kereta'],
    	'laptop' => ['lenovo','acer','asuz','toshiba','hp']];
    	$kopi = $data[$a];
    	return view('index', compact('kopi'));
    }

//latihan parameter menggunakan like dan %(persen)
     public function testing($id)
    {
        $tampilan = Coba::where('jurusan', 'like', $id)-> orwhere('nama', 'like', $id)->get(); 
        return $tampilan;
    }

}
