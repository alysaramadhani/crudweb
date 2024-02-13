<?php

use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use Illuminate\Support\Facades\Route;
use App\Models\Students;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|p
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home' , ['nama' => 'HomePage', 'tittle' => 'HomePage']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'About', 
    'tittle' => 'About',
    'nama' => 'Alysa Oktavia Ramadhani',
    'kelas' => '11 PPLG 1',
    'foto' => 'image/alysa.jpg']);
});

Route::get('/login',[LoginController::class,'index']) ->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'auth']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index']);

Route::group(["prefix" => "/student"], function(){
    Route::get('/all', [StudentsController::class, 'index']);
    Route::get('/detail/{student}', [StudentsController::class, 'show']);
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/add', [StudentsController::class, 'store']);
    Route::delete('/delete/{student}', [StudentsController::class, 'destroy']);
    Route::get('/edit/{student}',[StudentsController::class , 'edit']);
    Route::post('/update/{student}',[StudentsController::class , 'update']);//edit data
});
Route::group(["prefix"=>"/kelas"],function(){
    Route::get('/all',[KelasController::class , 'index']);//view
    Route::get('/detail/{grade}', [KelasController::class, 'show']);//detail data
    Route::get('/create',[KelasController::class , 'create']);//tambah data
    Route::post('/add',[KelasController::class , 'store']);//tambah data
    Route::delete('/delete/{kelas}',[KelasController::class , 'destroy']);//hapus data
    Route::get('/edit/{kelas}',[KelasController::class , 'edit']);//edit view
    Route::post('/update/{kelas}',[KelasController::class , 'update']);//edit data
});

Route::group(["prefix"=> "/dashboard"], function(){
    Route::get('/', [DashboardController:: class, 'index'])->middleware('auth');
});



