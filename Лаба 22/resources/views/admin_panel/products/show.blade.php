@extends('layouts.admin_panel.products')
@section('content')
    <b>Название:</b> {{ $product->title }}<br>
    <b>Бренд:</b> {{ $product->brand }}<br>
    <b>Описание:</b><br>
    {!! $product->description !!}<br>
    <b>Изображение:</b><br>
    <img src="{{asset(\Illuminate\Support\Facades\Storage::url($product->image))}}" alt=""><br>
    <b>В наличии:</b>
    @if($product->available)
        Да
    @else
        Нет
    @endif
    <br>
    @if(count($product->categories) != 0)
        <b>Категории: </b><br> @foreach($product->categories as $category) {{$category->title}}<br> @endforeach
    @endif
@endsection

