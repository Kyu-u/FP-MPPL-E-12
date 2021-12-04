@extends('layouts.navbar')

@section('content')
<div class="flex pt-8 px-28">
    <span class="text-xl font-semibold text-gray-400">SHOPPING CART > CHECKOUT ></span>
    <span class="ml-2 text-xl font-semibold text-gray-400">PAYMENT ></span>
    <span class="ml-2 text-xl font-semibold underline">ORDER COMPLETE</span>
</div>
<div class="px-28 pt-10">
    <h1 class="text-4xl font-bold pb-5">
        ORDER COMPLETE
    </h1>
    <div class="pt-10 flex flex-col items-start w-98 h-60 m-auto">
        <div class="border-b-4 border-gray-800 w-98">
            <h2 class="text-3xl font-semibold py-2">
                Pricing Details
            </h2>
        </div>
        <div class="py-3 flex justify-between w-98">
            <div class="text-xl font-semibold">
                Payment Method
            </div>
            <div class="text-xl font-semibold">
                OVO
            </div>
        </div>
        <div class="py-3 flex justify-between w-98">
            <div class="text-xl font-semibold">
                Jordan 1
            </div>
            <div class="text-xl font-semibold">
                Rp 19.500.000
            </div>
        </div>
        <div class="py-3 flex justify-between w-98">
            <div class="text-xl font-semibold">
                Subtotal
            </div>
            <div class="text-xl font-semibold">
                Rp 19.500.000
            </div>
        </div>
        <div class="py-3 flex justify-between w-98">
            <div class="text-xl font-semibold">
                Shipping
            </div>
            <div class="text-xl font-semibold">
                Rp 10.000
            </div>
        </div>
        <div class="py-3 flex justify-between w-98">
            <div class="text-xl font-semibold">
                Total
            </div>
            <div class="text-xl font-semibold">
                Rp 19.510.000
            </div>
        </div>
    </div>
    <div class="pt-40 flex flex-col items-center">
        <button class="px-16 py-1 bg-gray-900 text-gray-200 font-semibold text-xl rounded-md">
            Home
        </button>
    </div>
</div>
@endsection