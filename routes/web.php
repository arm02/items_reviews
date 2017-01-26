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


Route::get('check.emails',function()
{
	return view('emails.hello');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('send',function()
{

	$data['header_banner'] = 'http://cdn.akamai.steamstatic.com/steam/apps/570/header.jpg?t=1482257283';
	$data['header_image'] = 'http://cdn.akamai.steamstatic.com/steam/apps/570/header.jpg?t=1482257283';
	$data['text_paragraph'] = 'AKU MANUSIA BIASA';
	$data['link_to'] = 'facebook.com/adrmilano';
	$data['link_text'] = 'HACKER';


	Mail::send('emails.hello',$data,function($m)
			{
				$m->from('arm.adrian@outlook.com','Adrian Milano');
				$m->to('ariefsetya@live.com');
				$m->subject('Hello from World '.gethostname().'Adrian Milano (02)');
				$m->cc('arm.adrian@artivisi.com');
				$m->bcc('email@mailiator.com');
				$m->replyTo('arm.adrian02@gmail.com');

				//$m->attach(storage_path(gambarnya.jpg));
			});

	echo "Email Kekirim Coeg";
});