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
</head>

<body class="bg-gray-100">
    <form method="POST" action="{{route('signup.post')}}">
        @csrf
        <div class="grid grid-cols-5">
            <div style="background-image: url('/images/signup.png')"
                class="bg-cover h-landing bg-local relative col-span-2">
                <img src="/images/signup.png" alt="" class="object-contain"> 
            </div>
            <div class="flex flex-col col-start-3 col-span-3">
                <div class="py-10 text-center">
                    <h1 class="text-3xl font-bold">
                        Sign Up to Senikersku
                    </h1>
                </div>
                <div class="px-48">
                    <h2 class="text-xl font-semibold pb-2">Name</h2>
                    <input
                        class="shadow-lg appearance-none rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="name" name="name" type="text" placeholder="Name">
                </div>
                <div class="px-48 py-10">
                    <h2 class="text-xl font-semibold pb-2">Email</h2>
                    <input
                        class="shadow-lg appearance-none rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="email" placeholder="YourEmail@gmail.com">
                </div>
                <div class="px-48">
                    <h2 class="text-xl font-semibold pb-2">Password</h2>
                    <input
                        class="shadow-lg appearance-none rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="8 Characters Minimum">
                </div>
                <div class="flex flex-col items-end pt-14 px-48">
                    <button class="bg-black rounded-lg px-6 py-2 text-sm border-4 text-white font-semibold"
                        type="submit">
                        <a href="/public/landing_page.html">Sign Up</a>
                    </button>
                </div>
                <div class="px-48 py-24">
                    <span class="font-semibold">Already have an account?</h2>
                        <a href="/public/signin.html"><span class="font-semibold text-blue-700 underline">Sign
                                in</span></a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
