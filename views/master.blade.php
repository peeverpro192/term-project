<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    body
    {
        background-color: #f5f1f1;
        
    }
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 500px !important;   
    }
    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: #8a8a8a !important;
    }
    .trending-image{
        height: 200px;
    }
    .trending-item{
        float: left;
        width: 20%;
        margin-left: 5%;
        padding-bottom: 50px;
    }
    .trending-wrapper{
        margin: 30px;
        margin-left: 5%;
        
    }
    .detail-img{
        height:500px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .order-now{
        margin-left: 91%;
    }
    .order-now2{
        margin-left: 95%;
    }
    .custom-product3{
        margin-left: 20%;
        margin-right: 20%;
        padding-top: 1%;
    }
    .mybill
    {
        margin-left: 100%;
    }
    .Text1
    {
        margin-left: 5%;
    }
    .container-fluid{
        background-color: white
    }
</style>
</html>