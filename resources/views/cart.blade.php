@extends('layouts.navbar')

@section('content')
<div class="flex pt-8 px-28">
    <span class="text-xl font-semibold underline">SHOPPING CART</span>
    <span class="ml-2 text-xl font-semibold text-gray-400">> CHECKOUT > PAYMENT > ORDER COMPLETE</span>
</div>
<div class="grid grid-cols-2">
    <div class="col-span-1 col-start-1">
        <div class="pt-5 pl-28 pr-10">
            <div class="flex container w-full h-56 border-2 border-black rounded-md">
                <span><img src="/images/gd.png" alt="" class="h-28 mt-12"></span>
                <ul class="pt-5 ml-5">
                    <li class="grid justify-end pl-56"><img src="/images/x_mark.png" alt="" class="w-5 h-5 ml-32"></li>
                    <li class="text-xl font-bold">Air Force 1 X GD Low</li>
                    <li class="pt-1 text-lg font-semibold">Rp 7.500.000</li>
                    <li class="text-gray-700">
                        <span>Size</span>
                        <span class="ml-10">42.5</span>
                    </li>
                    <li class="text-gray-700">
                        <span>Total</span>
                        <span class="ml-9">Rp 7.500.000</span>
                    </li>
                    <li class="mt-5">
                        <div class="flex flex-col items-end">
                            <div class="flex">
                                <button class="border-2 border-gray-500 px-2.5" onclick="document.getElementById('amount').innerText--">-</button>
                                <div class="border-2 border-gray-500 px-2.5" id="amount">1</div>
                                <button class="border-2 border-gray-500 px-2" onclick="document.getElementById('amount').innerText++">+</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pt-5 pl-28 pr-10">
            <div class="flex container w-full h-56 border-2 border-black rounded-md">
                <span><img src="/images/aj1PSG.png" alt="" class="h-28 mt-12"></span>
                <ul class="pt-5 ml-5">
                    <li class="grid justify-end pl-56"><img src="/images/x_mark.png" alt="" class="w-5 h-5 ml-32"></li>
                    <li class="text-xl font-bold">Air Jordan 1 PSG</li>
                    <li class="pt-1 text-lg font-semibold">Rp 3.000.000</li>
                    <li class="text-gray-700">
                        <span>Size</span>
                        <span class="ml-10">42.5</span>
                    </li>
                    <li class="text-gray-700">
                        <span>Total</span>
                        <span class="ml-9">Rp 3.000.000</span>
                    </li>
                    <li class="mt-5">
                        <div class="flex flex-col items-end">
                            <div class="flex">
                                <button class="border-2 border-gray-500 px-2.5" onclick="document.getElementById('amount2').innerText--">-</button>
                                <span class="border-2 border-gray-500 px-2.5" id="amount2">1</span>
                                <button class="border-2 border-gray-500 px-2" onclick="document.getElementById('amount2').innerText++">+</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-span-1 col-start-2">
        <div class="pt-5 px-20">
            <div class="border-2 border-black rounded-md">
                <div class="px-5 py-3 border-b-2 border-black">
                    <h1 class="text-2xl font-bold">SHOPPING CART TOTAL</h1>
                </div>
                <ul class="py-6 pl-5">
                    <li class="text-xl">
                        <span>Products Total</span>
                        <span class="ml-72">Rp 40.000.000</span>
                    </li>
                    <li class="text-xl">
                        <span>Shipping</span>
                        <span class="ml-80 pl-3.5">Rp 10.000</span>
                    </li>
                    <li class="text-xl">
                        <span>Tax</span>
                        <span class="ml-96">Rp 4.000.000</span>
                    </li>
                    <li class="text-xl">
                        <span>Total</span>
                        <span class="ml-80 pl-12">Rp 44.010.000</span>
                    </li>
                </ul>
                <div class="mx-12 border-b-2 border-black">
                </div>
                <div class="container px-12 pt-10">
                    <button class="bg-black text-white font-bold rounded-md py-2 w-full">
                        <a href="/public/checkout.html">CONTINUE TO CHECKOUT</a>
                    </button>
                </div>
                <div class="px-12 pt-5 pb-28 mb-2">
                    <h2 class="text-sm font-light pt-2">Price and Shipping Fee won't be confirmed until checkout.</h2>
                </div>
            </div>
        </div>
    </div>
@endsection