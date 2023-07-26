<?php
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('logout',[LogoutController::class,'logout'])->middleware('auth')->name("logout");

Route::get("blog",[BlogController::class,"index"])->name('blog');
Route::post("blog",[BlogController::class,"store"])->middleware('auth');
Route::delete("blog/{blog}",[BlogController::class,"destroy"])->name('blog.destroy')->middleware('auth');
Route::get("blog/{blog}",[BlogController::class,"get_edit"])->middleware('auth')->name('blog.edit');

Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('login', [LoginController::class,'store']);

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register', [RegisterController::class,'store']);

Route::middleware('auth','admin')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
});
Route::middleware('auth','moderator')->prefix('moderator')->group(function () {
    Route::get('dashboard', [ModeratorController::class,'index'])->name('moderator.dashboard');
});
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [UserController::class,'index'])->name('dashboard');
});