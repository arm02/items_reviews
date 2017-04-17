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
    <a href="/user/{{$user->id}}/edit" class="list-group-item"><img src="{{url('images/profile.png')}}" height="20" width="20" border="1px">
      &nbsp;&nbsp;Profile User
    </a>
    <p></p>
    <a href="/user/{{$user->id}}/change-email" class="list-group-item active"><img src="{{url('images/email.png')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Email User</a>
    <p></p>
    <a href="/user/{{$user->id}}/change-password" class="list-group-item"><img src="{{url('#')}}" height="20" width="20" border="1px">&nbsp;&nbsp;Password User</a>
    <p></p>
  </div>
</div><!-- /.col-sm-4 -->

<div class="container">
  <div class="row">

    <form class="form-horizontal" method="POST" action="{{url('/user/update/email')}}"
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
      <legend>Change Email Address</legend>
      <div class="center" style="width:500px; margin:0 auto;">
        <!-- Text input-->
        <div class="form-group">
          <div class="col-md-10">
            <input type="text" placeholder="Current Email" disabled="disabled" class="form-control input-md" value="{{Auth::user()->email}}">
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <div class="col-md-10">
            <input id="email" name="email" type="email" placeholder="Confirm New Email Address" class="form-control input-md" required>

          </div>
        </div>
      </div>
      <!-- Form Name -->

      <legend>Confirm Changes</legend>
      <div class="center" style="width:500px; margin:0 auto;">
        <!-- Text input-->
        <div class="form-group">
          <div class="col-md-10">
            <input id="password" name="password" type="password" placeholder="Current Password" class="form-control input-md" required>
          </div>
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="message" class="btn btn-lg btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>

        <input type="hidden" name="_token"
        value="{{csrf_token()}}">
        <input type="hidden" name="id"
        value="{{Auth::user()->id}}">
      </div>
    </fieldset>
  </form>
</div>
</div>

@endsection
