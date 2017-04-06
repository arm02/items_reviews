@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

        <!-- Include jQuery. -->
        <script type="text/javascript" src="../../zimage/jquery-1.9.1.min.js"></script>

        <!-- Include Cloud Zoom CSS. -->
        <link rel="stylesheet" type="text/css" href="../../zimage/cloudzoom.css" />

        <!-- Include Cloud Zoom script. -->
        <script type="text/javascript" src="../../zimage/cloudzoom.js"></script>

        <!-- Call quick start function. -->
        <script type="text/javascript">
            CloudZoom.quickStart();
        </script>

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
.gambar
{
  height: 250px;
  width: 400px;
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
  <div class="col-md-14">
 <div class="col-md-12">
    <div class="thumbnail btn-default">
    <div class="col-md-12">
    <div class="col-md-3">
    <center>
    <p><br></p>

        <img  style="width: 50%; height: 50%;" class = 'cloudzoom-gallery' src = "{{url('images/'.$barang->photo_header)}}" data-cloudzoom = "useZoom: '.cloudzoom', image: '{{url('images/'.$barang->photo_header)}}', zoomImage: '{{url('images/'.$barang->photo_header)}}' "><p><br></p>
          <?php
            $cek = App\Image::where('id_barang', $barang->id)->get();
          ?>
          @foreach($cek as $value)
    <img  style="width: 50%; height: 50%;" class = 'cloudzoom-gallery' src = "{{ url('images/'.$value->lokasi_file) }}" data-cloudzoom = "useZoom: '.cloudzoom', image: '{{ url('images/'.$value->lokasi_file) }}', zoomImage: '{{ url('images/'.$value->lokasi_file) }}' "><p><br></p>
        @endforeach
        </center>
        </div>
        <div class="col-md-5 pull-left">
      <p><br></p> 

    <img class = "cloudzoom gambar" src = "{{url('images/'.$barang->photo_header)}}"
    data-cloudzoom = "useZoom: '.cloudzoom', image: '{{url('images/'.$barang->photo_header)}}', zoomImage: '{{url('images/'.$barang->photo_header)}}'" />
    <p></p>   

          <p><br></p>          
          </div>
          <div class="col-md-4">
          <h3><b>{{ $barang->nama_barang }}</b></h3>
        <h5><font color="red">{{$barang->asal}}</font></h5>
        <h2><b>Rp. {{$barang->harga}}</b></h2><br>
        <h5><b><p>Seller : {{$barang->penjual}}</p></b></h5>
        <p><b>Keadaan Barang : {{$barang->kondisi}}</b></p>
        </div>
          </div>
          
      <div class="caption">
      <br>
        <div align="left">
        <p><br></p>
        <h3><b><p style="text-indent: 50px;">DESC</p></b></h3>        
        <p><br></p>
        <div class="thumbnail center" style="width: 90%;">
        <div class="center" style="width: 95%;">
        <p><br></p>
        <p style="white-space: pre-line;">{{ $barang->desc }}</p>
        <p><br></p>
        </div>
        </div>
        </div>        
        </div>               
        <div class="thumbnail center" style="width: 45%; text-align: center;">
        <h6>Posted by {{\App\User::find($barang->id_user)['name']}} at {{$barang->created_at->format('D M, d Y \a\t h:i A')}}</h6>        
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
	<b>{{\App\User::find($key->id_user)['name']}}</b></a></h5>
	</div>
	<div class="card-body card-info" style="height: auto;">
    <p style="white-space: pre-line;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$key->isi}}</p>	
    <h6 align="right"><div class="rw-ui-container"></div>&nbsp;&nbsp; at {{$key->created_at->format('D M, d Y \a\t h:i A')}}</h6>
    	</div>
    	</div>
    	@endforeach		
    <br>
    <label for="email">&nbsp;&nbsp;&nbsp;&nbsp;Write Comment</label><p></p>
		<form method="POST" action="{{url('komentar')}}">
		<div class="form-group" align="center">	
	      <textarea class="form-control" id="isi" style="width: 90%;" placeholder="Comment" name="isi" 
	      required="" oninvalid="this.setCustomValidity('Please Comment Here')"
	      oninput="setCustomValidity('')"></textarea><p></p><br>
		<button type="submit" style="width: 10%;" class="btn btn-lg btn-primary btn-block glyphicon glyphicon-send "></button>

				<br><br>
				<input type="hidden" name="_token"
					value="{{csrf_token()}}">
				<input type="hidden" name="id_artikel"
				    value={{$barang->id}}>	
		</div>
		</form>
    </div>    
    </div>
		
@endsection