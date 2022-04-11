<?php

use Illuminate\Support\Facades\Route;

// HOME PAGE
Route::get('/','PublicController@home');

// COMPANY
Route::get('/it-kompanija/{id}/{slug}','PublicController@showCompany')->name('company.single');;

// JOBS PUBLIC
Route::get('/oglasi-za-posao','PublicController@search')->name('job.search');
Route::get('/posao/{id}/{slug}','PublicController@showJob')->name('job.single');

// IT EVENTS
Route::get('/it-dogadjaji','PublicController@events')->name('events.index');
Route::get('/it-dogadjaji/{id}/{slug}','PublicController@showEvent')->name('events.single');

// IT NEWS
Route::get('/it-price','PublicController@articles')->name('articles.index');
Route::get('/it-price/{id}/{slug}','PublicController@showArticle')->name('articles.single');

// ADMIN
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

   // ADMIN
   Route::get('/','Admin\JobController@dashboard')->name('index');
   
   // ADMIN - JOBS
   Route::resource('jobs', 'Admin\JobController');

   // ADMIN - COMPANIES
   Route::resource('companies', 'Admin\CompanyController');

   // ADMIN - ARTICLES
   Route::resource('articles', 'Admin\ArticleController');

   // ADMIN - ARTICLES
   Route::resource('tags', 'Admin\TagController');

});

// Private Policy
Route::get('/politika-privatnosti', function () {
   return view('privacy-policy');
});

Route::post('/datatables','Admin\JobController@datatables');







