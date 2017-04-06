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
  width: 960px;
  margin:0 auto;
line-height: 1.4em;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
@media only screen and (max-width: 479px){
    .hafizh { width: 90%; }
}
    </style>
    <div class="container">
    <div class="row">
    <main>
    <div class="hafizh col-md-12">
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
                 <form action="{{ url('search') }}" method="GET" class="form-signin">
                   <div class="center" style="width:65%; margin:0 auto;">
                     <center>                       
                       <div style="display: inline-flex;" class="input-group col-md-12">                        
                       <select class="btn btn-primary pull-left" name="category" required>
                           <option class="btn-primary" value="">Categories</option>
                             <option value="">-- Cari Online Shop --</option>
                               <option value="search">Cari Semua Shop</option>
                           @foreach($category as $data)
                           <option class="btn-primary" value="{{ $data->nama_category }}  "> {{ $data->nama_category }}</option>
                           @endforeach
                         </select>                                   
                         <input type="text" name="query" class="form-control" placeholder="Search Here" required autofocus >
                       </div>                        
                       <p></p>
                       <button class="btn btn-lg btn-primary" type="submit">Search</button>
                     </center>                   
                 </div>
                 </form>
                 </div>
                 </main>
               </div>
             </div>

@endsection
