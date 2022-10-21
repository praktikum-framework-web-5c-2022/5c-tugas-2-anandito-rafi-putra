<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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
    return view ('home');
}
);

Route::controller(MatakuliahController::class)->group(function () {
    Route::get('/insert_matkul', 'insert');
    Route::get('/select_matkul', 'select');
    Route::get('/update_matkul', 'update');
    Route::get('/delete_matkul', 'delete');
});

Route::controller(MahasiswaController::class)->group(function () {
    Route::get('/insert_mhs', 'insert');
    Route::get('/select_mhs', 'select');
    Route::get('/update_mhs', 'update');
    Route::get('/delete_mhs', 'delete');
});

Route::controller(DosenController::class)->group(function () {
    Route::get('/insert_dosen', 'insert');
    Route::get('/select_dosen', 'select');
    Route::get('/update_dosen', 'update');
    Route::get('/delete_dosen', 'delete');
});


Route::get('/dosen', function () {
    $dosens = ["Adelia","Bisaka","Cavani","Diana","Elanga","Fersik","Gualagini","Hernandes","Indah","Jarson"];
    $nip = ["1111","2222","3333","4444","5555","6666","7777","8888","9999","1010"];
    $picture="img/user2.png";
    return view('dosen.index')->with('dosens',$dosens)
    ->with('nip',$nip)->with('picture',$picture);
});

Route::get('/dosen2', function () {
    $dosens2 =["Fareska","Putri","Najwa","Alisa","Zidan"];
    $nip2 = ["1111","1212","1313","1414","1515"];
    $picture="img/user2.png";
    return view('dosen.index2')->with('dosens2', $dosens2)->with('nip2',$nip2)->with('picture',$picture);
});
Route::get('/mahasiswa', function () {
    $mahasiswas = ["Naura", "Altolyto", "Maulana", "Ali","Rindika","Wibisono","Alif","Yoga","Yohanes","Anindya"];
    $npm = ["201061", "201062", "201063", "201064","201065","201066","201067","201068","201069","201070"];
    $gambar="img/user1.png";
    return view('mahasiswa.index')->with('mahasiswas', $mahasiswas)
    ->with('npm', $npm)->with('gambar', $gambar);
});

Route::get('/mahasiswa2', function () {
    $mahasiswas2 = ["Anatasya", "Naufal", "Satrio", "Dito","Rahayu"];
    $npm2 = ["201071", "201072", "201073", "201074","201075"];
    $gambar="img/user1.png";
    return view('mahasiswa.index2')->with('mahasiswas2', $mahasiswas2)
    ->with('npm2', $npm2)->with('gambar', $gambar);
});
Route::get('/mata-kuliah', function () {
    $matkuls = ["Algoritma","Framework Pemrograman Web", "Blockchain", "Data Mining","Technopreuner","Pemrograman Berbasis Mobile","Cloud Computing","Budaya Bangsa","Basis Data","Pemrograman Berorientasi Obyek"];
    $sks = ["3", "3", "2", "3","2","2","3","2","1","3"];
    $foto="img/user3.png";
    return view('mata-kuliah.index')->with('matkuls', $matkuls)
    ->with('sks', $sks)->with('foto', $foto);
});

Route::get('/mata-kuliah2', function () {
    $matkuls2 = ["Pancasila","Jaringan Komputer", "Teori Bahasa dan Automata", "Keamanan Sistem","Metode Numerik"];
    $sks2 = ["2", "3", "3", "3","2"];
    $foto="img/user3.png";
    return view('mata-kuliah.index2')->with('matkuls2', $matkuls2)
    ->with('sks2', $sks2)->with('foto', $foto);
});