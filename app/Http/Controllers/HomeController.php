<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;


class HomeController extends Controller
{
  /**
  * Create a new controller instance.
  *
  * @return void
  */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
  * Show the application dashboard.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    return view('welcome')->with($data);
  }

  public function setting_profile($id)
  {
    $data['user']= \App\User::find($id);
    if (!$data['user']){ abort(404); }
    return view('auth/setting_profile')->with($data);

  }
  public function setting_email($id)
  {
    $data['user']= \App\User::find($id);
    return view('auth/setting_email')->with($data);
  }
  public function setting_password($id)
  {
    $data['user']= \App\User::find($id);
    return view('auth/setting_password')->with($data);
  }


}
