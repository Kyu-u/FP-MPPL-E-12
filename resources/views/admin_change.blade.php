<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Senikersku</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <style>
        .shoes:hover #hoveritem1 {
            display: none;
        }

        .shoes:hover #hoveritem2 {
            display: block;
        }

        .shoes:hover #hovertext {
            margin-left: 2rem;
        }

        .modal {
            transition: opacity 0.25s ease;
        }

        body.modal-active {
            overflow-x: hidden;
            overflow-y: visible !important;
        }

    </style>
    <script>
        window.alertComponent = function () {
            return {
                openAlertBox: false,
                alertBackgroundColor: '',
                alertMessage: '',
                showAlert(type) {
                    this.openAlertBox = true
                    switch (type) {
                        case 'success':
                            this.alertBackgroundColor = 'bg-green-500'
                            this.alertMessage = `${this.successIcon} ${this.defaultSuccessMessage}`
                            break
                    }
                    this.openAlertBox = true
                },
                successIcon: `<svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 mr-2 text-white"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>`,
                defaultSuccessMessage: `Data Saved.`,
            }
        }

    </script>
</head>

<body x-data="alertComponent()" x-init="$watch('openAlertBox', value => {
        if(value){
            setTimeout(function () {
            openAlertBox = false
            }, 2000)
        }
        })" class="relative">
    <div class="wrapper">
        <div class="grid grid-cols-12">
            <div class="col-span-3 h-screen bg-black">
                <ul class="pt-10 flex flex-col items-center">
                    <li>
                        <img src="/public/images/senikersku.webp" alt="" class="w-40">
                    </li>
                    <li class="mt-2">
                        <h2 class="text-white font-semibold text-lg">
                            Welcome, Admin001
                        </h2>
                    </li>
                    <li class="mt-20 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="/public/admin_home.html" class="flex items-center">
                                <img src="/public/images/home-white.png" alt="" id="hoveritem1"
                                    class="relative w-8 pl-1">
                                <img src="/public/images/home-black.png" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Home</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-6 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="/public/admin_additem.html" class="flex items-center">
                                <img src="/public/images/shoes-white.png" alt="" id="hoveritem1"
                                    class="relative w-8 pl-1">
                                <img src="/public/images/shoes-black.png" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Add Item</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-6 px-10 w-full h-12">
                        <button
                            class="shoes bg-black border-2 border-white rounded-md px-2 py-2 w-full h-12 text-white hover:bg-white hover:border-black hover:text-black">
                            <a href="/public/admin_overview.html" class="flex items-center">
                                <img src="/public/images/overview-white.png" alt="" id="hoveritem1"
                                    class="relative w-8 pl-1">
                                <img src="/public/images/overview-black.png" alt="" id="hoveritem2"
                                    class="absolute w-8 pl-1 hidden">
                                <span class="pl-4" id="hovertext">Overview</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-6 px-10 w-full h-12">
                        <button class="bg-white rounded-md px-2 py-2 w-full h-12">
                            <a href="/public/admin_orderStatus.html" class="flex items-center">
                                <img src="/public/images/order-black.png" alt="" class="w-8 pl-1">
                                <span class="pl-4">Change Order Status</span>
                            </a>
                        </button>
                    </li>
                    <li class="mt-44 px-10 w-full h-10">
                        <button
                            class="bg-red-700 rounded-md px-2 py-2 w-full h-10 text-white hover:bg-red-800 hover:text-gray-200">
                            <a href="/public/signin.html" class="flex flex-col items-center">
                                <span class="font-bold text-md">Sign Out</span>
                            </a>
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-span-4 col-start-4 px-10 pt-6">
                <h1 class="text-4xl font-bold">
                    Order Status
                </h1>
                <div class="pt-10">
                    <h2 class="text-gray-400 font-semibold">Order ID</h2>
                    <h1 class="text-2xl font-semibold">213112</h1>
                </div>
                <div class="pt-6">
                    <h2 class="text-gray-400 font-semibold">Order Date</h2>
                    <h1 class="text-2xl font-semibold">30/06/2021</h1>
                </div>
                <div class="pt-6">
                    <h2 class="text-gray-400 font-semibold">Cost</h2>
                    <h1 class="text-2xl font-semibold">Rp 20.000.000</h1>
                </div>
                <div class="pt-8">
                    <h1 class="text-2xl font-semibold">Payment Slip</h1>
                    <div class="h-60 w-60 border-2 border-gray-400 rounded-md grid place-items-center">
                        <img src="/public/images/slip.png" alt="" class="w-48">
                    </div>
                </div>
                <div class="pt-5">
                    <label class="bg-black rounded-md px-6 py-2 text-sm text-white font-semibold cursor-pointer">
                        Add File
                        <input type="file" class="hidden">
                    </label>
                </div>
            </div>
            <div class="col-span-5 col-start-8 px-10 pt-6">
                <h1 class="text-4xl font-bold text-white">
                    Order Status
                </h1>
                <div class="pt-10">
                    <h2 class="text-gray-400 font-semibold">Customer</h2>
                    <h1 class="text-2xl font-semibold">Bambang</h1>
                </div>
                <div class="pt-6">
                    <h2 class="text-gray-400 font-semibold">Payment Method</h2>
                    <h1 class="text-2xl font-semibold">Transfer Bank (Bank BCA)</h1>
                </div>
                <div class="pt-6">
                    <h2 class="font-semibold text-white">Cost</h2>
                    <h1 class="text-2xl font-semibold text-white">Rp 20.000.000</h1>
                </div>
                <div class="pt-8">
                    <h1 class="text-2xl font-semibold">Status</h1>
                    <div @click.away="open = false" class="relative font-semibold pt-2" x-data="{ open: false }">
                        <button @click="open = !open" class="rounded-md border-2 border-gray-700 px-2 py-1">
                            <span>Order Status</span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{'rotate-180': open, 'rotate-0': !open}"
                                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Cancelled</a>
                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                    href="#">Accepted</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end pt-48 pr-16">
                    <button @click="showAlert('success')" class="bg-black rounded-md px-2 py-1 h-10 text-white mt-5">
                        <span class="font-semibold px-5">Save</span>
                    </button>
                </div>
                <div class="flex flex-col items-end pt-5 pr-16">
                    <span class="text-2xl font-semibold">
                        < 1 of 250>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <template x-if="openAlertBox">
        <div class="fixed top-0 right-0" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
            <div class="p-10">
                <div class="flex items-center text-white text-sm font-bold px-4 py-3 rounded shadow-md"
                    :class="alertBackgroundColor" role="alert">
                    <span x-html="alertMessage" class="flex"></span>
                    <button type="button" class="flex" @click="openAlertBox = false">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-4">
                            <path d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </template>
</body>

</html>