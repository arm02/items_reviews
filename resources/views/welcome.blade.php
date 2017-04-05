@extends('app')

    @section('header')

        <title>Review</title>

    @endsection

    @section('content')
    <style type="text/css">    
    .center {
    margin: auto;
    width: 50%;
    padding: 10px;
}
.hafizh {
    position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
    </style>
    <div class="container">
    <div class="row">    
    <main>
    <div class="hafizh">
    <center>
    <img src="{{url('images/google-web-search-xxl.png')}}" width="200" height="">
    </center>
      <form action={{ url('search') }} method="GET" class="form-signin">
      <div class="center" style="width:500px; margin:0 auto;"> 
      <center>
      <p><br></p>
        <input type="text" name="q" class="form-control" placeholder="Search Here" required autofocus>
        <p></p>
        <button class="btn btn-lg btn-primary" type="submit">Search</button>
        </center>
     </div>
      </form>
      </div>      
      </div> 
      </div>

    @endsection

