<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('user')) 
{
    $total = ProductController::cartItem();
}

?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
                <svg class="fill-current text-white mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M5,22h14c1.103,0,2-0.897,2-2V9c0-0.553-0.447-1-1-1h-3V7c0-2.757-2.243-5-5-5S7,4.243,7,7v1H4C3.447,8,3,8.447,3,9v11 C3,21.103,3.897,22,5,22z M9,7c0-1.654,1.346-3,3-3s3,1.346,3,3v1H9V7z M5,10h2v2h2v-2h6v2h2v-2h2l0.002,10H5V10z" /></svg>Gallery
            </a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="category">Category</a></li>
            <li><a href="category-chart">จำนวนสินค้า</a></li>
            <li><a href="category-graph">ราคาสินค้า</a></li>
            
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket3-fill" viewBox="0 0 16 16">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z"/>
                  </svg> Cart({{$total}})</a></li>
                  <li><a href="/myorders">Orders</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                    
                        <li><a href="/logout">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>