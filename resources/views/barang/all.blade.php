@extends('app')

@section('header')

<title>Laravel &raquo; Home</title>
<link rel="icon" href="{!! ('images/icon.png') !!}"/>
<style type="text/css">
.www {
  height: 50%;
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
                "hor": "right",
              }
            }
            },
            "style": "flat_yellow",
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
        @foreach($barang as $data)
        <div class="col-md-3">
        <div class="thumbnail">
        <div align="center">
        <h5><font color="red"> {{ $data->asal }}</h5></font>
        <h6>Posted by <a href="" style="text-transform: capitalize;">{{\App\User::find($data->id_user)['name']}}</a></h6>
        <hr>
        </div>
        <img class="www" style="height: 150px;" src="{{url('images/'.$data->photo_header)}}">

        <div class="caption">
        <div class="rw-ui-container" align="right"></div>
        <h6 style="text-transform: uppercase;"><b>{{ $data->nama_barang }}</h6></b>
        <h5>Rp.{{ $data->harga }} </h5>
        <br>
        <div align="center">
        <p><a href="{{url('/item-'.$data->id)}}" class="btn btn-primary" style="width: 100%;" role="button">Read More</a></p>
        </div>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
        <div align="center">
        {!! $barang->render() !!}
        </div>
        @endsection
