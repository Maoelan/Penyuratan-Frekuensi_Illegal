<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\tmisrController;
use App\Http\Controllers\tmsController;
use App\Http\Controllers\tsptController;
/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------zz-
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
//tmisr
Route::get('/tmisrCreate', [tmisrController::class, 'create'])->name('tmisrCreate');
Route::get('/createTmisr', [tmisrController::class, 'index'])->name('createTmisr');
Route::Post('/tmisrStore', [tmisrController::class, 'store'])->name('tmisrStore');
Route::get('/dataTmisr', [tmisrController::class, 'lihatdata'])->name('dataTmisr');
Route::get('/showTmisr/{id}', [tmisrController::class, 'show'])->name('showTmisr');
Route::post('/updateTmisr/{id}', [tmisrController::class, 'update'])->name('updateTmisr');
Route::get('/deleteTmisr/{id}', [tmisrController::class, 'destroy'])->name('deleteTmisr');
Route::get('/printTmisr', [tmisrController::class, 'generatePDF'])->name('printTmisr');
//tms
Route::get('/tmsCreate', [tmsController::class, 'create'])->name('tmsCreate');
Route::get('/createTms', [tmsController::class, 'index'])->name('createTms');
Route::Post('/tmsStore', [tmsController::class, 'store'])->name('tmsStore');
Route::get('/dataTms', [tmsController::class, 'lihatdata'])->name('dataTms');
Route::get('/showTms/{id}', [tmsController::class, 'show'])->name('showTms');
Route::post('/updateTms/{id}', [tmsController::class, 'update'])->name('updateTms');
Route::get('/deleteTms/{id}', [tmsController::class, 'destroy'])->name('deleteTms');
//tsptr
Route::get('/tsptCreate', [tsptController::class, 'create'])->name('tsptCreate');
Route::get('/createTspt', [tsptController::class, 'index'])->name('createTspt');
Route::Post('/tsptStore', [tsptController::class, 'store'])->name('tsptStore');
Route::get('/dataTspt', [tsptController::class, 'lihatdata'])->name('dataTspt');
Route::get('/showTspt/{id}', [tsptController::class, 'show'])->name('showTspt');
Route::post('/updateTspt/{id}', [tsptController::class, 'update'])->name('updateTspt');
Route::get('/deleteTspt/{id}', [tsptController::class, 'destroy'])->name('deleteTspt');
