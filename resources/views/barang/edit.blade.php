@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')
 
<div class="container">
  <h2>Add Items</h2>
  <form class="col s12" method="POST"
    action="{{url('barang/update')}}"
    enctype="multipart/form-data">

    <div class="form-group">
      <label for="nama_barang">Items Name</label>
     <input id="nama_barang" type="text" 
    class="form-control" name="nama_barang" value="{{$barang->nama_barang}}">
    </div>

    <div class="form-group">
      <label for="pwd">Home Store</label>
         <label for="sel1">(select one):</label>
      <select class="form-control" id="sel1" name="asal" value="{{$barang->asal}}">
        <option>{{$barang->asal}}</option>
        <option>Tokopedia.com</option>
        <option>Bukalapak.com</option>
        <option>Lazada.co.id</option>
        <option>Mataharimall.com</option>
        <option>Blibli.com</option>
        <option>Zalora.co.id</option>
         <option>Kaskus.co.id</option>
         <option>Bhinneka.com</option>
        <option>Elevenia.co.id</option>
        <option>www.blanja.com</option>
          <option>Qoo10.co.id</option>
      </select>
    </div>

      <div class="form-group">
      <label for="email">Seller</label>
      <input type="text" class="form-control" id="email" placeholder="Seller" name="penjual" value="{{$barang->penjual}}">
    </div>

          <div class="form-group">
      <label for="email">Price</label>
      <input type="text" class="form-control" id="email" placeholder="Price" name="harga" value="{{$barang->harga}}">
    </div>

    <div class="form-group">
      <label for="pwd">Condition</label>
         <label for="sel1">(select one):</label>
      <select class="form-control" id="sel1" name="kondisi" value="{{$barang->kondisi}}">
       <option>{{$barang->kondisi}}</option>
        <option>New</option>
        <option>Former</option>
      </select>
    </div>

        <div class="form-group">
      <label for="email">Desc</label>
      <textarea type="text" class="form-control" id="email" placeholder="Desc" name="desc">{{$barang->desc}}</textarea>
    </div>

       
    <div class="right">
          <div class="btn">
              <input name="sampul" id="sampul" type="file">
          </div>
      </div>
      <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <input type="hidden" name="id" value="{{$barang->id}}">
  </form>
  </div>
 
@endsection

<script type="text/javascript">
  
  function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#sampul").change(function(){
    readURL(this);
});
</script>