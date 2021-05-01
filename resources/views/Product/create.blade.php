@extends('main')
@section('content')
    <h1>Create Product....</h1>
    <form action="{{route('products.store')}}" method="post">
        @csrf

        Product Name: <input type="text" name="name" >
        <br/>
        Product Price: <input type="text" name="price" >
        <br/>
        <button>Add</button>
    </form>

@endsection
