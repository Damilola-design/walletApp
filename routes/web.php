<?php
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/transactions', [HomeController::class, 'getTran'])->name('transaction');
Route::get('/pay', [PaymentController::class, 'pay']);
Route::post('/pay', [PaymentController::class, 'make_payment'])->name('pay');
Route::get('/pay/callback', [PaymentController::class, 'payment_callback'])->name('pay.callback');


//Admin Routes
Route::middleware('auth', 'isAdmin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/users', [AdminController::class, 'index'])->name('admin.users');
    Route::get('admin/history', [AdminController::class, 'history'])->name('admin.history');
    Route::get('admin/user/{id}', [AdminController::class, 'getUser'])->name('admin.transaction');
    
    // Route::get('admin/premium', "Admin\UsersController@premium")->name('admin.premium');
    // Route::patch('admin/update/store', "Admin\UsersController@getPremium")->name('admin.update.store');
    // Route::post('admin/users/store', "Admin\UsersController@store")->name('admin.users.store');
    // Route::post('admin/premium/add', "Admin\UsersController@add")->name('admin.premium.add');
});


