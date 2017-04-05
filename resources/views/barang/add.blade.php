@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')
 
<div class="container">
  <h2>Add Items</h2>
  <form class="col-sm-12" method="post" action="{{url('barang/save')}}" enctype="multipart/form-data">
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
      <textarea type="text" class="form-control" id="desc" placeholder="Desc" name="desc"></textarea>
    </div>
    <div>
    </center>
  </div>
    <div class="form-group">
        <label for="email">Photo</label>
          <div class="btn">
              <input multiple="true" name="sampul[]" id="sampul" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                oninput="setCustomValidity('')">
          </div>
      </div>
    <div class="row pull-right">
      <div class="col-lg-12">
      <input type="hidden" name="_token"
              value="{{csrf_token()}}">
        <button class="btn btn-md btn-primary btn-block" style="width:150%" type="submit">Add</button>

      </div>
    </div>
    </div>
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

        reader.readAsDataURL(input.filees[0]);
    }
}

$("#sampul").change(function(){
    readURL(this);
});
</script>