<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <h1>form for create new product</h1>
    {{-- @if ($errors)
    @foreach ($errors->all() as $error)
        
    <div class="alert alert-primary" role="alert">
        {{$error}}
      </div>
    @endforeach ()
        
@endif --}}
    <form action="{{ route('product.store') }}" method="get">
        @csrf
        @method('GET')
        <div>
            <input type="text" name="productname" placeholder="product name" value="{{old('productname')}}"></div> 
            
            <span style="color: red">
                @error('productname')
                    {{ $message }}
                @enderror
            </span><br><br>
      
        <div>
            <input type="number" name="price" placeholder="price" value="{{old('price')}}">
        </div>
        <span style="color: red">
            @error('price')
                {{$message}}
            @enderror


        </span>
        <br><br>
        <div>
            <input type="number" name="qty" placeholder="qunatity" value="{{old('qty')}}"><br>
        </div>
        
        <span style="color: red">
            @error('qty')
            {{$message}}
            @enderror
        </span>
        <br><br>
        <div>
            <input type="submit" value="Create New Prouct"><br>
        </div>
        
        <br><br>
    </form>
</head>

<body>

</body>

</html>
