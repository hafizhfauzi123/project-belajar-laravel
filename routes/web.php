<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\DosenController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about',function(){
//     return;
// });
// Route::get('/contact',function(){
//     return view('contact',['nama' => 'cara fajar','phone'=>'0821...']);
// });

// Route::redirect('/contact','/contact-us');

// Route::get('/product',function(){
//     return 'product';
// });
// Route::get('/product/{id}', function($id){
//     return view('product.detail', ['id'=>$id]);
// });

// Route::prefix('administrator')->group(function(){
//     Route::get('/profil-admin',function(){
//         return 'profil admin';
//     });
//     Route::get('/about-admin',function(){
//         return 'about admin';
//     });
//     Route::get('/contact-admin',function(){
//         return 'contact-admin';
//     });
//     Route::get('/profil-admin2',function(){
//         return 'profil admin';
//     });
//     Route::get('/about-admin2',function(){
//         return 'about admin';
//     });
//     Route::get('/contact-admin2',function(){
//         return 'contact-admin';
//     });
// });

// Route::get('/siswa', function () {
//     return "<h1>saya siswa</h1>";
// });

// Route::get('/siswa/{id}', function ($id) {
//     return "<h1>saya siswa dengan id $id</h1>";
// })->where('id', '[0-9]+');

// Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//     return "<h1>saya siswa dengan id $id Nama $nama</h1>";
// })->where(['id' => '[0-9]+', 'nama' => '[A-Za-z]+']);

Route::get('siswa',[SiswaController::class, 'index']);
Route::get('siswa/{id}',[SiswaController::class, 'detail'])->where('id','[0-9]+');

Route::get('/',function(){
    return view('home', [
        'name'=> '',
        'role'=>'',
    ]);
});
Route::get('/mahasiswas',[MahasiswaController::class, 'index']);
Route::get('/mahasiswa/{id}',[MahasiswaController::class, 'show']);
Route::get('/mahasiswa-add',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa',[MahasiswaController::class,'store']);
Route::get('/mahasiswa-edit/{id}',[MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}',[MahasiswaController::class,'update']);

Route::get('/class',[ClassController::class, 'index']);
Route::get('/class-detail/{id}',[ClassController::class, 'show']);

Route::get('/organisasi',[OrganisasiController::class, 'index']);
Route::get('/organisasi-detail/{id}',[OrganisasiController::class, 'show']);

Route::get('/dosen',[DosenController::class, 'index']);
Route::get('/dosen-detail/{id}',[DosenController::class, 'show']);