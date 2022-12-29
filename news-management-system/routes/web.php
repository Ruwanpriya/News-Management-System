<?php

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/dash', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/','App\Http\Controllers\frontController@home');
Route::get('/article/{slug}','App\Http\Controllers\frontController@article'); 
Route::get('/category/{slug}','App\Http\Controllers\frontController@category');
Route::get('/page/{slug}','App\Http\Controllers\frontController@page');
Route::get('/contact-us','App\Http\Controllers\frontController@contactUs');
Route::post('/sendmessage','App\Http\Controllers\crudController@insertData');

//admin
Route::get('/dashboard','App\Http\Controllers\adminController@dashboard');
Route::get('/regi','App\Http\Controllers\HomeController@register');
Route::get('/all_users','App\Http\Controllers\adminController@users');

Auth::routes();
Route::get('logout','App\Http\Controllers\HomeController@logout');
Route::get('/register','App\Http\Controllers\HomeController@register');
//settings
Route::get('/websettings','App\Http\Controllers\adminController@websettings');
Route::post('/addsettings','App\Http\Controllers\crudController@insertData');
Route::post('/updateSettings/{id}','App\Http\Controllers\crudController@updateData');

//category
Route::get('/viewcategory','App\Http\Controllers\adminController@viewcategory');
Route::get('/editcategory/{id}','App\Http\Controllers\adminController@editCategory');
Route::post('/addCategory','App\Http\Controllers\crudController@insertData');
Route::post('/updateCategory/{id}','App\Http\Controllers\crudController@updateData');
Route::post('/multipledelete','App\Http\Controllers\adminController@multipleDelete');

//posts
Route::get('/add-post','App\Http\Controllers\adminController@addpost');
Route::post('/addpost','App\Http\Controllers\crudController@insertData');
Route::get('/all-post','App\Http\Controllers\adminController@allpost');
Route::get('/editpost/{id}','App\Http\Controllers\adminController@editpost'); 
Route::post('/updatepost/{id}','App\Http\Controllers\crudController@updateData');

//search
Route::get('search-content','App\Http\Controllers\frontController@searchContent');

//pages
Route::get('/add-page','App\Http\Controllers\adminController@addpage');
Route::post('/addpage','App\Http\Controllers\crudController@insertData');
Route::get('/all-pages','App\Http\Controllers\adminController@allpages');
Route::get('/editpage/{id}','App\Http\Controllers\adminController@editpage'); 
Route::post('/updatepage/{id}','App\Http\Controllers\crudController@updateData');

//Messages
Route::get('/messages','App\Http\Controllers\adminController@messages');


//Advertistments
Route::get('/add-adv','App\Http\Controllers\adminController@addAdv');
Route::post('/addadv','App\Http\Controllers\crudController@insertData');
Route::get('/all-adv','App\Http\Controllers\adminController@allAdv');
Route::get('/editadv/{id}','App\Http\Controllers\adminController@editAdv');
Route::post('/updateadv/{id}','App\Http\Controllers\crudController@updateData');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//front page login remove
//<span class="login-btn"><a href="{{ route('login') }}">Log in</a></span>