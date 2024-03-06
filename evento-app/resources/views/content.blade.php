<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/core.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
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


<div class="w-full md:w-1/2 mx-auto">
    <div class="pt-5 mb-5 w-full text-gray-800 text-4xl px-5 font-bold leading-none">
        Kemp and Bottoms hurl insults at each other in Georgia mask feud
    </div>

    <div class="mx-5">
        <img
            src="https://static.politico.com/dims4/default/fcd6d6a/2147483647/resize/1920x/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F22%2F87%2F2259ffd444678054896b9fa32b4d%2Fgettyimages-1221513169.jpg">
    </div>

    <div class="flex">
        <div class="w-full text-gray-600 font-thin italic px-5 pt-3">
            By <strong class="text-gray-700">Quint Forgey</strong><br>
            07/17/2020 09:57 AM EDT<br>
            Updated: 07/17/2020 10:33 AM EDT
        </div>
        <div class="m-5">
            <button
                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                data-ripple-light="true">
                100 MAD
            </button>
        </div>
    </div>

    <div class="px-5 w-full mx-auto">
        <p class="my-5">Georgia Gov. Brian Kemp and Atlanta Mayor Keisha Lance Bottoms hurled insults at one another
            Friday, as their legal battle over whether to mandate masks in the state’s capital city entered its second
            day.</p>
    </div>
</div>

</body>
</html>
