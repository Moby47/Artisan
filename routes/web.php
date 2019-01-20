<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//...............................visitors

Route::get('/', 'pagescontroller@index')->name('landing');

Route::get('/services/{service}', 'pagescontroller@services')->name('serve');

Route::get('/profile-info/{id}', 'pagescontroller@info');

Route::post('/contact', 'pagescontroller@contact')->name('contact');

Route::post('/Testimony', 'pagescontroller@Testimony')->name('Testimony');

Route::get('/service-content', 'pagescontroller@service_con')->name('service_content');

Route::get('/filter-service', 'pagescontroller@filter')->name('filter');

Route::get('/Search-job', 'pagescontroller@wordsearch')->name('wordsearch');

Route::get('/home-filter', 'pagescontroller@homefilter')->name('homefilter');

Route::get('/terms', 'pagescontroller@terms')->name('terms');
//...............................visitors



//neutral
//route resourse //user
//Route::resource('/demo','rescontroller');




//...............................users
//route group to protect  user routes from guests 
Route::group(['middleware' => 'users'], function(){

//pages
Route::get('/dashboard', 'pagescontroller@dash')->name('dash');

Route::get('/profile', 'pagescontroller@profile');

Route::get('/gallery', 'pagescontroller@gallery');

//general details update
Route::POST('/update-general', 'pagescontroller@general')->name('general');

//general details update
Route::POST('/update-biz', 'pagescontroller@biz')->name('biz');

//mark location
Route::POST('/location', 'pagescontroller@mark')->name('mark');

//image upload
Route::POST('/image-upload', 'pagescontroller@pix')->name('pix');

//reload gallery counter
Route::GET('/reload-count', 'pagescontroller@reload_count')->name('reload_count');

//update social
Route::POST('/social-links', 'pagescontroller@social')->name('social');

//pending tasks
//Route::GET('/pending-tasks', 'pagescontroller@alert')->name('alert');

//pending tasks
Route::GET('/tasks', 'pagescontroller@tasks')->name('tasks');

});//end middleware
//...............................users

