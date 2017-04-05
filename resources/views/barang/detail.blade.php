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
    <div class="thumbnail">
    	<br>
      <img width="500" height="450" src="{{url('images/'.$barang->sampul)}}">
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
        <h3><b>Seller : {{$barang->penjual}}</h3></b>
        <p><b>Keadaan Barang : {{$barang->kondisi}}</p></b>
        </font> 
        <br>
        <br>
        <p style="white-space: pre-line;">{{ $barang->desc }}</p>
        </div>
        <br>
        <div class="thumbnail">
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
    <h6><a href="/user/{{\App\User::find($key->id_user)['id']}}/profile">
  	<img src="{{'images/'.App\User::find($key->id_user)['sampul']}}" 
	class="img-circle" width="20" height="20">&nbsp;
	<b>{{\App\User::find($key->id_user)['name']}}</a></h6></b>
	</div>
	<div class="card-body card-info" style="height: auto;">
    <p style="white-space: pre-line;">{{$key->isi}}</p>	
    <h6 align="right"><div class="rw-ui-container"></div>&nbsp;&nbsp; at {{$key->created_at->format('D M, d Y \a\t h:i A')}}</h6>
    	</div>
    	</div>
    	@endforeach
		</div>

        <label for="email">Write Comment</label>
		<form method="POST" action="{{url('komentar')}}">
		<div class="form-group">	
	      <textarea class="form-control" id="isi" placeholder="Comment" name="isi" 
	      required="" oninvalid="this.setCustomValidity('Please Comment Here')"
	      oninput="setCustomValidity('')"></textarea>
      	<br>
		<button type="submit" class="btn btn-lg btn-primary btn-block">Comment</button>
				<br><br>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
				<input type="hidden" name="id_artikel"
				    value={{$barang->id}}>	
		</div>
		</form>
		
@endsection