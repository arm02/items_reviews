@extends('app')

@section('header')

	<title>Laravel &raquo; Artikel &raquo; All</title>

	@endsection

	@section('content')

	<br>
	<div class="container">
	<div class="row">

	<div class="panel panel-default" align="center">
  <!-- Default panel contents -->
  <div class="panel-heading" align="center"><th>Your Review</th></div>
  <!-- Table -->
  </div>

  <div class="centered">
  <table class="table">
    <thread>
				<tr>
					<th>Name</th>
					<th>Home Store</th>
					<th>Seller</th>
					<th>Price</th>
					<th>Condition</th>
					<th>Desc</th>
					<th colspan="2">Action</th>
					</tr>

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

						<td><a href="{{url('barang/edit/'.$key->id)}}">
						Edit
						</a>
						</td>

						<td><a href="{{url('barang/delete/'.$key->id)}}"
						onclick="return confirm('Are you sure to delete {{$key->judul}}?')">
						Delete
						</a>

						</tr>

						@endforeach
						@if(sizeof($barang)==0)
						<tr>
						<td colspan="6" class="center">
							<div>No Data</div>
							<div><a href="{{url('barang/add')}}"
							class="waves-effect waves-light btn">Add New</a></div></td></tr>

							@endif

				</tbody>
				 </div>

				</div>
				</div>

  </table>
</div>

				@endsection