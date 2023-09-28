@extends('master')
@section('content') 
<div class="trending-wrapper">
    <h3>Shop</h3><br>
    @foreach ($products as $item)
    <div class="trending-item">
        <a href="detail/{{$item['id']}}">
            <img class="trending-image" src="{{$item['image']}}">
            <div class="">
                <h5>{{$item['name']}}</h5>
            </div>
        </a>
        <h5>รายละเอียดสินค้า : {{$item['description']}}</h3>
        <h5>ราคา {{$item['price']}} บาท</h3>
            
    </div>
    @endforeach
    
</div>

@endsection