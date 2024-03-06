<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Home</title>
</head>
<style>
    .bg-image {
        background-image: url(https://images.pexels.com/photos/1860618/pexels-photo-1860618.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
        background-size: cover;
        background-position: center;
    }

    .backdrop {
        backdrop-filter: blur(5px);
    }

    .text-shadow {
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
    }
</style>

<body>

<div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
    <div class="w-full text-gray-700 bg-blue dark-mode:text-gray-200 dark-mode:bg-gray-800">
        <div x-data="{ open: true }"
             class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
            <div class="flex flex-row items-center justify-between p-4">
                <a href="/"
                   class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Evento
                </a>
            </div>

            <div class="ml-20 pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                       type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
                    <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                         viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                         xml:space="preserve"
                         width="512px" height="512px">
                         <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
                    </svg>
                </button>
            </div>

            @if (Route::has('login'))
                <nav :class="{'flex': open, 'hidden': !open}"
                     class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="{{ url('/eventliste') }}">Events</a>
                    @auth
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                           href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                               href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                       href="#">About</a>
                </nav>
            @endif
        </div>
    </div>
</div>


<div class="bg-image w-full min-h-screen flex flex-wrap justify-center items-center gap-3 py-5">
    <div
        class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-gray-300 shadow-lg">
        <!-- header -->
        <div class="w-full mb-3 pb-3 border-b border-1 border-white">
            <h3 class="text-xl font-semibold text-shadow">Something Good</h3>
        </div>
        <!-- body -->
        <div>
            <img src="https://www.ticket.ma/upload/events/3092/original_large_opm.jpg" alt="image1"
                 class="w-full h-48 object-cover mb-2">
            <p class="mb-3 tracking-wide text-base text-shadow">
                Sous la direction du talentueux chef de chœur indonésien Ivan Yohan, plus de quarante choristes
                semi-professionnels
            </p>
            <button
                class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
                Detail
            </button>
        </div>
    </div>
    <div class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-white shadow-lg">
        <!-- header -->
        <div class="w-full mb-3 pb-3 border-b border-1 border-white">
            <h3 class="text-xl font-semibold text-shadow">Something Good</h3>
        </div>
        <!-- body -->
        <div>
            <img src="https://www.ticket.ma/upload/events/3059/original_650x445_Concert_d_ouverture_2_1.jpg"
                 alt="image2" class="w-full h-48 object-cover mb-2">
            <p class="mb-3 tracking-wide text-base text-shadow">
                La religion de l’amour : mystique et poésie Avec Fatimzahra Qortobi et Abdelkader Ghayt Parc Jnan Sbil
            </p>
            <button
                class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
                Detail
            </button>
        </div>
    </div>
    <div class="backdrop w-10/12 md:w-1/4 bg-white bg-opacity-10 rounded p-3 text-white border border-white shadow-lg">
        <!-- header -->
        <div class="w-full mb-3 pb-3 border-b border-1 border-white">
            <h3 class="text-xl font-semibold text-shadow">Something Good</h3>
        </div>
        <!-- body -->
        <div>
            <img src="https://www.ticket.ma/upload/events/2293/original_WACvsSahel_650.jpg" alt="image3"
                 class="w-full h-48 object-cover mb-2">
            <p class="mb-3 tracking-wide text-base text-shadow">
                La recharge de votre carte ID D'Honneur pour la Ligue de Champions CAF au Stade Mohammed V est
                disponible.
            </p>
            <button
                class="backdrop bg-white bg-opacity-0 border border-white px-3 py-1.5 rounded focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-40 hover:bg-opacity-10 text-lg">
                Detail
            </button>
        </div>
    </div>
</div>
</body>
