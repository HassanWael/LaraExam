<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admins', [App\Http\Controllers\Admin\adminController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admins/Users', [App\Http\Controllers\Admin\adminController::class, 'manage_admins'])->name('manage_admins');
Route::get('/admins/exams', [App\Http\Controllers\Admin\adminController::class, 'manage_exams'])->name('manage_exams');
Route::get('/admins/questions', [App\Http\Controllers\Admin\adminController::class, 'manage_questions'])->name('manage_questions');
Route::get('/admins/results', [App\Http\Controllers\Admin\adminController::class, 'manage_results'])->name('manage_results');
Route::get('/exams/{exam}',[App\Http\Controllers\HomeController::class, 'exams'])->name('exam');
Route::get('/exam/{exam}/json',[App\Http\Controllers\HomeController::class, 'examfetch'])->name('examfetch');
Route::get('/exam/{examId}/result',[App\Http\Controllers\HomeController::class, 'result'])->name('result');
// Route::group(['namespace' => 'Admin',], function() {
//     Route::resource('admin', 'adminController');
// });

// Route::resource('exam', ExamController::class);
Route::resource('manageAdmin', adminController::class);
Route::resource('history', HistoryController::class);

Route::resource('question', QuestionController::class);



