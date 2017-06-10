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
     public function test2($id)
    {
    	$a = coba::find($id);
    	return $a;
    }

    public function test3()
    {
    	$tampilan = Coba::all();
    	return view('index6', compact('tampilan'));
    }

//foreach
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

    public function test($a)
    {
    	$data = ['binatang' => ['kucing', 'kelinci', 'singa','lumba-lumba','koala'],
    	'kendaraan' => ['motor', 'mobil', 'sepeda','pesawat','kereta'],
    	'laptop' => ['lenovo','acer','asuz','toshiba','hp']];
    	$kopi = $data[$a];
    	return view('index', compact('kopi'));
    }
}
