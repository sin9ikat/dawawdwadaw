@extends('layouts.admin_panel.admin_panel')
@section('content')
    <form action="{{route('orders.index')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="input-group-text">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    @foreach($products as $product)
        <a href="{{route('products.show',$product->id)}}">{{$product->id}}. {{ $product->name }}</a><br>
    @endforeach

    {{ $products->links() }}
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('products.create')}}@endslot
        @slot('button')Create product @endslot
    @endcomponent
@endsection
