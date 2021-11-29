@extends('layouts.navbar')

@section('content')
<div class="grid grid-cols-2 pt-16">
    <div class="col-span-1">
        <div class="flex ml-36">
            <img src="/images/jordan_spider1.png" alt="" class="h-56">
            <img src="/images/jordan_spider2.png" alt="" class="h-56 ml-4">
        </div>
        <div class="flex ml-36">
            <img src="/images/jordan_spider3.png" alt="" class="h-56 mt-4">
            <img src="/images/jordan_spider4.png" alt="" class="h-56 ml-4 mt-4">
        </div>
    </div>
    <div class="col-span-1 col-start-2">
        <div class="flex">
            <h1 class="text-2xl font-bold">Jordan 1 Retro High Spider-Man Origin Story</h1>
            <img src="/images/like.png" alt="" class="w-8 h-8 ml-10 mt-1">
        </div>
        <h2 class="text-md font-light text-xl">Rp 10.000.000</h2>
        <h2 class="text-md font-light text-xl mt-10">Select Size</h2>
        <div class="flex mt-4">
            <button class="bg-black rounded-md text-white text-xl px-8 py-2">38</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-6 py-2 ml-4 hover:bg-black hover:text-white">38.5</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">39</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">40</button>
        </div>
        <div class="flex mt-4">
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 hover:bg-black hover:text-white">42</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-6 py-2 ml-3 hover:bg-black hover:text-white">42.5</button>
            <button class="bg-white rounded-md border-2 border-black text-black text-xl px-8 py-2 ml-4 hover:bg-black hover:text-white">44</button>
        </div>
        <button class="rounded-full bg-black text-white mt-10 px-28 py-2">
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
</div>
@endsection