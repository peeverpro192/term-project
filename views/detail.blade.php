@extends('master')
@section('content') 
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['image']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">
                <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"><path d="M19 21H5a1 1 0 0 1-1-1v-9H1l10.327-9.388a1 1 0 0 1 1.346 0L23 11h-3v9a1 1 0 0 1-1 1zm-6-2h5V9.157l-6-5.454-6 5.454V19h5v-6h2v6z"/></svg>
            </a>
            <h2>{{$product['name']}}</h2>
            <p>จำนวนสินค้าใน stock : {{$product['stock']}} </p>
            <h3>ราคา : {{$product['price']}} บาท</h3>
            <h4>รายละเอียดสินค้า : {{$product['description']}}</h4>
            
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <h4>จำนวน</h4>
                <input type="number" name="amount" value="1" class=" text-center" /><br><br>
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-success">Add to Cart</button>
            </form>
        </div>
    </div>
</div>
@endsection