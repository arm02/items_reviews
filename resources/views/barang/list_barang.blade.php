@extends('app')

@section('header')

	<title>Laravel &raquo; Artikel &raquo; All</title>

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
						<td>{{substr(strip_tags($key->desc),0,100)}}&nbsp;...</td>

						<td align="center"><a href="{{url('barang/edit/'.$key->id)}}">
						<button style="width: 100%;" class="btn btn-primary">Edit</button>
						</a>
						</td>

						<td align="center"><a href="{{url('barang/delete/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')">
						<button style="width: 100%;" class="btn btn-danger">Delete</button>
						</a>

						</tr>

						@endforeach						

				</tbody>
				 </div>

				</div>
				</div>

  </table>
  </div>
  @if(sizeof($barang)==0)
  <div style="text-align: center;"><h2>No Data</h2></div>
  @endif
  <table class="table table-strip">
    <thread>
						<tr>
						<td style="text-align: center;">
							<div><a href="{{url('barang/add')}}"
							class="waves-effect waves-light btn"><button class="btn btn-primary">Add New</button></a></div></td></tr>
							</thread>
							</table>

							

				@endsection