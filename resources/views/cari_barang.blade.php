@extends('layouts.navbar')

@section('content')
<div class="flex px-36 pt-8">
    <button class="h-10 px-2 border-2 border-black rounded-l-md">
        Categories
    </button>
    <input class="container bg-gray-100 h-10 px-3 border-t-2 border-b-2 border-l-2 border-black" placeholder="Search...">
    </input>
    <a href="" class="bg-gray-100 border-t-2 border-b-2 border-r-2 border-black rounded-r-md"><img src="/images/search.png" alt="" class="w-6 h-5 mt-2 mr-4"></a>
</div>
<div class="flex px-36 pt-16">
    <ul class="flex">
        <li class="container border-2 border-gray-500 h-96 w-96 rounded-md">
            <a href="/public/detail_barang.html"><img src="/images/gd.png" alt="" class="mt-16"></a>
            <div class="flex flex-col items-end">
                <img src="/images/like.png" alt="" class="w-10 h-10 mr-5 mt-8">
            </div>
        </li>
        <li class="container border-2 border-gray-500 h-96 w-96 rounded-md ml-12">
            <a href="/public/detail_barang.html"><img src="/images/AJ1Bred.png" alt="" class="mt-6"></a>
            <div class="flex flex-col items-end">
                <img src="/images/like.png" alt="" class="w-10 h-10 mr-5 mt-12">
            </div>
        </li>
        <li class="container border-2 border-gray-500 h-96 w-96 rounded-md ml-12">
            <a href="/public/detail_barang.html"><img src="/images/aj1PSG.png" alt="" class="mt-16"></a>
            <div class="flex flex-col items-end">
                <img src="/images/like.png" alt="" class="w-10 h-10 mr-5 mt-8">
            </div>
        </li>
    </ul>
</div>
<div class="flex px-36 pt-5">
    <ul class="flex">
        <li class="flex flex-col">
            <span class="text-2xl font-bold">Air Force 1 X GD Low</span>
            <span class="text-lg font-medium">Rp 7.500.000</span>
        </li>
        <li class="flex flex-col ml-48">
            <span class="text-2xl font-bold">Jordan 1 Retro High Bred Toe</span>
            <span class="text-lg font-medium">Rp 4.200.000</span>
        </li>
        <li class="flex flex-col ml-24 pl-1">
            <span class="text-2xl font-bold">Air Jordan 1 PSG</span>
            <span class="text-lg font-medium">Rp 3.000.000</span>
        </li>
    </ul>
</div>
@endsection