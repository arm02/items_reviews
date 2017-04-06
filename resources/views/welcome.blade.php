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

      <div class="container">
               <div class="row">
                 <form action=http://localhost:2000/search method="GET" class="form-signin">
                   <div class="center" style="width:500px; margin:0 auto;">
                     <center>
                       <input type="text" name="query" class="form-control" placeholder="Search Here" required autofocus>
                       <div class="input-group"><br>
                         <select class="btn btn-primary" name="category" required>
                           <option value="">- Cari online shop -</option>
                           <option value="tokopedia">Tokopedia</option>
                           <option value="bukalapak">Bukalapak</option>
                           <option value="lazada">Lazada.co.id</option>
                           <option value="mataharimall">Mataharimall.com</option>
                           <option value="blibli">Blibli.com</option>
                           <option value="zalora">Zalora.co.id</option>
                           <option value="kaskus">Kaskus.co.id</option>
                           <option value="bhinneka">Bhinneka.com</option>
                           <option value="elevenia">Elevenia.co.id</option>
                           <option value="blanja">Blanja.com</option>
                           <option value="qoo10">Qoo10.co.id</option>
                           <option value="Shopee">Shopee.co.id</option>
                           <option value="duniahalal">Duniahalal.com</option>
                         </select>
                       </div>
                     </center>
                     <center>
                       <br>
                       <button class="btn btn-lg btn-primary" type="submit">Search</button>
                     </center>
                   </form>
                 </div>
               </div>
             </div>

@endsection
