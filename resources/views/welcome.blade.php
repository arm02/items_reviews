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

    <!-- <form action={{ url('search') }} method="GET" class="form-signin">
      <div class="center" style="width:500px; margin:0 auto;">
        <center>
          <br>
          <input type="text" name="q" class="form-control" placeholder="Search Here" required autofocus>
          <br>
          <button class="btn btn-lg btn-primary" type="submit">Search</button>
        </center>
      </div>
    </div>
  </div>
</form> -->

<div class="container">
  <div class="row">
    <form action={{ url('search') }} method="GET" class="form-signin">
      <div class="center" style="width:500px; margin:0 auto;">
        <center>
          <div class="input-group">
            <div class="input-group-btn">
              <button name="cat" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Loremmm</a></li>
                <li><a href="#">ipsum</a></li>
                <li><a href="#">dolor</a></li>
                <li><a href="#">Lorem</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">amet</a></li>
              </ul>
            </div>
            <input type="text" name="q" class="form-control" placeholder="Search Here" required autofocus>
            <br>
          </center>
          <center>
            <br>
            <button class="btn btn-lg btn-primary" type="submit">Search</button>
          </center>
        </form>
      </div>
    </div>
@endsection
