<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/questions',[QuestionController::class,'index'])->name('questions.index');

Route::get('/questions/{id}',[QuestionController::class,'show'])->whereNumber('id')->name('questions.show');

Route::get('/questions/ask',function(){
    return view('questions.create');
})->name('questions.ask');

Route::post('/questions/store',[QuestionController::class,'create'])->name('questions.create');