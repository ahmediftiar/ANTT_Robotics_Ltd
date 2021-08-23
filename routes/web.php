<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
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

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//All routes starts here

Route::get('/', [WelcomeController::class, 'home'])->name('home');

//Course routes starts
Route::get('/course', [WelcomeController::class, 'course'])->name('course');
Route::get('/course/basicarduino', [WelcomeController::class, 'basicarduino'])->name('course.basicarduino');
Route::get('/course/programmingkids', [WelcomeController::class, 'programmingkids'])->name('course.programmingkids');
Route::get('/course/scratchprograms', [WelcomeController::class, 'scratchprograms'])->name('course.scratchprograms');
Route::get('/course/arduinowithtinkercad', [WelcomeController::class, 'arduinowithtinkercad'])->name('course.arduinowithtinkercad');
Route::get('/course/basicrobotics', [WelcomeController::class, 'basicrobotics'])->name('course.basicrobotics');
Route::get('/course/buildgames', [WelcomeController::class, 'buildgames'])->name('course.buildgames');
Route::get('/course/soccerrobot', [WelcomeController::class, 'soccerrobot'])->name('course.soccerrobot');
Route::get('/course/iotcar', [WelcomeController::class, 'iotcar'])->name('course.iotcar');

//Course routes End
Route::get('/shop',[WelcomeController::class, 'shop'])->name('shop');
Route::get('/shop/edublock',[WelcomeController::class, 'edublock'])->name('shop.edublock');
Route::get('/shop/schoolofiot',[WelcomeController::class, 'schoolofiot'])->name('shop.schoolofiot');

//Press Release routes End
Route::get('/pressrelease', [WelcomeController::class, 'pressrelease'])->name('pressrelease');
Route::get('/pressrelease/press1', [WelcomeController::class, 'press1'])->name('pressrelease.press1');
Route::get('/pressrelease/press2', [WelcomeController::class, 'press2'])->name('pressrelease.press2');