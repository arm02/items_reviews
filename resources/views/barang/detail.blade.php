@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

<style type="text/css">
    a, u {
    text-decoration: none;
}
a {
    text-decoration: none !important;
}
p {
    margin: 0;
    padding: 0;
}
</style>
    @endsection

@section('content')

<script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "352418",
            uid: "d76e769917f42f96dfbd229c445137a5",
            source: "website",
            options: {
                "advanced": {
                    "layout": {
                        "align": {
                            "hor": "left"
                        }
                    }
                },
                "type": "nero",
                "style": "thumbs_bp",
                "isDummy": false
            } 
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
<div class="row">
<center>
  <div class="col-md-14">
        <h3><b>{{ $barang->nama_barang }}</b></h3>
        <h5><font color="red">{{$barang->asal}}</h5></font>
        <h2><b>Rp. {{$barang->harga}}</h2></b>
        <tr>
        <br>
    <div class="thumbnail btn-default">
    	<p><br></p>
      <img width="500" height="450" src="{{url('images/'.$barang->photo_header)}}">
      <div class="col-md-12">
          <?php
            $cek = App\Image::where('id_barang', $barang->id)->get();
          ?>

          @foreach($cek as $value)
            <img src="{{ url('images/'.$value->lokasi_file) }}" style="width:50%;height:20%">
          @endforeach

      </div>
      <div class="caption">
      <br>
        <div align="left">
        <p><br></p>
        <h3><b><p style="text-indent: 50px;">Seller : {{$barang->penjual}}</p></b></h3>
        <p style="text-indent: 50px;"><b>Keadaan Barang : {{$barang->kondisi}}</p></b>
        <p><br></p>
        <div class="thumbnail center" style="width: 90%;">
        <div class="center" style="width: 95%;">
        <p><br></p>
        <p style="white-space: pre-line;">{{ $barang->desc }}</p>
        <p><br></p>
        </div>
        </div>
        </div>        
        <div class="thumbnail center" style="width: 45%;">
        <h6>Posted by {{\App\User::find($barang->id_user)['name']}} at {{$barang->created_at->format('D M, d Y \a\t h:i A')}}</h6>
        </center>
        </div>

      </div>
    </div>
  </div>



  <div class="container">
  <div class="row">
	<h3>Comment</h3>
	<hr>
	@foreach($komentar as $key)	
  <div class="card card-default">
  <div class="card-heading" style="height: 25px;">
    <h5><a href="/user/{{\App\User::find($key->id_user)['id']}}/profile">
  	<img src="{{'images/'.App\User::find($key->id_user)['sampul']}}" 
	class="img-circle" width="20" height="20">&nbsp;
	<b>{{\App\User::find($key->id_user)['name']}}</a></h5></b>
	</div>
	<div class="card-body card-info" style="height: auto;">
    <p style="white-space: pre-line;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$key->isi}}</p>	
    <h6 align="right"><div class="rw-ui-container"></div>&nbsp;&nbsp; at {{$key->created_at->format('D M, d Y \a\t h:i A')}}</h6>
    	</div>
    	</div>
    	@endforeach
		</div>
    <br>
    <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;Write Comment</label><p></p>
		<form method="POST" action="{{url('komentar')}}">
		<div class="form-group" align="center">	
	      <textarea class="form-control" id="isi" style="width: 90%;" placeholder="Comment" name="isi" 
	      required="" oninvalid="this.setCustomValidity('Please Comment Here')"
	      oninput="setCustomValidity('')"></textarea><p></p>
		<button type="submit" style="width: 10%;" class="btn btn-lg btn-primary btn-block glyphicon glyphicon-send "></button>

				<br><br>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
				<input type="hidden" name="id_artikel"
				    value={{$barang->id}}>	
		</div>
		</form>
    </div>
		
@endsection