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

@include('nav')

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
