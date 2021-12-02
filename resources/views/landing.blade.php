@extends('layouts.navbar')

@section('content')
<div>

    <img src="/images/landing_page.png" alt="">
    <div class="sliderAx w-full h-96 px-48 py-10">
        <div class="flex justify-between px-5">
            <div>
                <h1 class="text-2xl font-bold">AIR JORDAN</h1>
            </div>
            <div>
                <a href="" class="underline">view all</a>
            </div>
        </div>

        <div id="slider-3" class="container mx-auto">
            {{-- {{ route('images.displayImage',$product->file) }} --}}
            {{-- {{asset('product/'. $product->file)}} --}}
            <div class="py-16 grid grid-cols-1 xl:grid-cols-5 gap-5">
                <!--Card 1-->
                @foreach ($products as $product)
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="{{ route('images.displayImage',$product->file) }}" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">{{$product->name}}</div>
                        <p class="text-gray-700">
                            {{$product->price}} 
                        </p>
                    </div>
                </div>
                @endforeach

                {{-- <!--Card 2-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/og_red.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 3-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/og_red.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 4-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/og_red.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 5-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/og_red.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">S
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div> --}}
                {{-- {{ $products->links('landingpaginator') }} --}}
            </div>
        </div>

    </div>
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton3" onclick="sliderButton3()" class="bg-gray-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton4" onclick="sliderButton4() " class="bg-gray-400 rounded-full w-4 p-2"></button>
    </div>
    <div class="sliderAx w-full h-96 px-48 py-10">
        <div class="flex justify-between px-5">
            <div>
                <h1 class="text-2xl font-bold">ADIDAS YEEZY</h1>
            </div>
            <div>
                <a href="" class="underline">view all</a>
            </div>
        </div>

        <div id="slider-5" class="container mx-auto">
            <div class="py-16 grid grid-cols-1 xl:grid-cols-5 gap-5">
                <!--Card 1-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/bred.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 2-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/bred.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 3-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/bred.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 4-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/bred.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 5-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/bred.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 OG Red</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-6" class="container mx-auto">
            <div class="py-16 grid grid-cols-1 xl:grid-cols-5 gap-5">
                <!--Card 6-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/boost_700.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 PSG</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 7-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/boost_700.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 PSG</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 8-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/boost_700.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 PSG</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 9-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/boost_700.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 PSG</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 10-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/boost_700.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Air Jordan 1 PSG</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton5" onclick="sliderButton5()" class="bg-gray-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton6" onclick="sliderButton6() " class="bg-gray-400 rounded-full w-4 p-2"></button>
    </div>
    <div class="sliderAx w-full h-96 px-48 py-10">
        <div class="flex justify-between px-5">
            <div>
                <h1 class="text-2xl font-bold">NIKE</h1>
            </div>
            <div>
                <a href="" class="underline">view all</a>
            </div>
        </div>

        <div id="slider-1" class="container mx-auto">
            <div class="py-16 grid grid-cols-1 xl:grid-cols-5 gap-5">
                <!--Card 1-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/airforce1.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 2-->
                <div class="overflow-hidden w-full h-48">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/airforce1.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 3-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/airforce1.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 4-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/airforce1.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 5-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/airforce1.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-2" class="container mx-auto">
            <div class="py-16 grid grid-cols-1 xl:grid-cols-5 gap-5">
                <!--Card 6-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/gd.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1 GD</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 7-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/gd.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1 GD</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 8-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/gd.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1 GD</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 9-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/gd.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1 GD</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
                <!--Card 10-->
                <div class="overflow-hidden">
                    <div class="w-56 h-34 object-cover float-left">
                        <img class="w-56 h-34 object-cover float-left" src="/images/gd.png" alt="Mountain">
                    </div>
                    <div class="px-6 py-4 justify-center align-center items-center text-center">
                        <div class="font-semibold text-xl mb-2">Nike Air Force 1 GD</div>
                        <p class="text-gray-700">
                            Rp 1.500.000,00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between w-12 mx-auto pb-2 mb-16">
        <button id="sButton1" onclick="sliderButton1()" class="bg-gray-400 rounded-full w-4 pb-2 "></button>
        <button id="sButton2" onclick="sliderButton2() " class="bg-gray-400 rounded-full w-4 p-2"></button>
    </div>
    <footer class="footer bg-black relative pt-1 border-b-2 border-blue-700">
        <div class="container mx-auto px-64">
            <div class="sm:flex sm:mt-8">
                <div class="mt-8 sm:mt-0 sm:w-full sm:px-8 flex flex-col md:flex-row justify-between">
                    <div class="flex flex-col">
                        <img src="/images/senikersku.webp" alt="" class="h-20">
                        <span class="font-bold text-white uppercase mb-2 text-center">Senikersku</span>
                        <span class="my-2"><a href="#"
                                class="text-gray-300  text-md hover:text-blue-500">alamat</a></span>
                        <span class="my-2"><a href="#" class="text-gray-300  text-md hover:text-blue-500">ig</a></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-bold text-white uppercase mt-4 md:mt-0 mb-2">Customer Service</span>
                        <span class="my-2"><a href="#" class="text-gray-300  text-md hover:text-blue-500">Contact
                                Us</a></span>
                        <span class="my-2"><a href="#" class="text-gray-300  text-md hover:text-blue-500">Confirmation
                                Payment</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto">
            <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
                <div class="text-center py-3">
                    <p class="text-sm text-white font-bold mb-2">
                        © 2021 by B06
                    </p>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection
