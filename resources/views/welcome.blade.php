<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


@if (Session::has('success'))
    <div style="color: green">{{session("success")}}</div>
@else
    
@endif
<div class="container">

    <a href="{{route('product.create')}}">create new product</a><br><br>


</div>



<body>
    
</body>
</html>