@extends('ProductFolder.layout')
@section('content')
<div class="card">
  <div class="card-header">Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}
        <label>CategoryID</label></br>
        <input type="text" name="CategoryID" id="CategoryID" class="form-control"></br>
        <label>CategoryCode</label></br>
        <input type="text" name="CategoryCode" id="CategoryCode" class="form-control"></br>
        <label>ProductCode</label></br>
        <input type="text" name="ProductCode" id="ProductCode" class="form-control"></br>
        <label>ProductName</label></br>
        <input type="text" name="ProductName" id="ProductName" class="form-control"></br>
        <label>Description</label></br>
        <input type="text" name="Description" id="Description" class="form-control"></br>

        <label>Size</label></br>
        <input type="text" name="Size" id="Size" class="form-control"></br>
        <label>Color</label></br>
        <input type="text" name="Color" id="Color" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="Price" id="Price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
