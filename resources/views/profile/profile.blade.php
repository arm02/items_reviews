  @extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')                            

                                <div class="col-sm-4">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                 <img src="{{url('images/'.$user->sampul)}}" class="img-circle" width="300" height="300">                            
                    </div>              
				
					<div class="col-sm-8">                                            <div class="panel-body">
                                <form accept-charset="UTF-8"><input name="_token" type="hidden" value="CrEus3qjiSftRHGjpdSlV9qdqIYSnEX3m7e8MQBx">
                                <table class="table striped hovered dataTable">
                                    <tr style="background-color: #ff8a80" id="new" class="hide">
                                        <td><label for="nis">New PIN</label></td>
                                        <td> : </td>
                                        <td><input maxlength="10" class="span4" id="newpin" type="text"/>&nbsp;
                                        <button type="button" id="sub" class="button info"><i class="fa fa-save"></i></button>
                                        <button type="button" id="bus" class="button danger"><i class="fa fa-close"></i></button></td>
                                    </tr>                                     
                                    <tr>
                                        <td><label for="nis">Name</label></td>
                                        <td> : </td>
                                        <td>{{$user->name}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">Email</label></td>
                                        <td> : </td>
                                        <td>{{$user->email}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">Age</label></td>
                                        <td> : </td>
                                        <td>{{$user->umur}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">Gender</label></td>
                                        <td> : </td>
                                        <td>{{$user->jenis_kelamin}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">Born Place</label></td>
                                        <td> : </td>
                                        <td>{{$user->tempattanggallahir}}</td>
                                    </tr> 
                                    <tr>
                                        <td><label for="nis">Religion</label></td>
                                        <td> : </td>
                                        <td>{{$user->agama}}</td>
                                    </tr>     
                                    <tr>
                                        <td><label for="nis">Address</label></td>
                                        <td> : </td>
                                        <td>{{$user->alamat}}</td>
                                    </tr>
                                                                        <tr>
                                        <td><label for="nis">Job</label></td>
                                        <td> : </td>
                                        <td>{{$user->pekerjaan}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">No. Telp</label></td>
                                        <td> : </td>
                                        <td>{{$user->no_telp}}</td>
                                    </tr>
                                    <tr>
                                        <td><label for="nis">Information</label></td>
                                        <td> : </td>
                                        <td>{{$user->informasi}}</td>
                                    </tr>
                                    
                                </table>             
				
                                </div>                                        
                    </div>
    </div>

 
    @endsection