<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard Admin</title>

    <style>
        /* Compiled dark classes from Tailwind */
        .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
            border-color: rgba(55, 65, 81);
        }

        .dark .dark\:bg-gray-50 {
            background-color: rgba(249, 250, 251);
        }

        .dark .dark\:bg-gray-100 {
            background-color: rgba(243, 244, 246);
        }

        .dark .dark\:bg-gray-600 {
            background-color: rgba(75, 85, 99);
        }

        .dark .dark\:bg-gray-700 {
            background-color: rgba(55, 65, 81);
        }

        .dark .dark\:bg-gray-800 {
            background-color: rgba(31, 41, 55);
        }

        .dark .dark\:bg-gray-900 {
            background-color: rgba(17, 24, 39);
        }

        .dark .dark\:bg-red-700 {
            background-color: rgba(185, 28, 28);
        }

        .dark .dark\:bg-green-700 {
            background-color: rgba(4, 120, 87);
        }

        .dark .dark\:hover\:bg-gray-200:hover {
            background-color: rgba(229, 231, 235);
        }

        .dark .dark\:hover\:bg-gray-600:hover {
            background-color: rgba(75, 85, 99);
        }

        .dark .dark\:hover\:bg-gray-700:hover {
            background-color: rgba(55, 65, 81);
        }

        .dark .dark\:hover\:bg-gray-900:hover {
            background-color: rgba(17, 24, 39);
        }

        .dark .dark\:border-gray-100 {
            border-color: rgba(243, 244, 246);
        }

        .dark .dark\:border-gray-400 {
            border-color: rgba(156, 163, 175);
        }

        .dark .dark\:border-gray-500 {
            border-color: rgba(107, 114, 128);
        }

        .dark .dark\:border-gray-600 {
            border-color: rgba(75, 85, 99);
        }

        .dark .dark\:border-gray-700 {
            border-color: rgba(55, 65, 81);
        }

        .dark .dark\:border-gray-900 {
            border-color: rgba(17, 24, 39);
        }

        .dark .dark\:hover\:border-gray-800:hover {
            border-color: rgba(31, 41, 55);
        }

        .dark .dark\:text-white {
            color: rgba(255, 255, 255);
        }

        .dark .dark\:text-gray-50 {
            color: rgba(249, 250, 251);
        }

        .dark .dark\:text-gray-100 {
            color: rgba(243, 244, 246);
        }

        .dark .dark\:text-gray-200 {
            color: rgba(229, 231, 235);
        }

        .dark .dark\:text-gray-400 {
            color: rgba(156, 163, 175);
        }

        .dark .dark\:text-gray-500 {
            color: rgba(107, 114, 128);
        }

        .dark .dark\:text-gray-700 {
            color: rgba(55, 65, 81);
        }

        .dark .dark\:text-gray-800 {
            color: rgba(31, 41, 55);
        }

        .dark .dark\:text-red-100 {
            color: rgba(254, 226, 226);
        }

        .dark .dark\:text-green-100 {
            color: rgba(209, 250, 229);
        }

        .dark .dark\:text-blue-400 {
            color: rgba(96, 165, 250);
        }

        .dark .group:hover .dark\:group-hover\:text-gray-500 {
            color: rgba(107, 114, 128);
        }

        .dark .group:focus .dark\:group-focus\:text-gray-700 {
            color: rgba(55, 65, 81);
        }

        .dark .dark\:hover\:text-gray-100:hover {
            color: rgba(243, 244, 246);
        }

        .dark .dark\:hover\:text-blue-500:hover {
            color: rgba(59, 130, 246);
        }

        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }

        .sidebar:hover {
            width: 16rem;
        }

        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
    </style>
<body>
    <div x-data="setup()" :class="{ 'dark': isDark }">
        @include('sidebar')
        <div
            class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <div class="h-full ml-14 mt-14 mb-10 md:ml-64">

                <!-- Statistics Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">1,257</p>
                            <p>Events</p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">557</p>
                            <p>Users</p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">10</p>
                            <p>Organizers</p>
                        </div>
                    </div>
                    <div
                        class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                        <div
                            class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                 class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl">1400</p>
                            <p>Empty place</p>
                        </div>
                    </div>
                </div>
                <!-- ./Statistics Cards -->

                <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

                    <!-- Events To Approve -->
                    <div
                        class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Events To
                                        Approve</h3>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto max-h-[600px] overflow-y-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                    <tr>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            Orgenizer
                                        </th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Event
                                        </th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Category
                                        </th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            Approve
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-green-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Approve
                                            </button>
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ./Events To Approve -->

                    <!-- Events -->
                    <div
                        class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                        <div class="rounded-t mb-0 px-0 border-0">
                            <div class="flex flex-wrap items-center px-4 py-2">
                                <div class="relative w-full max-w-full flex-grow flex-1">
                                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Manage
                                        Events</h3>
                                </div>
                            </div>
                            <div class="block w-full overflow-x-auto max-h-[600px] overflow-y-auto">
                                <table class="items-center w-full bg-transparent border-collapse">
                                    <thead>
                                    <tr>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Event
                                        </th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                            Category
                                        </th>
                                        <th class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                            Approve
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="text-gray-700 dark:text-gray-100">
                                        <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                            Coral
                                        </th>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            Chaabi
                                        </td>
                                        <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <button
                                                class="middle none center rounded-lg bg-red-500 py-2 px-4 font-sans text-xs font-bold uppercase text-white"
                                                data-ripple-light="true"
                                            >
                                                Delete
                                            </button>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- ./Events -->
                </div>


            </div>
        </div>
    </div>
</body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
    <script>
        const setup = () => {
            const getTheme = () => {
                if (window.localStorage.getItem('dark')) {
                    return JSON.parse(window.localStorage.getItem('dark'))
                }
                return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
            }

            const setTheme = (value) => {
                window.localStorage.setItem('dark', value)
            }

            return {
                loading: true,
                isDark: getTheme(),
                toggleTheme() {
                    this.isDark = !this.isDark
                    setTheme(this.isDark)
                },
            }
        }
    </script>
