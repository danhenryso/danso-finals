@extends('ProductFolder.layout')
@section('content')
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">ProductCode : {{ $products->ProductCode }}</h5>
        <p class="card-text">ProductName : {{ $products->ProductName }}</p>
        <p class="card-text">Description : {{ $products->Description }}</p>
        <p class="card-text">CategoryID : {{ $products->CategoryID }}</p>
        <p class="card-text">Size : {{ $products->Size }}</p>
        <p class="card-text">Color : {{ $products->Color }}</p>
        <p class="card-text">Price : {{ $products->Price }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
