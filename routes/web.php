<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeserController;
use App\Http\Controllers\AssembleController;
use App\Http\Controllers\OfferController;

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
Route::get('/home',[Basecontroller::class,'home'])->name('home');
Route::get('/login',[Basecontroller::class,'login'])->name('login');
Route::post('/login',[Basecontroller::class,'logincheck'])->name('logincheck');
Route::get('/register',[Basecontroller::class,'register'])->name('register');
Route::post('register',[Basecontroller::class,'user_register'])->name('user_register');
Route::get('/product',[Basecontroller::class,'product'])->name('product');
Route::get('/offer',[Basecontroller::class,'offer'])->name('offer');
/*User authentication---user can acess these pages after login*/
Route::group(['middleware'=>'auth'],function(){
Route::get('/user/dashboard',[Basecontroller::class,'userdashboard'])->name('user.dashboard');
Route::get('user/profile',[Profilecontroller::class,'index'])->name('user.profile');
Route::post('/user/user_info',[Profilecontroller::class,'store'])->name('user.store');
Route::get('/user/update',[Profilecontroller::class,'update'])->name('user.update');
Route::get('/logout',[Basecontroller::class,'logout'])->name('logout');
Route::get('/homeservice',[Homesercontroller::class,'index'])->name('homeservice');
Route::post('/homeserviceinfo',[Homesercontroller::class,'store'])->name('homeservice.store');
Route::get('/show_cart',[BaseController::class, 'show_cart']);

Route::post('/add_cart/{id}',[BaseController::class, 'add_cart']);
Route::get('/remove_cart/{id}',[BaseController::class, 'remove_cart']);
Route::get('/cash_order',[BaseController::class, 'cash_order']);

Route::get('/assemble',[Assemblecontroller::class,'index'])->name('assemble');
Route::post('/assembleinfo',[Assemblecontroller::class,'store'])->name('assemble.store');
Route::get('/offer/create',[Offercontroller::class,'create'])->name('offer.create');
Route::post('/offer/create',[Offercontroller::class,'store'])->name('offer.store');
Route::post('/offer_add_cart/{id}',[BaseController::class, 'offer_add_cart']);
});


/*Route::get('/admin/login',[Admincontroller::class,'login'])->name('login');*/
Route::post('/admin/login',[Admincontroller::class,'makelogin'])->name('admin.makelogin');

/*Admin authentication---admin can acess these pages after login*/
Route::group(['middleware'=>'auth'],function(){
    Route::get('/admin/dashboard',[Admincontroller::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[Admincontroller::class,'logout'])->name('admin.logout');
    Route::get('/category/add',[Categorycontroller::class,'create'])->name('category.create');
    Route::post('/category/add',[Categorycontroller::class,'store'])->name('category.store');

    Route::get('/products',[Productcontroller::class,'index'])->name('product.list');
    Route::get('/product/create',[Productcontroller::class,'create'])->name('product.create');
    Route::post('/product/create',[Productcontroller::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}',[Productcontroller::class,'edit'])->name('product.edit');
    Route::post('/product/edit/{id}',[Productcontroller::class,'update'])->name('product.update');
    Route::get('/product/delete/{id}',[Productcontroller::class,'destroy'])->name('product.delete');
    


});


