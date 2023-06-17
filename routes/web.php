<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('website.website');
})->name('/');
Route::get('/category/{id}',[\App\Http\Controllers\WebsiteController::class,'category_ways_product'])->name('product.category');
Route::get('/all-hot-deal',[\App\Http\Controllers\WebsiteController::class,'all_hot_deal'])->name('all.hot.deal');
Route::get('/product/{id}',[\App\Http\Controllers\WebsiteController::class,'single_product'])->name('single.product');
Route::get('/About-us',[\App\Http\Controllers\WebsiteController::class,'about'])->name('website.about');
Route::get('/Return-policy',[\App\Http\Controllers\WebsiteController::class,'return_policy'])->name('website.return.policy');
Route::get('/Delivery-policy',[\App\Http\Controllers\WebsiteController::class,'delivery_policy'])->name('website.delivery.policy');
Route::post('/add-card',[\App\Http\Controllers\CardController::class,'add_card'])->name('add.card');
Route::post('/minus-card',[\App\Http\Controllers\CardController::class,'minus_card'])->name('minus.card');
Route::post('/update-card',[\App\Http\Controllers\CardController::class,'add_card'])->name('update.card');
Route::get('/checkout',[\App\Http\Controllers\CheckoutController::class,'checkout'])->name('checkout');
Route::get('/card-clear',[\App\Http\Controllers\CardController::class,'card_clear'])->name('card.clear');
Route::get('/card-remove/{id}',[\App\Http\Controllers\CardController::class,'remove'])->name('card.remove');
Route::post('/place-order',[\App\Http\Controllers\OrderController::class,'place_order'])->name('place.order');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('slider-image',\App\Http\Controllers\SliderImageController::class);
Route::resource('settings',\App\Http\Controllers\SettingController::class);
Route::resource('products',ProductController::class);
Route::resource('delivery-policy',\App\Http\Controllers\DeliveryPolicyController::class);
Route::resource('return-policy',\App\Http\Controllers\ReturnPolicyController::class);
Route::resource('about-us',\App\Http\Controllers\AboutUsController::class);

/*Order Route*/
Route::get('pending-order',[\App\Http\Controllers\OrderController::class,'pending_order'])->name('pending.order');
Route::get('received-order',[\App\Http\Controllers\OrderController::class,'received_order'])->name('received.order');
Route::get('store-order/{id}',[\App\Http\Controllers\OrderController::class,'store_order'])->name('store.order');
Route::get('order-details',[\App\Http\Controllers\OrderController::class,'details_order'])->name('order.details');
Route::get('delete-order/{id}',[\App\Http\Controllers\OrderController::class,'delete_order'])->name('delete.order');


