<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>

<body class="antialiased">
    <header x-data="{ mobileMenuOpen : false }"
        class="cc_navigation navigation flex flex-wrap flex-row justify-between md:items-center md:space-x-4 bg-white py-6 px-6 relative">
        <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
            <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <nav class="absolute md:relative top-16 left-0 md:top-0 z-20 md:flex flex-col md:flex-row md:space-x-6 font-semibold w-full md:w-auto bg-white shadow-md rounded-lg md:rounded-none md:shadow-none md:bg-transparent p-6 pt-0 md:p-0"
            :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}" @click.away="mobileMenuOpen = false">
            <a href="#" class="block py-1 text-indigo-600 hover:underline">Home</a>
            <a href="#" class="block py-1 text-gray-600 hover:underline">About us</a>
            <a href="#" class="block py-1 text-gray-600 hover:underline">Services</a>
            <a href="#" class="block py-1 text-gray-600 hover:underline">Blog</a>
            <a href="#" class="block py-1 text-gray-600 hover:underline">Contact</a>
        </nav>
    </header>

    <article class="px-6 h-screen intro">
        <h2 class="font-semibold cc_intro-font cc_headline_scroll_1">Fahrtwind</h2>
        <h2 class="font-semibold cc_intro-font cc_intro-font_animation cc_headline_scroll_2">Media</h2>
        <svg class="mt-2 cc_arrow-icon animate-bounce w-6 h-6 justify-center w-full cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 justify-center w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
              </svg>
        </svg>
    </article>

    <article class="text-lg px-6 py-6 text-gray-600 mx-auto max-w-2xl h-screen cc_intro-text">
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Hi! wir sind Fahrwind Media, ein</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Freelancing Collective
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                  Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
                </p>
              </div>
          
              <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                  <div class="relative">
                    <dt>
                      <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/globe-alt -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                      </div>
                      <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                  </div>
          
                  <div class="relative">
                    <dt>
                      <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/scale -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                        </svg>
                      </div>
                      <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                  </div>
          
                  <div class="relative">
                    <dt>
                      <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/lightning-bolt -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                      </div>
                      <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                  </div>
          
                  <div class="relative">
                    <dt>
                      <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/annotation -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                        </svg>
                      </div>
                      <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                    </dd>
                  </div>
                </dl>
              </div>
            </div>
          </div>
    </article>
</body>
<canvas class="background"></canvas>

<script src="{{ asset('js/app.js') }}"></script>

</html>
