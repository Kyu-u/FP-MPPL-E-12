@extends('layouts.navbar')

@section('content')
<form action="{{route('caribarang')}}" method="GET" role="search">
    @csrf
    <div class="flex px-36 pt-8">

        <input name="term" id="term" type="text"
            class="container bg-gray-100 h-10 px-3 border-t-2 border-b-2 border-l-2 border-black"
            placeholder="Search...">
        <button type="submit" class="bg-gray-100 border-t-2 border-b-2 border-r-2 border-black rounded-r-md"><img
                src="/images/search.png" alt="" class="w-6 h-5 mt-2 mr-4"></button>
    </div>
</form>
<div class="flex px-36 pt-16">
    <ul class="flex flex-wrap gap-32">
        @foreach($products as $product)
        <li class="flex flex-col items-center gap-y-4">
            <div class="container border-2 border-gray-500 h-96 w-96 overflow-hidden rounded-md">
                <a href="{{route('detailbarang', $product->id)}}"><img
                        src="{{route('images.displayImage',$product->file)}}" alt="" class=""></a>
                <div class="flex flex-col items-end">
                    <img src="/images/like.png" alt="" class="w-10 h-10 mr-5 mt-8">
                </div>

            </div>
            <span class="text-2xl font-bold">{{$product->name}}</span>
            <span class="text-lg font-medium">{{$product->price}}</span>
        </li>

        @endforeach
    </ul>
</div>

@endsection
