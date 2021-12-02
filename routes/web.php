<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tag;


// HOME PAGE
Route::get('/','PublicController@home');

// JOBS PUBLIC
Route::get('/oglasi-za-posao','PublicController@search')->name('job.listing');
Route::get('/posao/{id}/{slug}','PublicController@showJob')->name('job.single');

// IT EVENTS
Route::get('/it-dogadjaji','PublicController@events');
Route::get('/it-dogadjaji/{id}/{slug}','PublicController@showEvent');

// IT NEWS
Route::get('/it-price','PublicController@articles')->name('articles_all');
Route::get('/it-price/{id}/{slug}','PublicController@showArticle')->name('articles_single');

// ADMIN
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {

   // ADMIN
   Route::get('/','JobController@index')->name('admin');
   
   // ADMIN - JOBS
   Route::resource('job', 'JobController')->middleware('auth');

   // ADMIN - COMPANIES
   Route::resource('company', 'CompanyController')->middleware('auth');

   // ADMIN - ARTICLES
   Route::resource('article', 'ArticleController')->middleware('auth');

});

// Private Policy
Route::get('/politika-privatnosti', function () {
   return view('privacy-policy');
});






