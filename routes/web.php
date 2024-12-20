<?php

use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebsiteController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/optimize', function () {
    Artisan::call('optimize');
    return 'optimize complete!';
});


Route::get('/', function () {
    session()->put('theme','version1');
    $data['products'] = Product::query()->paginate(15);
    return view('website.version1.home')->with($data);
})->name('/');
Route::get('/product-category/{id}',[\App\Http\Controllers\WebsiteController::class,'category_ways_product'])->name('product.category');
Route::get('/all-hot-deal',[\App\Http\Controllers\WebsiteController::class,'all_hot_deal'])->name('all.hot.deal');
Route::get('/product/{id}',[\App\Http\Controllers\WebsiteController::class,'single_product'])->name('single.product');
Route::get('/About-us',[\App\Http\Controllers\WebsiteController::class,'about'])->name('website.about');
Route::get('/Return-policy',[\App\Http\Controllers\WebsiteController::class,'return_policy'])->name('website.return.policy');
Route::get('/Delivery-policy',[\App\Http\Controllers\WebsiteController::class,'delivery_policy'])->name('website.delivery.policy');
Route::post('/add-card',[\App\Http\Controllers\CardController::class,'add_card'])->name('add.card');
Route::get('/order',[\App\Http\Controllers\CardController::class,'add_card'])->name('order');
Route::post('/quick-view',[\App\Http\Controllers\CardController::class,'quickView'])->name('quick.view');
Route::post('/size-price',[\App\Http\Controllers\CardController::class,'sizePrice'])->name('sizePrice');
Route::post('/minus-card',[\App\Http\Controllers\CardController::class,'minus_card'])->name('minus.card');
Route::post('/update-card',[\App\Http\Controllers\CardController::class,'add_card'])->name('update.card');
Route::get('/checkout',[\App\Http\Controllers\CheckoutController::class,'checkout'])->name('checkout');
Route::get('/card-clear',[\App\Http\Controllers\CardController::class,'card_clear'])->name('card.clear');
Route::get('/card-remove/{id}/{stock_id}',[\App\Http\Controllers\CardController::class,'remove'])->name('card.remove');
Route::post('/place-order',[\App\Http\Controllers\OrderController::class,'place_order'])->name('place.order');
Route::get('/order-received/{id}',[\App\Http\Controllers\OrderController::class,'order_recived'])->name('order.received');
Route::get('/cart',[\App\Http\Controllers\OrderController::class,'cart'])->name('cart');
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::post('/contact-store',[WebsiteController::class,'contactStore'])->name('contact.store');
Route::get('/about',[WebsiteController::class,'aboutUs'])->name('about.us');
Route::get('/privacy-policy',[WebsiteController::class,'policy'])->name('policy');
Route::get('/tearms-condition',[WebsiteController::class,'tearms'])->name('tearms');
Route::post('/review',[WebsiteController::class,'review'])->name('review');
Route::get('/blog-post',[WebsiteController::class,'blog'])->name('blog.post');
Route::get('/blog/details/{id}',[WebsiteController::class,'blogDetails'])->name('blog.details');
Route::get('order-print/{id}',[\App\Http\Controllers\OrderController::class,'orderPrint'])->name('print.order');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories',\App\Http\Controllers\CategoryController::class);
Route::resource('slider-image',\App\Http\Controllers\SliderImageController::class);
Route::resource('settings',\App\Http\Controllers\SettingController::class);
Route::resource('products',ProductController::class);
Route::resource('delivery-policy',\App\Http\Controllers\DeliveryPolicyController::class);
Route::resource('return-policy',\App\Http\Controllers\ReturnPolicyController::class);
Route::resource('about-us',\App\Http\Controllers\AboutUsController::class);
Route::resource('blog-categories',\App\Http\Controllers\BlogCategoryController::class);
Route::resource('blogs',\App\Http\Controllers\BlogController::class);
Route::resource('offers',OfferController::class);

/*Order Route*/
Route::get('pending-order',[\App\Http\Controllers\OrderController::class,'pending_order'])->name('pending.order');
Route::get('received-order',[\App\Http\Controllers\OrderController::class,'received_order'])->name('received.order');
Route::get('store-order/{id}',[\App\Http\Controllers\OrderController::class,'store_order'])->name('store.order');
Route::get('order-details/{id}',[\App\Http\Controllers\OrderController::class,'details_order'])->name('order.details');
Route::get('delete-order/{id}',[\App\Http\Controllers\OrderController::class,'delete_order'])->name('delete.order');

Route::get('order-page/{id}',[\App\Http\Controllers\OrderController::class,'orderPage'])->name('order.page');
Route::get('chagne-order-status/{status}',[\App\Http\Controllers\OrderController::class,'chagneStatus'])->name('change.order.status');

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return 'Migration complete!';
});


