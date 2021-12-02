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
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script>
        var cont = 0;

        function loopSlider() {
            var xx = setInterval(function () {
                switch (cont) {
                    case 0: {
                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton1").removeClass("bg-gray-800");
                        $("#sButton2").addClass("bg-gray-800");
                        $("#slider-4").fadeOut(400);
                        $("#slider-3").delay(400).fadeIn(400);
                        $("#sButton4").removeClass("bg-gray-800");
                        $("#sButton3").addClass("bg-gray-800");
                        $("#slider-6").fadeOut(400);
                        $("#slider-5").delay(400).fadeIn(400);
                        $("#sButton6").removeClass("bg-gray-800");
                        $("#sButton5").addClass("bg-gray-800");
                        cont = 1;

                        break;
                    }
                    case 1: {

                        $("#slider-2").fadeOut(400);
                        $("#slider-1").delay(400).fadeIn(400);
                        $("#sButton2").removeClass("bg-gray-800");
                        $("#sButton1").addClass("bg-gray-800");
                        $("#slider-4").fadeOut(400);
                        $("#slider-3").delay(400).fadeIn(400);
                        $("#sButton4").removeClass("bg-gray-800");
                        $("#sButton3").addClass("bg-gray-800");
                        $("#slider-6").fadeOut(400);
                        $("#slider-5").delay(400).fadeIn(400);
                        $("#sButton6").removeClass("bg-gray-800");
                        $("#sButton5").addClass("bg-gray-800");

                        cont = 0;

                        break;
                    }


                }
            }, 8000);

        }

        function reinitLoop(time) {
            clearInterval(xx);
            setTimeout(loopSlider(), time);
        }



        function sliderButton1() {

            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-gray-800");
            $("#sButton1").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 0;
        }

        function sliderButton2() {
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-gray-800");
            $("#sButton2").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 1;
        }

        function sliderButton3() {

            $("#slider-4").fadeOut(400);
            $("#slider-3").delay(400).fadeIn(400);
            $("#sButton4").removeClass("bg-gray-800");
            $("#sButton3").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 0;
        }

        function sliderButton4() {
            $("#slider-3").fadeOut(400);
            $("#slider-4").delay(400).fadeIn(400);
            $("#sButton3").removeClass("bg-gray-800");
            $("#sButton4").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 1;
        }

        function sliderButton5() {

            $("#slider-6").fadeOut(400);
            $("#slider-5").delay(400).fadeIn(400);
            $("#sButton6").removeClass("bg-gray-800");
            $("#sButton5").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 0;
        }

        function sliderButton6() {
            $("#slider-5").fadeOut(400);
            $("#slider-6").delay(400).fadeIn(400);
            $("#sButton5").removeClass("bg-gray-800");
            $("#sButton6").addClass("bg-gray-800");
            reinitLoop(4000);
            cont = 1;
        }


        $(document).ready(function () {
            $("#slider-2").hide();
            $("#slider-4").hide();
            $("#slider-6").hide();
            $("#sButton1").addClass("bg-gray-800");
            $("#sButton3").addClass("bg-gray-800");
            $("#sButton5").addClass("bg-gray-800");
            loopSlider();
        });

    </script>
</head>

<body>
    <nav class="flex bg-black text-center">
        <div class="w-3/5">
            <ul class="flex justify-center">
                <li class="px-8 py-4 text-white font-semibold hover:text-gray-300 text-xl">
                    <a href="">
                        <img src="/images/senikersku.webp" alt="" class="h-10">
                    </a>
                </li>
                <li class="px-8 py-5 text-white font-semibold hover:text-gray-300 text-l">
                    <a href="/public/cari_barang.html" class="drowdown">AIR JORDAN</a>
                </li>
                <li class="px-8 py-5 text-white font-semibold hover:text-gray-300 text-l">
                    <a href="/public/cari_barang.html">ADIDAS YEEZY</a>
                </li>
                <li class="px-8 py-5 text-white font-semibold hover:text-gray-300 text-l">
                    <a href="/public/cari_barang.html">NIKE</a>
                </li>
                <li class="px-8 py-5 text-white font-semibold hover:text-gray-300 text-l">
                    <a href="/public/cari_barang.html">BROWSE ALL</a>
                </li>
            </ul>
        </div>
        <div class="w-2/5 py-5">
            <ul class="flex justify-end px-20 mr-10">
                <li class="px-2 text-white font-semibold hover:text-gray-300">
                    <a href="/public/wishlist.html"><img src="/images/wishlist.png" alt="" class="w-8 h-8"></a>
                </li>
                <li class="px-2 text-white font-semibold hover:text-gray-300">
                    <a href="/public/shopping_cart.html"><img src="/images/cart.png" alt="" class="w-8 h-8"></a>
                </li>
                <li class="px-2 text-white font-semibold hover:text-gray-300">
                    <a href="{{route('editprofile')}}"><img src="/images/account.png" alt="" class="w-8 h-8"></a>
                </li>
            </ul>
        </div>
    </nav>
    @yield('content')
</body>

</html>
