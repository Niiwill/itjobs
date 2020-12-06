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

Route::get('/admin', function () {
    //
})->name('admin')->middleware(['auth','role']);

Route::get('/', function () {

	$tags=Tag::all();
    return view('welcome')->with('tags',$tags);
});
Route::get('/oglasi-za-posao','JobController@index')->name('job.listing');

Route::post('/oglasi-za-posao', function (Request $request) {
    return $request->all();
});
Route::get('/posao/{id}/{slug}','JobController@show')->name('job.show'); 

//ADD ROLE TO USER 
Route::middleware(['auth','role.prevent'])->get('/pre-auth', function () {
    return view('admin/pre-auth');
});
Route::middleware(['auth'])->post('/pre-auth', 'Controller@checkPost');
//

Route::get('/my-company', 'Admin\EmployerController@editMyCompany')->name('mycompany.edit')->middleware(['auth']);
Route::patch('/my-company', 'Admin\EmployerController@updateMyCompany')->name('mycompany.update')->middleware(['auth']);


Route::get('/admin/candidate', 'Admin\CandidateController@index')->name('adminCan')->middleware(['auth','candidate']);
Route::get('/admin/employer', 'Admin\EmployerController@index')->name('adminEmp')->middleware(['auth','employer']);

Route::resource('job', 'JobController')->middleware(['auth','employer']);



