<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class EmailController extends Controller
{
   		
   		    public function __construct()
    {
        $this->middleware('auth');
    }


   	  public function update()
    {
      $a = \App\User::find(Input::get('id'));
      $a->email = Input::get('email');
      $a->save();
      return redirect(url('/user/{id}/profile'));
    } 

}
