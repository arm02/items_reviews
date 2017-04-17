@extends('app')

@section('header')

<title>Laravel &raquo; Home</title>

@endsection

@section('content')


<div class="page-header">
  <h1>&nbsp;&nbsp;&nbsp;Settings</h1>

</div>

<div class="col-sm-3">
  <div class="list-group-item">
    <a href="/user/{{$user->id}}/edit" class="list-group-item"><img src="{{url('images/profile.png')}}" height="20" width="20" border="1px" required>
      &nbsp;&nbsp;Profile User
    </a>
    <p></p>
    <a href="/user/{{$user->id}}/change-email" class="list-group-item"><img src="{{url('images/email.png')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Email User</a>
    <p></p>
    <a href="#" class="list-group-item active"><img src="{{url('#')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Password User</a>
    <p></p>
  </div>
</div><!-- /.col-sm-4 -->

<div class="container">
  <div class="row">

    <form class="form-horizontal" method="POST" action="{{url('/user/update/password')}}"
    enctype="multipart/form-data">
    <fieldset>
      @if(session('warning'))
      <div class="alert alert-danger" role="alert">
        {{ session('warning') }}
      </div>
      @endif

      @if(session('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
      @endif
      <!-- Form Name -->
      <legend>Change Password</legend>
      <div class="center" style="width:500px; margin:0 auto;">
        <!-- Text input-->
        <div class="form-group">
          <label for="oldpw" class="col-md-4 control-label">Current Password</label>
          <div class="col-md-8">
            <input id="oldpw" name="oldpw" type="password" placeholder="Your Old Password" class="form-control input-md" required>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label for="newpw" class="col-md-4 control-label">New Password</label>
          <div class="col-md-8">
            <input id="newpw" name="newpw" type="password" placeholder="Your New Password" class="form-control input-md" required>
          </div>
        </div>

        <div class="form-group">
          <label for="confnewpw" class="col-md-4 control-label">Confirm Password</label>
          <div class="col-md-8">
            <input id="confnewpw" name="confnewpw" type="password" placeholder="Confirm New Password" class="form-control input-md" required>
          </div>
        </div>

      </div>
      <hr>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="message" class="btn btn-lg btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Save Changes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>

      <input type="hidden" name="_token"
      value="{{csrf_token()}}">
      <input type="hidden" name="id"
      value="#">
    </div>
  </fieldset>
</form>
</div>
</div>

@endsection
