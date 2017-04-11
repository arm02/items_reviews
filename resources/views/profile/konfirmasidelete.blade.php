  @extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')                  
                                <br>      
                                <center>        
                                <h3><b>Delete Account {{$user->name}}</h3></b>
                                <h4><b>Email : {{$user->email}}</h4></b>
                                </center> 
                                <br>
                                <center>
                                 <img src="{{url('images/'.$user->sampul)}}" class="img-circle" width="300" height="300"> 
                                 <br>
                                 <br>
                                   <div class="form-group">
                                   <label>Current Password</label> 
                                 <input type="password" class="form-control" style="width: 300px; text-align: center;" name="" 
                                 placeholder="Your Password" />
                                    </div>
                                 </center>
                    <form action="{{url('user/delete/'.$user->id)}}">
                    <center>
                        <button class="btn btn-primary" onclick="return confirm('Are you sure to delete account {{$user->name}}?')">Delete Account</button>
                        </center>
                    </form> 
                                <br>
                                <br>
                                <br>
 
    @endsection