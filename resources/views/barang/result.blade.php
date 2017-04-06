@extends('app')

@section('header')

<title>Laravel &raquo; Home</title>
@endsection

@section('beranda')
<form action={{ url('search') }} method="GET" class="navbar-form navbar-left">
  <div class="input-group">
    <div class="input-group-btn">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="#">Loremmm</a></li>
        <li><a href="#">ipsumsc</a></li>
        <li><a href="#">dolor</a></li>
        <li><a href="#">Lorsem</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">amet</a></li>
      </ul>
    </div>
    <input type="text" name="q" class="form-control" value="{{ $search }}" required placeholder="Search">
  </div>
</form>
@endsection

@section('content')

<script type="text/javascript">(function(d, t, e, m){

  // Async Rating-Widget initialization.
  window.RW_Async_Init = function(){

    RW.init({
      huid: "352418",
      uid: "d76e769917f42f96dfbd229c445137a5",
      options: { "style": "oxygen" }
    });
    RW.render();
  };
  // Append Rating-Widget JavaScript library.
  var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
  l = d.location, ck = "Y" + t.getFullYear() +
  "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
  f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
  a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
  if (d.getElementById(id)) return;
  rw = d.createElement(e);
  rw.id = id; rw.async = true; rw.type = "text/javascript";
  rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
  s.parentNode.insertBefore(rw, s);
}(document, new Date(), "script", "rating-widget.com/"));</script>

<div class="container">
  @if (count($hasil))
  <div class="page-header">
    <div class="alert alert-success" role="alert">Hasil pencarian : <b>{{$search}}</b> di kategori {{ $cat }}</div>
  </div><br>
  <!-- ////// -->
  <div class="row">
    @foreach($hasil as $data)
    <div class="col-md-3">
      <div class="thumbnail">
        <div align="center">
          <h5><font color="red"> {{ $data->asal }}</h5></font>
          <h6>Posted by {{\App\User::find($data->id_user)['name']}}</h6>
          <hr>
        </div>
        <img style="height: 150px;" src="{{url('images/'.$data->photo_header)}}">
        <div class="caption">
          <div class="rw-ui-container" align="right"></div>
          <h6>{{ $data->nama_barang }}</h6>
          <h5>Rp.{{ $data->harga }} </h5>
          <br>
          <div align="center">
            <p><a href="{{url('/'.$data->slug)}}" style="width: 100%;" class="btn btn-primary" role="button">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</div>
@else
<center>
  <div class="alert alert-danger" style=""> Oops.. Data <b>{{ $search }}</b> di kategori {{ $cat }} Tidak Ditemukan</div>
</center>

@endif
@endsection
