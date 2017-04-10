@extends('app')

    @section('header')

        <title>Review</title>

    @endsection

    @section('content')
    <div class="container">
    <div class="row">
    <main>
    <div class="col-md-12">
    <br>
    <br>
    <br>
    <br>
    <center>
    <img src="{{url('images/google-web-search-xxl.png')}}" width="200" height="">
    </center>
    <br>


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
</form>

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
      </div> -->    
                  <center>  
                 <form action="{{ url('search') }}" method="GET" class="form-signin">
                      <div class="input-group" style="width: 40%">
                        <div class="input-group-btn">      
                 <select class="btn btn-default" style="height: 34px;" name="category" required>
                      <option class="btn btn-default" value="all">All Categories</option>
                  @foreach($category as $data)
                    <option class="btn btn-default" value="{{ $data->nama_category }}">{{ $data->nama_category }}
                    </option>
                    @endforeach
                  </select>
                </div>
                <input type="text" name="views" class="form-control" value="" 
                 placeholder="Search" 
                 required oninvalid="this.setCustomValidity('Insert Keyword Here')"
                  oninput="setCustomValidity('')">
              </div>                      
                       <p></p>
                       <button class="btn btn-lg btn-primary glyphicon glyphicon-search" style="width: 100px;" type="submit"></button>
                     </center>                   
                 
                 </form>
                 </div>
                 </main>
               </div>
             </div>

@endsection
