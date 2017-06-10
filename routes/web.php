<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/* Route::get('testmodel',function(){
 	$a=App\Post::all();
 	return $a;
});
*/ 


/* Route::get('produk',function(){
 	$b=App\Produk::all();
 	$c=App\Pengguna::all();
 	$d=App\Pengaturan::all();
 	return $b."<br>".$c."<br>".$d;
 });
*/


/*controller digunakan sebagai pengatur alur program
latihan controller
Route::get('test','PrakerinController@percobaan');
Route::get('test1','PrakerinController@percobaan2');
Route::get('test2','PrakerinController@percobaan3');
Route::get('test3','PrakerinController@percobaan4');
Route::get('test4','PrakerinController@percobaan5');
*/


/*Parameter
Route::get('halaman/{id}','PrakerinController@param');

routee::get('/{a}','PrakerinController@parameter');
*/


//coba model atau latihan controller dan memanggilkan dari dari database ke controller
/*Route::get('test1','CobaController@test');

Route::get('/{id}','CobaController@test2');
*/


//Route::get('test/{id}','CobaController@testing');


//foreach
// Route::get('testforeach','CobaController@ulang');

// Route::get('/{id}','CobaController@binatang');

//Route::get('/{a}','CobaController@test');

Route::resource('post', 'PostController');