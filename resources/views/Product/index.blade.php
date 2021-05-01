@extends('main')
@section('content')

    @foreach($data as $d)

        <h1>{{$d->name}} </h1>
        <br/>
        <h1>{{$d->price}}</h1>
        <br/>

 <form method="get" action="{{route('products.create')}}" >
     <button>add Product</button>
 </form>


    @endforeach

@endsection



