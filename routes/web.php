<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\AboutUsController;
use App\Http\Controllers\Front\ProductsController;
use App\Http\Controllers\Front\ProductDetailsController;
use App\Http\Controllers\Front\ContactUsController;

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

//Route::get('/about_us', function () {
//    return view('about_us');
//})->name('about_us');
//
//Route::get('/products', function () {
//    return view('products');
//})->name('products');
//
//Route::get('/product', function () {
//    return view('product_details');
//})->name('product');
//
//
//Route::get('/contact_us', function () {
//    return view('contact_us');
//})->name('contact_us');
//
//
//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//})->name('dashboard');
//
//Route::get('/settings', function () {
//    return view('admin.settings');
//})->name('settings');

Auth::routes();


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function() {

    Route::get('/', [HomeController::class,'index'])->name('home');

    Route::get('/about_us', [AboutUsController::class,'index'])->name('about_us');

    Route::get('/products', [ProductsController::class,'index'])->name('products');

    Route::get('/product', [ProductDetailsController::class,'index'])->name('product_details');
    Route::get('/review/create', [ProductDetailsController::class, 'create'])->name('review.create');
    Route::post('/review/store', [ProductDetailsController::class, 'store'])->name('review.store');


    Route::get('/contact_us', [ContactUsController::class,'index'])->name('contact_us');
    Route::get('/contact_us/create', [ContactUsController::class, 'create'])->name('contact.create');
    Route::post('/contact_us/store', [ContactUsController::class, 'store'])->name('contact.store');

});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function() {

    Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/setting', [\App\Http\Controllers\admin\SettingController::class, 'index'])->name('setting');
    Route::get('/setting/edit/{id}', [\App\Http\Controllers\admin\SettingController::class, 'edit'])->name('setting.edit');
    Route::post('/setting/update/{id}', [\App\Http\Controllers\admin\SettingController::class, 'update'])->name('setting.update');


    Route::get('/about', [\App\Http\Controllers\admin\AboutController::class, 'index'])->name('about');
    Route::get('/about/edit/{id}', [\App\Http\Controllers\admin\AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about/update/{id}', [\App\Http\Controllers\admin\AboutController::class, 'update'])->name('about.update');


    Route::get('/exhibitions', [\App\Http\Controllers\admin\ExhibitionController::class, 'index'])->name('exhibitions');
    Route::get('/exhibitionTrashed', [\App\Http\Controllers\admin\ExhibitionController::class, 'exhibitionTrashed'])->name('exhibition.trashed');
    Route::get('/exhibition/create', [\App\Http\Controllers\admin\ExhibitionController::class, 'create'])->name('exhibition.create');
    Route::post('/exhibition/store', [\App\Http\Controllers\admin\ExhibitionController::class, 'store'])->name('exhibition.store');
    Route::get('/exhibition/edit/{id}', [\App\Http\Controllers\admin\ExhibitionController::class, 'edit'])->name('exhibition.edit');
    Route::post('/exhibition/update/{id}', [\App\Http\Controllers\admin\ExhibitionController::class, 'update'])->name('exhibition.update');
    Route::get('/exhibition/delete/{id}', [\App\Http\Controllers\admin\ExhibitionController::class, 'destroy'])->name('exhibition.delete');
    Route::get('/exhibition/softdelete/{id}', [\App\Http\Controllers\admin\ExhibitionController::class, 'softDestroy'])->name('exhibition.softdelete');
    Route::get('/exhibition/restore/{id}', [\App\Http\Controllers\admin\ExhibitionController::class, 'restore'])->name('exhibition.restore');


    Route::get('/paintings', [\App\Http\Controllers\admin\PaintingController::class, 'index'])->name('paintings');
    Route::get('/paintingTrashed', [\App\Http\Controllers\admin\PaintingController::class, 'paintingTrashed'])->name('painting.trashed');
    Route::get('/painting/create', [\App\Http\Controllers\admin\PaintingController::class, 'create'])->name('painting.create');
    Route::post('/painting/store', [\App\Http\Controllers\admin\PaintingController::class, 'store'])->name('painting.store');
    Route::get('/painting/edit/{id}', [\App\Http\Controllers\admin\PaintingController::class, 'edit'])->name('painting.edit');
    Route::post('/painting/update/{id}', [\App\Http\Controllers\admin\PaintingController::class, 'update'])->name('painting.update');
    Route::get('/painting/delete/{id}', [\App\Http\Controllers\admin\PaintingController::class, 'destroy'])->name('painting.delete');
    Route::get('/painting/softdelete/{id}', [\App\Http\Controllers\admin\PaintingController::class, 'softDestroy'])->name('painting.softdelete');
    Route::get('/painting/restore/{id}', [\App\Http\Controllers\admin\PaintingController::class, 'restore'])->name('painting.restore');



    Route::get('/partners', [\App\Http\Controllers\admin\PartnerController::class, 'index'])->name('partners');
    Route::get('/partnerTrashed', [\App\Http\Controllers\admin\PartnerController::class, 'partnerTrashed'])->name('partner.trashed');
    Route::get('/partner/create', [\App\Http\Controllers\admin\PartnerController::class, 'create'])->name('partner.create');
    Route::post('/partner/store', [\App\Http\Controllers\admin\PartnerController::class, 'store'])->name('partner.store');
    Route::get('/partner/edit/{id}', [\App\Http\Controllers\admin\PartnerController::class, 'edit'])->name('partner.edit');
    Route::post('/partner/update/{id}', [\App\Http\Controllers\admin\PartnerController::class, 'update'])->name('partner.update');
    Route::get('/partner/delete/{id}', [\App\Http\Controllers\admin\PartnerController::class, 'destroy'])->name('partner.delete');
    Route::get('/partner/softdelete/{id}', [\App\Http\Controllers\admin\PartnerController::class, 'softDestroy'])->name('partner.softdelete');
    Route::get('/partner/restore/{id}', [\App\Http\Controllers\admin\PartnerController::class, 'restore'])->name('partner.restore');


    Route::get('/reviews', [\App\Http\Controllers\admin\ReviewController::class, 'index'])->name('reviews');
    Route::get('/reviewTrashed', [\App\Http\Controllers\admin\ReviewController::class, 'reviewTrashed'])->name('review.trashed');
    Route::get('/review/delete/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'destroy'])->name('review.delete');
    Route::get('/review/softdelete/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'softDestroy'])->name('review.softdelete');
    Route::get('/review/restore/{id}', [\App\Http\Controllers\admin\ReviewController::class, 'restore'])->name('review.restore');


    Route::get('/contacts', [\App\Http\Controllers\admin\ContactController::class, 'index'])->name('contacts');
    Route::get('/contact/delete/{id}', [\App\Http\Controllers\admin\ContactController::class, 'destroy'])->name('contact.delete');




});
