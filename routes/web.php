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




// app/Http/routes.php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		return view('front.index');
	});


	Route::get('test',function(){
		
		
		$locale = LaravelLocalization::getCurrentLocale();
		$test = \App\Test::where('locale', $locale)->first();
		//dd($test->title);
		return view('front.test', ['test'=>$test]);
	});


	

});







/*Route::get('/{locale?}', function ($locale = null) {
	App::setLocale($locale);
    return view('front.index');
});

Route::group(['prefix' => 'faculty'], function(){

	Route::get('art', function(){
		return view('front.faculty');
	});

});

$allLanguages = ["en", "prs"];

$lng = ( in_array( Request::segment(1), $allLanguages) ) ? Request::segment(1) : "";

Route::group(['prefix' => $lng], function(){
	App::setLocale((Request::segment(1)));
	Route::get('/faculty', function(){
		//dd(Request::segment(1));
		return view('front.faculty');
	});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/