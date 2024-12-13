<?php

use App\Http\Controllers\PartyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Models\Answer;
use App\Models\Looking_for_party;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PostController::class)->middleware(['auth'])->group(function () {
    Route::get('/index', 'index')->name('index');

    Route::get('/posts/{post}/create','create')->name('create');
    
    Route::post('/posts','store')->name('posts.store');
    
    Route::get('posts/{post}/edit','edit')->name('edit');
    
    Route::put('posts/{post}','update')->name('update');
    
    Route::delete('/posts/{post}','delete')->name('delete');
});

Route::get('/games/{game}/posts',[PostController::class,'byGame'])->name('posts.by_game');

Route::post('/posts/{post}/comments',  [CommentController::class,'storeComment'])->name('comments.store');
Route::post('/looking_for_partys',[PartyController::class,'Partystore'])->name('looking_for_partys.store');

Route::get('/questions',[QuestionController::class,'index'])->name('questions.index');
Route::get('/questions/{question}/create',[QuestionController::class,'create'])->name('questions.create');
Route::post('/questions',[QuestionController::class,'store'])->name('questions.store');
Route::delete('/questions/{question}',[QuestionController::class,'delete'])->name('questions.delete');

Route::post('/questions/{question}/answers',  [AnswerController::class,'storeAnswer'])->name('answers.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
