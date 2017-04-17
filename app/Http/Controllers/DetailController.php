<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class DetailController extends Controller
{

  public function detail($id)
  {
    $data['barang'] = \App\Barang::find($id);
    if (!$data['barang']){ abort(404); }
    $data['komentar']=\App\komentar::whereIdArtikel($data['barang']->id)->get();
    return view('barang.detail')->with($data);
  }

  public function search(Request $request)
  {
   $search = $request->get('views');
    if (!$search){
      return redirect(url('/'));
    }
    $cat = $request->get('category'); // if (!$cat){ return redirect(url('/')); }
    if ($cat == "all") { $hasil = \App\Barang::where('nama_barang', 'LIKE', '%' . $search . '%')->paginate(10);
      return view('barang.result', compact('hasil', 'search','cat'));
      return view('barang/all', compact('hasil', 'search','cat'));
    }
    $hasil = \App\Barang::where('nama_barang', 'LIKE', '%' . $search . '%')->where('asal', 'LIKE', '%' . $cat . '%')->paginate(10);
    return view('barang/result', compact('hasil', 'search','cat'));
    return view('barang/all', compact('hasil', 'search','cat'));
  }
  public function category(){

    $data['category'] = \App\Category::paginate(16);
    return view('welcome')->with($data);
  }
  public function all()
  {
    $data['barang'] = \App\Barang::paginate(16);
    $data['category'] = \App\Category::paginate(16);
    return view('barang.all')->with($data);
  }



}
