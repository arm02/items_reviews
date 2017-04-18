	@extends('app')

@section('header')

	<title>Laravel &raquo; Artikel &raquo; All</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

	@endsection

	@section('content')
<style type="text/css">
    a, u {
    text-decoration: none;
}
a {
    text-decoration: none !important;
}
</style>
<style>
          .thumb {
            height: 75px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>
	<br>
	<div class="container">
	<div class="row">
	<center><div class="panel panel-default" style="width: 50%;">
  <!-- Default panel contents -->  
  <div class="panel-heading" align="center"><th>Your Review</th></div>
  <!-- Table -->
  </div></center>  

  <div class="centered">
  <table class="table table-hover">
    <thread>
				<tr>
					<th>Name</th>
					<th>Home Store</th>
					<th>Seller</th>
					<th>Price</th>
					<th>Condition</th>
					<th>Desc</th>
					<th colspan="2" style="text-align: center;">Action</th>
					</tr>
					<!-- //sadasassadads -->

				</thread>
				<tbody>
					@foreach($barang as $key)
					<tr>
						<td>{{$key->nama_barang}}</td>
						<td>{{$key->asal}}</td>
						<td>{{$key->penjual}}</td>
						<td>{{$key->harga}}</td>
						<td>{{$key->kondisi}}</td>
						<td>{{substr(strip_tags($key->desc),0,70)}}&nbsp;...</td>

						<div class="btn-group" role="group">
						<td align="center">
						<a href="{{url('barang/edit/'.$key->id)}}">
						<button  class="btn btn-primary glyphicon glyphicon-edit"></button>
						</a>
						<a href="{{url('barang/delete/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')">
						<button class="btn btn-danger glyphicon glyphicon-trash"></button>
						</a>
						</td>
						</div>
						

						</tr>

						@endforeach						

				</tbody>
				 </div>

				</div>
				</div>

  </table>
  </div>
  @if(sizeof($barang)==0)
  <div style="text-align: center;" id="btnhref">
  <a href="list#add" onclick="add()"><h5>No Data , Create Your Reviews Now</h5></a>
  </div>
  <div style="text-align: center; display: none;" id="btncancelhref">
  <a href="" onclick="cancel_href()"><h5>No, Thanks</h5></a>
  </div>
  @endif

  <hr>

						<div class="pull-right">
							<div class="col-md-5" id="btnadd">
							<button onclick="add()" class="btn btn-primary">Add New</button></div>
							<div class="col-md-4" id="btncancel" style="display: none;">
							<button class="btn btn-primary" onclick="cancel()">Cancel</button>
							</div>
							<div class="col-md-4">
							<form  method="get" action="/barang/reset/{{Auth::user()->id}}">
							  <input type="hidden" name="_token"
                              value="{{csrf_token()}}">
                              <button class="btn btn-primary waves-effect waves-light btn" 
                              onclick="return confirm('Are you sure to reset data ?')">Reset Data</button>
							</div>
							</form>
							</div>
							</div>
							
<div id="add" style="display: none;">
<div class="container">
  <legend><h2>Add Items</h2></legend>
  <form class="col-sm-12" method="post" action="{{url('barang/save')}}" 
  enctype="multipart/form-data">
    <div class="form-group">
      <label for="nama_barang">Items Name</label>
     <input id="nama_barang" type="text" 
    class="form-control" name="nama_barang" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Name Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="sel1">Home Store</label>
         <label for="sel1">(select one):</label>
      <select class="form-control" id="sel1" name="asal">
       @foreach($category as $data)
       <option value="{{ $data->nama_category }}">{{ $data->nama_category }}
       </option>
       @endforeach
      </select>
    </div>
      <div class="form-group">
      <label for="seller">Seller</label>
      <input type="text" class="form-control" id="seller" placeholder="Seller" name="penjual" required   oninvalid="this.setCustomValidity('Enter Seller Name Here')"
      oninput="setCustomValidity('')">
    </div>
          <div class="form-group">
      <label for="price">Price</label>
      <input type="text" class="form-control" id="price" placeholder="Price" name="harga" required=""   oninvalid="this.setCustomValidity('Enter Price Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="sel2">Kondisi</label>
         <label for="sel2">(select one):</label>
      <select class="form-control" id="sel2" name="kondisi" required=""   oninvalid="this.setCustomValidity('Enter Condition Here')"
        oninput="setCustomValidity('')">
        <option>New</option>
        <option>Former</option>
      </select>
      </div>
      <div class="form-group">
      <label for="desc">Desc</label>
      <textarea type="text" class="form-control" id="desc" placeholder="Desc" name="desc" required oninvalid="this.setCustomValidity('Enter Desc Here')"
                  oninput="setCustomValidity('')"></textarea>
         </div>


    <div>
    </center>
  </div>
  <div class="col-md-12">
  <div class="col-md-5">
      <div class="form-group">
          <div class="btn">
        <label for="photo_header">Photo Header</label>
              <input name="photo_header[]" id="photo_header" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                oninput="setCustomValidity('')"><center><p></p>
                <img class="thumbnail" style="display: none;" src="" id="profile-img-tag" width="200px" /></center>
          </div>            
          </div>
          </div>
<div class="col-md-4">
      <div class="form-group">
            <div class="btn">
          <label for="sampul">Photo Detail ( Max 3 Photo )</label>
                <input multiple="true" name="sampul[]" style="max-width: 350px" id="sampul" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                  oninput="setCustomValidity('')">
                  <output id="list"></output>
            </div>
        </div>
        </div>
        <div class="pull-right">
      <input type="hidden" name="_token"
              value="{{csrf_token()}}">
              <p><br></p>
        <button id="btnadd" style="width: 200px;" class="btn btn-md btn-primary btn-block" type="submit">Add</button><p></p>
        </div>
    </div>  
  </form>
  </div>
 <script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#profile-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
            document.getElementById('profile-img-tag').style.display = "block";

        }
    }
    $("#photo_header").change(function(){
        readURL(this);
    });
</script>
<script>
  function handleFileSelect(evt) {      
    var files = evt.target.files; // FileList object

    // Loop through the FileList and render image files as thumbnails.
    for (var i = 0, f; f = files[i]; i++) {      

      // Only process image files.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();


      // Closure to capture the file information.
      reader.onload = (function(theFile) {        
        return function(e) {
          // Render thumbnail.
          var span = document.createElement('span');
          span.innerHTML = ['<img id="hi-fiez" class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
          document.getElementById("list").style.display = "block";
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('sampul').addEventListener('change', handleFileSelect, false);
</script>
</div>
              <script type="text/javascript">
                function add() {
   document.getElementById('add').style.display = "block";   
   document.getElementById('btnadd').style.display = "none";
   document.getElementById('btncancel').style.display = "block";
   document.getElementById("profile-img-tag").style.display = "none";   
   document.getElementById("list").style.display = "none";   
   document.title = "Review - Add";
   window.location.href='#add';
}
              function cancel() {
   document.getElementById('add').style.display = "none";   
   document.getElementById('btnadd').style.display = "block";
   document.getElementById('btncancel').style.display = "none";
   document.getElementById("nama_barang").value = null;
   document.getElementById("seller").value = null;
   document.getElementById("price").value = null;
   document.getElementById("desc").value = null;
   document.getElementById("photo_header").value = null;
   document.getElementById("sampul").value = null;   
   $("#sel1").val($("#sel1 option:first").val());
   $("#sel2").val($("#sel2 option:first").val());
   document.getElementById("profile-img-tag").style.display = "block";
   document.getElementById("list").style.display = "none";    
   document.title = "Review";              
}
              </script>

				@endsection