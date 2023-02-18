<?php
use App\Http\Controllers\cobacontroller;
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
//     return view('profile');
// });

Route::get('/', function () {
    return view('profile');
});

Route::get('/coba', function () {
    return view('cobajs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/hello', function () {
    return "HELLO WORLD"; 
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile', [
        "nama" => "Edy Atthoillah",
        "email" => "edyatthoillah123@gmail.com",
        "alamat" => "Jl.nangka No.113 RT.002 RW.11 Kepuharjo Lumajang"
    ]);
});


Route::get('/index', function () {
    return "landing page";
});

// ID parameter
//ini bisa dibuat untuk session 
Route::get('/index/{id}/{nama}', function ($id, $nama) {
    return "Kami Kelompok $id nama $nama";
});


// coba route menggunakan controller
Route::get('/cobacoba', [cobacontroller::class, 'index']);
Route::get('/controllogin', [cobacontroller::class, 'login']);
// Route::post('/dashboard', [cobacontroller::class, 'login']);
Route::post("/dashboard", "cobacontroller@dashboard");