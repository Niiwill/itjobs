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
Route::get('/posao/{id}/{slug}','JobController@show')->name('job.show');
Route::get('/it-dogadjaji/{id}/{slug}','ArticleController@show')->name('job.show'); 
Route::get('/it-price/{id}/{slug}','ArticleController@show')->name('job.show');

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
Route::get('/admin/article/','ArticleController@indexAdmin')->name('article.index')->middleware('auth');
Route::get('/admin/article/edit/{id}','ArticleController@edit')->name('article.edit')->middleware('auth');
Route::get('/admin/article/create','ArticleController@create')->name('article.create')->middleware('auth');
Route::post('/admin/article/store','ArticleController@store')->name('article.store')->middleware('auth');




