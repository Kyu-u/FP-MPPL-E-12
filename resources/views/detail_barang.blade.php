@extends('layouts.navbar')

@section('content')
<div class="grid grid-cols-2 pt-16">
    <div class="col-span-1 flex flex-col items-center">
        <div class="container border-2 border-gray-500 h-96 w-96 rounded-md">
            <a href="{{route('detailbarang', $product->id)}}"><img src="{{route('images.displayImage',$product->file)}}"
                    alt="" class=""></a>


        </div>
    </div>
    <form method="POST" action="{{route('addcart.post')}}">
        @csrf
        @if(Auth::user())
        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        @else
        <input type="hidden" name="user_id" value="-1">
        @endif
        <input type="hidden" name="amount" value="2" id="">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <div class="col-span-1 col-start-2">
            <div class="flex">
                <h1 class="text-2xl font-bold">{{$product->name}}</h1>
                <img src="/images/like.png" alt="" class="w-8 h-8 ml-10 mt-1">
            </div>
            <h2 class="text-md font-light text-xl">{{$product->price}}</h2>
            <h2 class="text-md font-light text-xl mt-10">Select Size</h2>
            {{-- <div class="flex mt-4">
            <button class="bg-black rounded-md text-white text-xl px-8 py-2">38</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-6 py-2 ml-4 hover:bg-black hover:text-white">38.5</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">39</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">40</button>
        </div>
        <div class="flex mt-4">
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 hover:bg-black hover:text-white">42</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-6 py-2 ml-3 hover:bg-black hover:text-white">42.5</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">44</button>
        </div> --}}
            <div class="flex mt-4 flex-wrap gap-10">
                @foreach($details as $detail)
                <input class="hidden" id="radio_1" type="radio" name="size" value="{{$detail->size}}">
                <label class="flex flex-col p-4 shadow-md rounded-md md:rounded-xl cursor-pointer" for="radio_1">
                    {{$detail->size}}
                </label>
                {{-- <button class="bg-black rounded-md text-white text-xl px-8 py-2">{{$detail->size}}</button> --}}
                @endforeach

            </div>

            <button type="submit" class="rounded-full bg-black text-white mt-10 px-28 py-2">
                Add to Shopping Cart
            </button>
            <div class="pl-4 pr-96">
                <div class="container flex border-t-2 border-b-2 border-black mt-10 pl-2 py-2">
                    <span class="pr-64">Review(0)</span>
                    <div class="flex flex-col items-end">
                        <img src="/images/arrow-down.png" alt="" class="h-5 w-5 pt-1">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
