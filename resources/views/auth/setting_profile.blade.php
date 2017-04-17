@extends('app')

@section('header')

<title>Laravel &raquo; Home</title>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<style>
.thumb {
  height: 200px;
  border: 1px solid #000;
  margin: 10px 5px 0 0;
}
</style>

@endsection

@section('content')


<div class="page-header">
  <h1>&nbsp;&nbsp;&nbsp;Settings</h1>

</div>

<div class="col-sm-3">
  <div class="list-group-item">
    <a href="/user/{{$user->id}}/edit" class="list-group-item active"><img src="{{url('images/profile.png')}}" height="20" width="20" border="1px">
      &nbsp;&nbsp;Profile User
    </a>
    <p></p>
    <a href="/user/{{$user->id}}/change-email" class="list-group-item"><img src="{{url('images/email.png')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Email User</a>
    <p></p>
    <a href="/user/{{$user->id}}/change-password" class="list-group-item"><img src="{{url('#')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Password User</a>
    <p></p>
  </div>
</div><!-- /.col-sm-4 -->


<form class="form-horizontal" method="POST"
action="{{url('profile/update')}}"
enctype="multipart/form-data">
<fieldset>

  <!-- Select Basic -->

  <div class="form-group">
    <label class="col-md-4 control-label" for="ProductName">Name</label>
    <div class="col-md-5">
      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" value="{{Auth::user()->name}}">

    </div>
  </div>


  <div class="form-group">
    <label class="col-md-4 control-label" for="Institution">Gender</label>
    <div class="col-md-5">
      <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
        <option disabled>{{Auth::user()->jenis_kelamin}}</option>
        <option value="Male">Male</option>
        <option value="Female ">Female</option>
      </select>
    </div>
  </div>

  <div class="form-group required">
    <label class="col-md-4 control-label" for="ProductName">Born Palace</label>
    <div class="col-md-5">
      <input id="tempattanggallahir" name="tempattanggallahir" type="date" placeholder="" class="form-control input-md" value="{{Auth::user()->tempattanggallahir}}" required>

    </div>
  </div>

  <div class="form-group">
    <label class="col-md-4 control-label" for="ProductName">Religion</label>
    <div class="col-md-5">
      <input id="agama" name="agama" type="text" placeholder="" class="form-control input-md"
      value="{{Auth::user()->agama}}">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group required">
    <label class="col-md-4 control-label" for="FeaturesOne">Age</label>
    <div class="col-md-5">
      <input id="umur" name="umur"
      type="text" placeholder="" class="form-control input-md" value="{{Auth::user()->umur}}" required>

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="FeaturesTwo">Address</label>
    <div class="col-md-5">
      <input id="alamat" name="alamat"
      type="text" placeholder="" class="form-control input-md" value="{{Auth::user()->alamat}}">
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="FeaturesThree">Job</label>
    <div class="col-md-5">
      <input id="pekerjaan" name="pekerjaan" type="text" placeholder="" class="form-control input-md" value="{{Auth::user()->pekerjaan}}">

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group required">
    <label class="col-md-4 control-label" for="AccountFee">Phone Number</label>
    <div class="col-md-5">
      <input id="no_telp" name="no_telp" type="text" placeholder="62+" class="form-control input-md" value="{{Auth::user()->no_telp}}" required>

    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="InterestRate">Information About Yourself</label>
    <div class="col-md-5">
      <input id="informasi" name="informasi" type="text" placeholder="" class="form-control input-md" value="{{Auth::user()->informasi}}">

    </div>
  </div>
  <div class="form-group">
    <label class="col-md-4 control-label" for="InterestRate">Photo Profile</label>
    <div class="col-md-5">
      <img class="thumbnail" src="{{url('images/'.$user->sampul)}}" id="profile-img-tag"
      width="200px" />
      <input id="sampul" name="sampul" type="file" placeholder="" class="form-control input-md" value="{{Auth::user()->sampul}}"><br>
    </div>
  </div>

  <br>
  <div class="form-group">
    <label class="col-md-4 control-label" for="FeaturesThree"></label>
    <div class="col-md-5">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
      <input type="hidden" name="_token"
      value="{{csrf_token()}}">
      <input type="hidden" name="id"
      value="{{Auth::user()->id}}">
    </form>

  </div>
</div>

</fieldset>

</form>



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
$("#sampul").change(function(){
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
