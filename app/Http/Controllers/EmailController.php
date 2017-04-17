<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class EmailController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function update_email(){
    $a = \App\User::find(Auth::User()->id);
    $a->email = Input::get('email');
    if (Hash::check(Input::get('password'), $a['password'])) {
      $a->save();
      // return redirect(url('user/'. Auth::User()->id .'/change-email'));
      return redirect('user/'. Auth::User()->id .'/change-email')->with('success', 'Success .. Berhasil menganti email');

    }else {
      return redirect('user/'. Auth::User()->id .'/change-email')->with('warning', 'Oops .. Password yang anda masukan tidak sesuai');
    }
  }

  public function update_password(){
    $a = \App\User::find(Auth::User()->id);
    if (Hash::check(Input::get('oldpw'), $a['password']) && Input::get('newpw') == Input::get('confnewpw')) {
      $a->password = bcrypt(Input::get('newpw'));
      $a->save();
      return redirect('user/'. Auth::User()->id .'/change-password')->with('success', 'Success .. Berhasil menganti password');
    }else {
      return redirect('user/'. Auth::User()->id .'/change-password')->with('warning', 'Oops .. Password yang anda masukan tidak sesuai');
    }
  }
}
