@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <style>
          .thumb {
            height: 75px;
            border: 1px solid #000;
            margin: 10px 5px 0 0;
          }
        </style>

    @endsection

@section('content')
 
<div class="container">
  <h2>Add Items</h2>
  <form class="col-sm-12" method="post" action="{{url('barang/save')}}" 
  enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Items Name</label>
     <input id="nama_barang" type="text" 
    class="form-control" name="nama_barang" required="Harap Masukan" oninvalid="this.setCustomValidity('Enter User Name Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="pwd">Home Store</label>
         <label for="sel1">(select one):</label>
      <select class="form-control" id="sel1" name="asal">
       @foreach($category as $data)
       <option value="{{ $data->nama_category }}">{{ $data->nama_category }}
       </option>
       @endforeach
      </select>
    </div>
      <div class="form-group">
      <label for="email">Seller</label>
      <input type="text" class="form-control" id="email" placeholder="Seller" name="penjual" required   oninvalid="this.setCustomValidity('Enter Seller Name Here')"
      oninput="setCustomValidity('')">
    </div>
          <div class="form-group">
      <label for="email">Price</label>
      <input type="text" class="form-control" id="email" placeholder="Price" name="harga" required=""   oninvalid="this.setCustomValidity('Enter Price Here')"
    oninput="setCustomValidity('')">
    </div>
    <div class="form-group">
      <label for="pwd">Kondisi</label>
         <label for="sel1">(select one):</label>
      <select class="form-control" id="sel1" name="kondisi" required=""   oninvalid="this.setCustomValidity('Enter Condition Here')"
        oninput="setCustomValidity('')">
        <option>New</option>
        <option>Former</option>
      </select>
      </div>
      <div class="form-group">
      <label for="email">Desc</label>
      <textarea type="text" class="form-control" id="desc" placeholder="Desc" name="desc" required oninvalid="this.setCustomValidity('Enter Desc Here')"
                  oninput="setCustomValidity('')"></textarea>
         </div>


    <div>
    </center>
  </div>
  <div class="col-md-12">
  <div class="col-md-5">
      <div class="form-group">
        <label for="email">Photo Header</label>
          <div class="btn">
              <input name="photo_header[]" id="photo_header" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                oninput="setCustomValidity('')"><center><p></p>
                <img class="thumbnail" style="display: none;" src="" id="profile-img-tag" width="200px" /></center>
          </div>            
          </div>
          </div>
<div class="col-md-4">
      <div class="form-group">
          <label for="email">Photo Detail</label>
            <div class="btn">
                <input multiple="true" name="sampul[]" id="sampul" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                  oninput="setCustomValidity('')">
                  <output id="list"></output>
            </div>
        </div>
        </div>
        <div class="pull-right">
      <input type="hidden" name="_token"
              value="{{csrf_token()}}">
              <p><br></p>
        <button style="width: 100%;" class="btn btn-md btn-primary btn-block" type="submit">Add</button><p></p>
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
          span.innerHTML = ['<img class="thumb" src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
        };
      })(f);

      // Read in the image file as a data URL.
      reader.readAsDataURL(f);
    }
  }

  document.getElementById('sampul').addEventListener('change', handleFileSelect, false);
</script>
@endsection