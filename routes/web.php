<?php

use App\Http\Controllers\ArmController;
use App\Http\Controllers\BackController;
use App\Http\Controllers\ChestController;
use App\Http\Controllers\LegController;
use App\Http\Controllers\ShoulderController;
use App\Http\Controllers\WelcomeController;
use App\Models\Shoulder;
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
route::get('/',function(){
    return view('welcome');
});

route::get('/arm',[ArmController::class ,'index' ])->name('arm.index');
route::get('arm/create',[ArmController::class,'create'])->name('arm.create');
route::post('/arm',[ArmController::class,'store'])->name('arm.store');
route::get('/arm/{id}/edit',[ArmController::class,'edit'] )->name('arm.edit');
route::put('/arm/{id}',[ArmController::class,'update'])->name('arm.update');
Route::delete('arm/{id}', [ArmController::class, 'destroy'])->name('arm.destroy');
//////php
route::get('/back',[BackController::class,'index'])->name('back.index');
route::get('/back/create',[BackController::class,'create'])->name('back.create');
route::post('/back',[BackController::class,'store'])->name('back.store');
route::get('/back/{id}/edit',[BackController::class,'edit'])->name('back.edit');
route::put('/back/{id}',[BackController::class,'update'])->name('back.update');
route::delete('/back/{id}',[BackController::class,'destroy'])->name('back.destroy');
/////
route::get('/chest',[ChestController::class,'index'])->name('chest.index');
route::get('/chest/create',[ChestController::class,'create'])->name('chest.create');
route::post('/chest',[ChestController::class,'store'])->name('chest.store');
route::get('/chest/{id}/edit',[ChestController::class,'edit'])->name('chest.edit');
route::put('/chest/{id}',[ChestController::class,'update'])->name('chest.update');
route::delete('/chest/{id}',[ChestController::class,'destroy'])->name('chest.destroy');
////
route::get('/leg',[LegController::class,'index'])->name('leg.index');
route::get('/leg/create',[LegController::class,'create'])->name('leg.create');
route::post('/leg',[LegController::class,'store'])->name('leg.store');
route::get('/leg/{id}/edit',[LegController::class,'edit'])->name('leg.edit');
route::put('/leg/{id}',[LegController::class,'update'])->name('leg.update');
route::delete('/leg/{id}',[LegController::class,'destroy'])->name('leg.destroy');

///
route::get('/shoulder',[ShoulderController::class,'index'])->name('shoulder.index');
route::get('/shoulder/create',[ShoulderController::class,'create'])->name('shoulder.create');
route::post('/shoulder',[ShoulderController::class,'store'])->name('shoulder.store');
route::get('/shoulder/{id}/edit',[ShoulderController::class,'edit'])->name('shoulder.edit');
route::put('/shoulder/{id}',[ChestController::class,'update'])->name('shoulder.update');
route::delete('/shoulder/{id}',[ShoulderController::class,'destroy'])->name('shoulder.destroy');
