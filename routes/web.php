<?php

use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SopController;
use App\Http\Controllers\DatabencanaController;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\LaporanpengaduanController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/laporanpengaduans', function () {
    $data['pengaduans']=DB::table('pengaduans')->select('pengaduans.*','users.name')
    ->leftJoin('users','users.id','pengaduans.id_user')->get();
    return view('laporanpengaduans/indexlaporanpengaduan',$data);
})->name('laporanpengaduans');
Route::middleware(['auth:sanctum', 'verified'])->get('/detailpengaduans/{id}', function ($id) {
    $data['pengaduan']=DB::table('pengaduans')->select('pengaduans.*','users.name')
    ->leftJoin('users','users.id','pengaduans.id_user')
    ->where('pengaduans.id',$id)
    ->first();
    return view('laporanpengaduans/detail',$data);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/datausers', function () {
    return view('datausers/indexdatauser');
})->name('datausers');

Route::middleware(['auth:sanctum', 'verified'])->get('/menus2', function () {
    $data['users']=DB::table('users')->whereNotNull('NIK')->get();
    // dd($data);
    return view('datausers/indexdatauser',$data);
})->name('datausers');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('databencana',[DatabencanaController::class,'index'])->name('menus');
    Route::get('add',[DatabencanaController::class,'add'])->name('add');
    Route::post('store',[DatabencanaController::class,'store'])->name('store');
    Route::get('edit/{id}',[DatabencanaController::class,'edit'])->name('edit');
    Route::post('update/{id}',[DatabencanaController::class,'update'])->name('update');
    Route::post('delete/{id}',[DatabencanaController::class,'delete'])->name('delete');

    Route::get('sopbencana',[SopController::class,'index'])->name('menus2');
    Route::get('addsop',[SopController::class,'addsop'])->name('addsop');
    Route::post('storesop',[SopController::class,'storesop'])->name('storesop');
    Route::get('editsop/{id}',[SopController::class,'editsop'])->name('editsop');
    Route::post('updatesop/{id}',[SopController::class,'updatesop'])->name('updatesop');
    Route::post('deletesop/{id}',[SopController::class,'deletesop'])->name('deletesop');
    Route::get('menu2',[SopController::class,'index2'])->name('menus2');

    Route::get('galeri',[GaleriController::class,'indexgaleri'])->name('galeris');
    Route::get('addgaleri',[GaleriController::class,'addgaleri'])->name('addgaleri');
    Route::post('storegaleri',[GaleriController::class,'storegaleri'])->name('storegaleri');
    Route::get('editgaleri/{id}',[GaleriController::class,'editgaleri'])->name('editgaleri');
    Route::post('updategaleri/{id}',[GaleriController::class,'updategaleri'])->name('updategaleri');
    Route::post('deletegaleri/{id}',[GaleriController::class,'deletegaleri'])->name('deletegaleri');

    Route::get('kuis',[KuisController::class,'indexkuis'])->name('kuiss');
    Route::get('addkuis',[KuisController::class,'addkuis'])->name('addkuis');
    Route::post('storekuis',[KuisController::class,'storekuis'])->name('storekuis');
    Route::get('editkuis/{id}',[KuisController::class,'editkuis'])->name('editkuis');
    Route::post('updatekuis/{id}',[KuisController::class,'updatekuis'])->name('updatekuis');
    Route::post('deletekuis/{id}',[KuisController::class,'deletekuis'])->name('deletekuis');
});
