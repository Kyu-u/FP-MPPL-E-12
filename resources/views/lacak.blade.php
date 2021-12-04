@extends('layouts.navbar')

@section('content')
<div class="flex flex-col items-end border-b-2 border-gray-200">
    <h2 class="text-gray-400 py-4 px-20 mr-10">Home / Track Shipping</h2>
</div>
<div class="grid grid-cols-3">
    @foreach($data as $item)
    <div class="grid-span-1 flex flex-col items-center pt-20">
        <h2 class="font-bold text-3xl">{{$item->name}}</h2>
        <img src="{{ route('images.displayImage',$item->file) }}" alt="" class="w-72 pt-16">
    </div>
    @endforeach
    <div class="col-span-2 col-start-2 px-20 pt-20 mr-56">
        <span class="text-3xl font-bold">
            Item Status :
        </span>
        @foreach($data as $item)
        <span class="text-3xl font-bold text-green-500">
            {{$item->orderstatus}}
        </span>
        @endforeach
        {{-- <div class="flex flex-col pt-6">
            
            <div class="flex">
                <img src="/images/bullet-black.png" alt="" class="w-5 h-7 pt-2">
                <span class="text-2xl font-semibold ml-4">Friday, 25th June 2021</span>
            </div>
            <div class="flex">
                <img src="/images/line.png" alt="" class="h-20 pt-2 ml-2">
                <span class="text-lg mt-7 ml-6 font-extralight">Payment Complete</span>
            </div>
            <div class="flex pt-1">
                <img src="/images/bullet-black.png" alt="" class="w-5 h-7 pt-2">
                <span class="text-2xl font-semibold ml-4">Saturday, 26th June 2021</span>
            </div>
            <div class="flex">
                <img src="/images/line.png" alt="" class="h-20 pt-2 ml-2">
                <span class="text-lg mt-7 ml-6 font-extralight">Order has been shipped</span>
            </div>
            <div class="flex pt-1">
                <img src="/images/bullet-gray.png" alt="" class="w-5 h-7 pt-2">
                <span class="text-2xl text-gray-400 ml-4 font-light">Order Received</span>
            </div>
        </div> --}}
    </div>
</div>
@endsection
