<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;

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

// VIEWS
Route::get('/','JobController@home');
Route::get('/oglasi-za-posao','JobController@index')->name('job.listing');
Route::post('/oglasi-za-posao', function (Request $request) {
    return $request->all();
});
Route::get('/posao/{id}/{slug}','JobController@show')->name('job.single');
;
Route::get('/it-dogadjaji/{id}/{slug}','ArticleController@show');

Route::get('/it-price','ArticleController@texts');
Route::get('/it-price/{id}/{slug}','ArticleController@show')->name('articles_single');

// Private Policy
Route::get('/politika-privatnosti', function (Request $request) {
   return view('privacy-policy');
});


// ADMIN
Route::get('/admin','JobController@indexAdmin')->name('admin')->middleware('auth');

// ADMIN - JOBS
Route::resource('job', 'JobController')->middleware('auth');

// ADMIN - COMPANIES
Route::resource('company', 'CompanyController')->middleware('auth');

// ADMIN - ARTICLES
Route::resource('admin/article', 'ArticleController')->middleware('auth');





