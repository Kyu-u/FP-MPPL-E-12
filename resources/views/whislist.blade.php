@extends('layouts.navbar')

@section('content')
<div class="flex flex-col items-center">
    <h1 class="font-bold text-4xl pt-8">WISHLIST</h1>
</div>
<h2 class="font-semibold text-xl pt-12 px-64">2 Items</h2>
<div class="pt-5 px-64">
    <div class="flex container h-56 border-2 border-black rounded-md">
        <span><img src="/images/gd.png" alt="" class="h-52"></span>
        <ul class="pt-5 ml-5">
            <li class="grid justify-end pl-56"><img src="/images/x_mark.png" alt="" class="w-5 h-5 ml-96"></li>
            <li class="text-3xl font-bold">Air Force 1 X GD Low</li>
            <li class="pt-1 text-lg font-semibold">Rp 7.500.000</li>
            <div>
                <ul class="flex pt-14">
                    <div @click.away="open = false" class="relative font-semibold" x-data="{ open: false }">
                        <button @click="open = !open" class="rounded-md border-2 border-gray-700 px-2 py-1">
                          <span>Choose Size</span>
                          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">38</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">40</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">42</a>
                          </div>
                        </div>
                    </div>
                    <li class="font-semibold text-white pl-24">
                        <button class="flex rounded-md border-2 border-black bg-black px-4 py-1">
                            <img src="/images/cart2.png" alt="" class="w-5 h-5">
                            <span class="ml-4 font-semibold">Add to Shopping Cart</span>
                        </button>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</div>
<div class="pt-5 px-64">
    <div class="flex container h-56 border-2 border-black rounded-md">
        <span><img src="/images/aj1PSG.png" alt="" class="h-52"></span>
        <ul class="pt-5 ml-5">
            <li class="grid justify-end pl-56"><img src="/images/x_mark.png" alt="" class="w-5 h-5 ml-96"></li>
            <li class="text-3xl font-bold">Air Jordan 1 PSG</li>
            <li class="pt-1 text-lg font-semibold">Rp 10.000.000</li>
            <div>
                <ul class="flex pt-14">
                    <div @click.away="open = false" class="relative font-semibold" x-data="{ open: false }">
                        <button @click="open = !open" class="rounded-md border-2 border-gray-700 px-2 py-1">
                          <span>Choose Size</span>
                          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">38</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">40</a>
                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">42</a>
                          </div>
                        </div>
                    </div>
                    <li class="font-semibold text-white pl-24">
                        <button class="flex rounded-md border-2 border-black bg-black px-4 py-1">
                            <img src="/images/cart2.png" alt="" class="w-5 h-5">
                            <span class="ml-4 font-semibold">Add to Shopping Cart</span>
                        </button>
                    </li>
                </ul>
            </div>
        </ul>
    </div>
</div>
@endsection