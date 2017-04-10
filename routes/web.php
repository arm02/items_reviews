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



Route::auth();

Route::get('/logout',function ()
{
	Auth::logout();
	return redirect(url('/login'));
});

Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path('sampul') . '/' . $filename;

	$file = File::get($path);
	$type = File::mimeType($path);

	$response = Response::make($file);
	$response->header("Content-Type", $type);

	return $response;
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/','DetailController@category');
Route::get('/barang',function ()
{
	return redirect(url('/barang/list'));
});
Route::get('/home', 'HomeController@index');
Route::get('/search', 'DetailController@search');
Route::get('/barang/list', 'BarangController@index');
Route::get('/barang/beranda' , 'DetailController@all');
Route::get('item-{id}','DetailController@detail');

Route::post('/barang/save','BarangController@savelagi');
Route::get('/barang/reset/{id}','BarangController@truncate');
Route::get('/barang/add','BarangController@add');
Route::get('/barang/edit/{id}','BarangController@edit');
Route::post('/barang/update','BarangController@update');
Route::get('/barang/delete/{id}','BarangController@delete');
Route::post('/komentar','BarangController@komentar');
Route::get('/hapuskomentar/{id}','BarangController@hapuskomentar');

Route::get('/user/{id}/edit', 'HomeController@setting_profile');
Route::get('/user/{id}/change-email','HomeController@setting_email');
Route::get('/user/{id}/change-password', 'HomeController@setting_password');
Route::get('/user/{id}/profile', 'ProfileController@profile');
Route::post('/user/update/email','EmailController@update');
Route::post('/user/update/password','EmailController@create');
Route::get('/user/edit/{id}','ProfileController@edit');
Route::post('/profile/update/','ProfileController@update');
