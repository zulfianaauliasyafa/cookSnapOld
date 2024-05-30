<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProfileController;
use App\Models\User;

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
// home user
//  Route::get('/', [UserController::class, 'login'])->name('login');
// Route::get('home', [HomeController::class, 'index'])->middleware('auth')->name('home');
// Route::get('home', [HomeController::class, 'index'])->name('home');
// Route::get('about', [HomeController::class, 'about'])->name('about');
// Route::get('contact', [HomeController::class, 'contact'])->name('contact');
// Route::get('course', [HomeController::class, 'course'])->name('course');
// Route::get('profile', [HomeController::class, 'profile'])->name('profile');
// Route::get('cord', [HomeController::class, 'cord'])->name('cord');
// Route::get('/cordview/{id}', [HomeController::class, 'cordview'])->name('cordview');
// //course
// Route::get('coursegitar', [HomeController::class, 'coursegitar'])->name('coursegitar');
// Route::get('coursedrum', [HomeController::class, 'coursedrum'])->name('coursedrum');
// Route::get('courseviolin', [HomeController::class, 'courseviolin'])->name('courseviolin');
// Route::get('coursepiano', [HomeController::class, 'coursepiano'])->name('coursepiano');
// //endcouser


// //alat musik
// Route::get('gitar', [HomeController::class, 'gitar'])->name('gitar');
// Route::get('piano', [HomeController::class, 'piano'])->name('piano');
// Route::get('violin', [HomeController::class, 'violin'])->name('violin');
// Route::get('drum', [HomeController::class, 'drum'])->name('drum');

// home admin






//music




Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
// Route::get('login', [HomeController::class, 'index'])->middleware('redirect.if.login')->name('login');
Route::get('/', [UserController::class, 'login'])->name('login')->middleware('guest.only');

// Route::get('/', [HomeController::class, 'index'])->middleware('redirect.if.login')->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');


//x



//edit user





Route::middleware('auth')->group(function () {


    Route::resource('musics', MusicController::class);
    Route::resource('resep', ResepController::class);
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('profiladmin', [AdminController::class, 'profil'])->name('admin.profile');
Route::get('profil', [HomeController::class, 'profil'])->name('profil');
    
    //  Route::post('login', [UserController::class, 'login_action'])->name('login.action');
    Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('course', [HomeController::class, 'course'])->name('course');
Route::get('profile', [HomeController::class, 'profile'])->name('profile');
Route::get('cord', [HomeController::class, 'cord'])->name('cord');
Route::get('/cordview/{id}', [HomeController::class, 'cordview'])->name('cordview');
//course
Route::get('coursegitar', [HomeController::class, 'coursegitar'])->name('coursegitar');
Route::get('coursedrum', [HomeController::class, 'coursedrum'])->name('coursedrum');
Route::get('courseviolin', [HomeController::class, 'courseviolin'])->name('courseviolin');
Route::get('coursepiano', [HomeController::class, 'coursepiano'])->name('coursepiano');
//endcouser


//alat musik
Route::get('gitar', [HomeController::class, 'gitar'])->name('gitar');
Route::get('piano', [HomeController::class, 'piano'])->name('piano');
Route::get('violin', [HomeController::class, 'violin'])->name('violin');
Route::get('drum', [HomeController::class, 'drum'])->name('drum');



    Route::get('home', [HomeController::class, 'index'])->name('home');
    // Route::get('password', [UserController::class, 'password'])->name('password');
    // Route::post('password', [UserController::class, 'password_action'])->name('password.action');
    // Route::post('logout', [UserController::class, 'logout'])->name('logout');
});

