@extends('app')

    @section('header')

        <title>Laravel &raquo; Home</title>

    @endsection

    @section('content')
    <style type="text/css">
    .center {
    margin: auto;
    width: 50%;
    padding: 10px;
}
    </style>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center>
    <img src="{{url('images/google-web-search-xxl.png')}}" width="200" height="">
    </center>

      <form action={{ url('search') }} method="GET" class="form-signin">
      <div class="center" style="width:500px; margin:0 auto;"> 
      <center>
      <br>
        <input type="text" name="q" class="form-control" placeholder="Search Here" required autofocus>
        <br>
        <button class="btn btn-lg btn-primary" type="submit">Search</button>
        </center>
     </div>
    </div> <!-- /container -->
    </div>
      </form>

    @endsection

