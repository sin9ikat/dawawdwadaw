@extends('layouts.admin_panel.admin_panel')
@section('content')
    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="{{old('name')}}">

            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="weight" class="form-label">Weight</label>
            <input type="text" name="weight" class="form-control" id="weight"
                   value="{{old('weight')}}">

            @error('weight')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="price"
                   value="{{old('price')}}">

            @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <label for="textarea" class="form-label">Description</label>
        <textarea class="block" name='description' id="textarea"></textarea>
        @error('description')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="file" name='image' class="block" accept="image/png, image/gif, image/jpeg"></input><br>
        @error('image')
        <p class="text-danger">{{ $message }}</p>
        @enderror
{{--        <div>--}}
{{--            @foreach($categories as $category)--}}
{{--                <label for="category">{{$category->title}}--}}
{{--                    <input type="checkbox" name="category_id[]" value="{{$category->id}}" id="category" class="form-label">--}}
{{--                </label>--}}
{{--            @endforeach--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
@section('navbar')
    @component('components.link')
        @slot('link'){{route('products.index')}}@endslot
        @slot('button')Back @endslot
    @endcomponent
@endsection
