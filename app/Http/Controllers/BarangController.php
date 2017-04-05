<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;

class BarangController extends Controller
{
    

      public function __construct()
    {
        $this->middleware('auth');
    }

      public function index()
    {
      $data['barang'] = \App\Barang::where('id_user',Auth::user()->id)->paginate(1000);
      return view('barang.list_barang')->with($data);
    }

      public function add()
    {
      return view('barang.add');
    }

        public function edit($id)
    {
      $data['barang']=\App\Barang::find($id);
      return view('barang.edit')->with($data);

    }

       public function save()
    {
        $a = new \App\Barang;
        $a->slug = str_slug(Input::get('nama_barang'));
    	$a->nama_barang = Input::get('nama_barang');
    	$a->asal = Input::get('asal');
  		$a->penjual = Input::get('penjual');
  		$a->harga = Input::get('harga');
  		$a->kondisi = Input::get('kondisi');
        $a->id_user = Auth::user()->id;
        $a->sampul ='';
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }
      $a->desc = Input::get('desc');
    	$a->save();
    	return redirect(url('barang/list'));
    }

    public function update()
    {

      $a = \App\Barang::find(Input::get('id'));
      $a->slug = str_slug(Input::get('nama_barang'));
      $a->nama_barang = Input::get('nama_barang');
      $a->asal = Input::get('asal');
      $a->penjual = Input::get('penjual');
      $a->harga = Input::get('harga');
      $a->kondisi = Input::get('kondisi');
        if(Input::hasFile('sampul')){
            $sampul = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('sampul')->getClientOriginalExtension();
            Input::file('sampul')->move(storage_path('sampul'),$sampul);
            $a->sampul = $sampul;
        }
      $a->save();
      return redirect(url('barang/list'));
    }

      public function delete($id)
    {
      $a = \App\Barang::find($id);
      $a->delete();

      return redirect(url('barang/list'));
    }

         public function komentar()
    {
        $a = new \App\komentar;
        $a->isi = Input::get('isi');
        $a->id_artikel = Input::get('id_artikel');
        $a->id_user = Auth::user()->id;
        $a->sampul_user = Auth::user()->sampul;
        $a->save();
        $key = \App\Barang::find(Input::get('id_artikel'));
        return  redirect(url($key->slug));
            
    }   
    public function hapuskomentar($id)
    {
        $a = \App\komentar::find($id);
        $key = \App\Barang::find($a->id_artikel);
        $a->delete();
        return redirect(url($key->slug));  
    }
}
