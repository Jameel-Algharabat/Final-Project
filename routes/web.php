<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');

Route::get('/shop', [HomeController::class, 'shop']);

Route::get('/view_category', [AdminController::class, 'view_category']);

Route::post('/add_category', [AdminController::class, 'add_category']);

Route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

Route::get('/view_brand', [AdminController::class, 'view_brand']);

Route::post('/add_brand', [AdminController::class, 'add_brand']);

Route::get('/delete_brand/{id}', [AdminController::class, 'delete_brand']);

Route::get('/view_product', [AdminController::class, 'view_product']);

Route::post('/add_product', [AdminController::class, 'add_product']);

Route::get('/show_product', [AdminController::class, 'show_product']);
Route::get('/show_contact', [AdminController::class, 'show_contact']);

Route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);

Route::get('/update_product/{id}', [AdminController::class, 'update_product']);

Route::post('/update_product_confirm/{id}', [AdminController::class, 'update_product_confirm']);

Route::get('/order', [AdminController::class, 'order']);


Route::get('/profile', [AdminController::class, 'profile']);

Route::get('/delivered', [AdminController::class, 'delivered']);

Route::get('/users', [AdminController::class, 'users']);

Route::get('/update_user/{id}', [AdminController::class, 'update_user']);

Route::post('/update_user_confirm/{id}', [AdminController::class, 'update_user_confirm']);

Route::get('/delete_users/{id}', [AdminController::class, 'delete_users']);

Route::get('/comment', [AdminController::class, 'comment']);

Route::get('/delete_comment/{id}', [AdminController::class, 'delete_comment']);

Route::get('/show_comment/{id}', [AdminController::class, 'show_comment']);

Route::get('/delivered_order/{id}', [AdminController::class, 'delivered_order']);
Route::get('/used_shoes_admin', [AdminController::class, 'used_shoes_admin']);
Route::get('/delete_used_shoes_admin/{id}', [AdminController::class, 'delete_used_shoes_admin']);




//Route::get('/contact', [HomeController::class, 'createForm']);
Route::post('/comment', [HomeController::class, 'comment'])->name('comment');

Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/home_page', [HomeController::class, 'home_page']);




Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/product_page/{id}', [HomeController::class, 'product_page']);

Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);

Route::get('/show_cart', [HomeController::class, 'show_cart']);

Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);

Route::get('/cash_order', [HomeController::class, 'cash_order']);

Route::get('/stripe/{totalprice}', [HomeController::class, 'stripe']);

Route::get('/product_search', [HomeController::class, 'product_search']);
Route::get('/UsedShoesSearch', [HomeController::class, 'UsedShoesSearch']);

Route::get('/user_profile', [HomeController::class, 'user_profile']);

Route::get('/update_user', [HomeController::class, 'update_user']);

Route::get('/update_user_confirm', [HomeController::class, 'update_user_confirm']);

Route::get('/used_shoes', [HomeController::class, 'used_shoes']);


Route::get('/view_product_used', [HomeController::class, 'view_product_used']);

Route::post('/add_product_used', [HomeController::class, 'add_product_used']);

Route::get('/used_shoes', [HomeController::class, 'used_shoes']);

Route::get('/used_product_page/{id}', [HomeController::class, 'used_product_page']);

Route::get('/delete_used_product/{id}', [HomeController::class, 'delete_used_product']);

Route::get('/update_used_product/{id}', [HomeController::class, 'update_used_product']);

Route::post('/update_used_product_confirm/{id}', [HomeController::class, 'update_used_product_confirm']);

Route::post('/add_contact', [HomeController::class, 'add_contact']);












// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',
// function () {
//     return view(dashboard);
// })->name('dashboard');
