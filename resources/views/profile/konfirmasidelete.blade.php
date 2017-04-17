  @extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')
                                <br>
                                <center>

                                  <div class="container">
                                    @if(session('warning'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ session('warning') }}
                                    </div>
                                    @endif
                                  </div>

                                <h3><b>Are You sure to delete {{$user->name}} ?</h3></b>
                                </center>
                                <br>
                                <center>
                                  <form method="post" action="{{url('user/delete/'.$user->id)}}">
                                 <img src="{{url('images/'.$user->sampul)}}" class="img-circle" width="200" height="200">
                                 <br>
                                 <br>
                                 <br>

                                   <div class="form-group">
                                 <label>Saya ingin menghapus akun ini karena :</label>
                                 <select style="width: 200px;" class="form-control" id="sel1"
                                    name="alasan" required=""    oninvalid="this.setCustomValidity('Masukan alasan anda disini')"
                                        oninput="setCustomValidity('')">
                                        <option disabled>Select One</option>
                                        <option>Malas</option>
                                        <option>Banyak Masalah</option>
                                        <option>Bosan</option>
                                        <option>Cape</option>
                                        <option>Mau Fokus Aja</option>
                                      </select><p></p>
                                   <label>Current Password</label>
                                 <input type="password" class="form-control" style="width: 300px; text-align: center;" name="password" placeholder="Your Password">
                                 <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </center>

                    <center>
                        <button class="btn btn-danger" onclick="return confirm('Are you sure to delete account {{$user->name}}?')">Delete Account</button>
                        </center>
                    </form>
                                <br>
                                <br>
                                <br>

    @endsection
