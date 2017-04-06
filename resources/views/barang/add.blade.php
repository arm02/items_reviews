@extends('app')

    @section('header')

        <title>Add&raquo; Items</title>

    @endsection

@section('content')
 
<div class="container">
  <h2>Add Items</h2>
  <form class="col-sm-12" method="post" action="{{url('barang/save')}}" 
  enctype="multipart/form-data">
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
      <textarea type="text" class="form-control" id="desc" placeholder="Desc" name="desc" required oninvalid="this.setCustomValidity('Enter Desc Here')"
                  oninput="setCustomValidity('')"></textarea>
         </div>


    <div>
    </center>
  </div>
  <div class="col-md-12">
  <div class="col-md-4">
      <div class="form-group">
        <label for="email">Photo Header</label>
          <div class="btn">
              <input name="photo_header[]" id="photo_header" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                oninput="setCustomValidity('')">
          </div>
          </div>
          </div>
<div class="col-md-4">
      <div class="form-group">
          <label for="email">Photo Detail</label>
            <div class="btn">
                <input multiple="true" name="sampul[]" id="sampul" type="file" accept=".PNG, .JPEG, .JPG" class="form-control" required oninvalid="this.setCustomValidity('Select one Image')"
                  oninput="setCustomValidity('')">
            </div>
        </div>
        </div>
<div class="col-md-4">
    <div class="row">
      <div class="">
      <input type="hidden" name="_token"
              value="{{csrf_token()}}">
              <p><br></p>
        <button class="btn btn-md btn-primary btn-block" type="submit">Add</button>

      </div>
    </div>
    </div>
    </div>
  </form>
  </div>
 
@endsection


