<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Telyu Coffee</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')

</head>

<body class="antialiased">
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="https://www.instagram.com/telu.coffee/" class="text-sm font-semibold leading-6 text-white">Instagram</a>
                    <a href="https://maps.app.goo.gl/vaQnA2jHRaGjMYZ18" class="text-sm font-semibold leading-6 text-white">Location</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="{{ route('login') }}" class="text-sm font-semibold leading-6 text-white">Log in <span aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
        </header>

        <div class="hero min-h-screen relative" style="background-image: url('{{ asset('storage/images/coffee.jpg') }}'); background-size: cover; background-position: center;">

            <!-- Overlay with reduced opacity for the background image -->
            <div class="hero-overlay bg-black bg-opacity-60 absolute inset-0"></div>

            <!-- Your content here -->
            <div class="text-center text-white absolute inset-0 flex items-center justify-center">
                <div class="max-w-screen-xl mx-auto">
                    <h1 class="mb-5 text-5xl font-bold">Welcome to Telyu Coffee</h1>
                    <p class="mb-5">Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung</p>
                    <div class="mt-5">
                        <a href="{{ route('login') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Order Now</a>
                        <a href="{{ route('register') }}" class="ml-3">Register Now</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>