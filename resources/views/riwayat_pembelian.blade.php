@extends('layouts.navbar')

@section('content')
<div class="flex flex-col items-end border-b-2 border-gray-200">
    <h2 class="text-gray-400 py-4 px-20 mr-10">Home / History</h2>
</div>
<div class="grid grid-cols-3">
    <div class="grid-span-1 border-r-2 border-gray-200">
        <ul class="pt-16 pl-28">
            <li>
                <button class="bg-white rounded-md px-6 py-2 text-lg text-black font-semibold hover:bg-black hover:text-white" type="button">
                    <a href="/public/akun.html">My Account</a>
                </button>
            </li>
            <li class="pt-8">
                <button class="bg-white rounded-md px-6 py-2 text-lg text-black font-semibold hover:bg-black hover:text-white" type="button">
                    <a href="/public/lacak_pemesanan.html">Track Shipping</a>
                </button>
            </li>
            <li class="pt-8">
                <button class="bg-white rounded-md px-6 py-2 text-lg text-black font-semibold hover:bg-black hover:text-white" type="button">
                    <a href="/public/wishlist.html">Wishlist</a>
                </button>
            </li>
            <li class="pt-8">
                <button class="bg-black rounded-md px-6 py-2 text-lg text-white font-semibold" type="button">
                    <a href="/public/riwayat_pembelian.html">History</a>
                </button>
            </li>
            <li class="pt-8">
                <button class="bg-white rounded-md px-6 py-2 text-lg text-black font-semibold hover:bg-black hover:text-white" type="button">
                    <a href="/public/signin.html">Sign Out</a>
                </button>
            </li>
        </ul>
    </div>
    <div class="col-span-2 col-start-2">
        <div class="grid grid-col-3 pt-16 px-36">
            <h1 class="text-3xl font-bold">
                History
            </h1>
            <ul class="pt-6 text-lg divide-y">
                <li class="flex pt-6">
                    <span class="mr-20 font-bold"><img src="/images/gd.png" alt="" class="w-48"></span>
                    <ul class="">
                        <li class="text-md font-bold">Air Force 1 X GD Low</li>
                        <li class="pt-1 text-sm">Order has arrived</li>
                        <li class="pt-1 text-gray-400 underline text-sm">Track Shipping</li>
                    </ul>
                    <div class="flex flex-col items-center pt-14 pl-28">
                        <button class="bg-black rounded-md px-6 py-2 text-sm text-white font-semibold" type="button">
                            <a href="/public/beri_ulasan.html">Give Review</a>
                        </button>
                    </div>
                </li>
                <li class="flex pt-6">
                    <span class="mr-20 font-bold"><img src="/images/aj1PSG.png" alt="" class="w-48"></span>
                    <ul class="">
                        <li class="text-md font-bold">Air Jordan 1 PSG</li>
                        <li class="pt-1 text-sm">Order has been shipped</li>
                        <li class="pt-1 underline text-sm">
                            <a href="/public/lacak_pemesanan.html">Track Shipping</a>
                        </li>
                    </ul>
                    <div class="flex flex-col items-center pt-14 pl-36">
                        <button class="bg-gray-200 rounded-md px-6 py-2 text-sm text-gray-400 font-semibold" type="button">
                            Give Review
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
