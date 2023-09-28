@extends('master')
@section('content') 
<div class="custom-product3">
    <div class="">
        <h1>ชำระสินค้า</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>ราคาสินค้า</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>จำนวนสินค้า</td>
                    <td>{{$quantity}}</td>
                </tr>
                <tr>
                    <td>ค่าจัดส่ง</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>ราคารวม</td>
                    <td>{{$total*$quantity}}</td>
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
                <label for="">ชื่อ</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Your Name">
            </div>
            <div class="form-group">
                <label for="">เบอร์โทร</label>
                <input type="text" name="tel" class="form-control" id="exampleInputName1" placeholder="เบอร์โทร">
            </div>
            <div class="form-group">
                <label for="">ที่อยู่</label>
                <textarea name="address" placeholder="Enter your Address" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="pwd">ช่องทางการชำระเงิน</label><br>
                <input type="radio" value="ชำระผ่านธนาคารออนไลน์" name="payment"><span> ชำระผ่านธนาคารออนไลน์</span><br><br>
                <input type="radio" value="ชำระผ่านบัตรเครดิค" name="payment"><span> ชำระผ่านบัตรเครดิค</span><br><br>
                <input type="radio" value="เก็บเงินปลายทาง" name="payment"><span> เก็บเงินปลายทาง</span><br><br>
            </div>
            <div class="order-now">
                <button type="submit" class="btn btn-success">Order Now</button>
            </div>
        </form>
    </div>
</div>
@endsection