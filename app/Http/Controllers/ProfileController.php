<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class ProfileController extends Controller
{

    public function index()
    {
    	$data['user']=\App\Artikel::findAll();
    	return view('app')->with($data);
    }


       public function profile($id)
    {
    	 $data['user']=\App\User::find($id);
      return view('profile.profile')->with($data);
    }

       public function edit($id)
    {
    	$data['user']=\App\User::find($id);
		return view('auth.setting_profile')->with($data);

    }

    public function update()
    {

      $a = \App\User::find(Input::get('id'));
      $a->name = Input::get('name');
      $a->jenis_kelamin = Input::get('jenis_kelamin');
      $a->umur = Input::get('umur');
      $a->tempattanggallahir = Input::get('tempattanggallahir');
      $a->agama = Input::get('agama');
      $a->alamat = Input::get('alamat');
      $a->pekerjaan = Input::get('pekerjaan');
      $a->no_telp = Input::get('no_telp');
      $a->informasi = Input::get('informasi');
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }
      $a->save();
      return redirect(url('user/'.Auth::user()->id. '/edit'));
    }
  } 
