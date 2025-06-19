<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminInvoiceController;
use App\Http\Controllers\AdminVisiController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminSaranController;
use App\Http\Controllers\AdminVisimisiController;
use App\Http\Controllers\HomeContactController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    $data = [
        'content' => 'home/about/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/services', function () {
    $data = [
        'content' => 'home/services/index'
    ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/contact', function () {
    $data = [
        'content' => 'home/contact/index'
    ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/contact', [HomeContactController::class, 'index']);
Route::post('/contact/send', [HomeContactController::class, 'send']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/about', [HomeController::class, 'visi']);
Route::get('/services', [HomeController::class, 'service']);

Route::get('/login', [AdminAuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        $data = [
            'content' =>  'admin/dashboard/index'
        ];
        return view('admin.layouts.wrapper', $data);
    });


    Route::get('/logout', [AdminAuthController::class, 'logout']);
    Route::get('/about', [AdminAboutController::class, 'index']);
    Route::put('/about/update', [AdminAboutController::class, 'update']);
    Route::get('/visi', [AdminVisiController::class, 'index']);
    Route::put('/visi/update', [AdminVisiController::class, 'update']);
    Route::resource('/invoice', AdminInvoiceController::class);
    Route::resource('/service', AdminServiceController::class);
    Route::resource('/saran', AdminSaranController::class);
    Route::resource('/banner', AdminBannerController::class);
    Route::resource('/user', AdminUserController::class);
    Route::get('/exportpdf', [AdminInvoiceController::class, 'exportpdf'])->name('exportpdf');
});
