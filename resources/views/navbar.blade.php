<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superbad</title>
    @vite('resources/css/app.css')
</head>

<body class="text-white bg-pink-100">
    <nav class="flex items-center justify-between p-4 bg-pink-200 h-14">

        <!-- Superbad Icon -->
        <div class="flex-shrink-0">
            <img class="object-contain h-auto w-28" src="/images/superbad_icon.png" alt="Superbad Icon">
        </div>


        <!-- Search Bar Container -->
        <div>
            <div class="relative flex items-center justify-between w-full max-w-md ">
                <!-- Input Field with Search Icon -->
                <input type="text" placeholder="Search for anything"
                    class="py-2 pr-4 text-center text-gray-700 bg-pink-100 border border-pink-300 rounded-full shadow-sm w-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500">
                <!-- Search Icon Inside the Input -->
                <div class="absolute inset-y-0 flex items-center pointer-events-none left-3">
                    <img class="w-4 h-4 text-gray-500" src="/icons/search_icon.svg" alt="Search Icon">
                </div>
            </div>
        </div>


        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a href="#" class="font-bold text-gray-700 font-inter hover:underline decoration-4">Home</a>
            <a href="#" class="font-bold text-gray-700 hover:underline decoration-4">Friends</a>
            <a href="#" class="font-bold text-gray-700 rounded-full hover:underline decoration-4">Parties</a>
        </div>

        <!-- Icons: Alarm and Profile Picture -->
        <div class="flex items-center ml-4 space-x-4">
            <!-- Alarm Icon -->
            <div>
                <img src="/icons/alarm.svg" alt="Alarm Icon" class="w-6 h-6 text-white">
            </div>

            <!-- Profile Picture Placeholder -->
            <div>
                <div class="relative">
                    <button type="button" onclick="toggleDropdown()"
                        class="flex text-sm bg-pink-200 rounded-full focus:ring-4 focus:ring-pink-300"
                        aria-expanded="false">
                        <span class="sr-only">Open user menu</span>
                        <img src="/images/mclovin.jpg" alt="Profile Picture"
                            class="w-8 h-8 border-2 border-pink-300 rounded-full">
                    </button>

                    <div id="dropdown-user"
                        class="absolute right-0 z-50 hidden my-4 text-base list-none bg-pink-100 divide-y divide-pink-200 rounded shadow-lg">
                        <div class="px-4 py-3">
                            <p class="text-sm text-gray-700">McLovin</p>
                            <p class="text-sm font-medium text-gray-700 truncate">mclovin@gmail.com</p>
                        </div>
                        <ul class="py-1">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-200">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-200">Messages</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-200">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-200">Sign
                                    out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="w-full p-4 mt-4 overflow-x-auto border border-pink-300 rounded-lg shadow-lg bg-pink-50">
    <h1 class="mb-4 text-3xl font-bold text-pink-700">Trending Moments</h1>

    <div class="flex space-x-4">
        <!-- Container for multiple items to enable horizontal scrolling -->
        <div class="flex-none w-64 bg-pink-100 border border-pink-200 rounded-lg shadow-md">
            <img class="w-full h-auto border-b border-pink-200 rounded-t-lg" src="/images/epic_night_out.jpg" alt="Epic Night Out">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-pink-800">Epic Night Out</h2>
                <p class="text-sm text-pink-600">Lorem ipsum my night!!</p>
            </div>
        </div>

        <!-- Add more items here -->
        <div class="flex-none w-64 bg-pink-100 border border-pink-200 rounded-lg shadow-md">
            <img class="w-full h-auto border-b border-pink-200 rounded-t-lg" src="/images/almost_graduation.jpg" alt="Another Image">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-pink-800">Its almost graduation!</h2>
                <p class="text-sm text-pink-600">Glorious spliff!!</p>
            </div>
        </div>

        <div class="flex-none w-64 bg-pink-100 border border-pink-200 rounded-lg shadow-md">
            <img class="w-full h-auto border-b border-pink-200 rounded-t-lg" src="/images/had_fun.jpg" alt="Another Image">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-pink-800">Lets Shoot!</h2>
                <p class="text-sm text-pink-600">I had only one round</p>
            </div>
        </div>

        <div class="flex-none w-64 bg-pink-100 border border-pink-200 rounded-lg shadow-md">
            <img class="w-full h-auto border-b border-pink-200 rounded-t-lg" src="/images/fire.jpg" alt="Another Image">
            <div class="p-4">
                <h2 class="text-xl font-semibold text-pink-800">Out!</h2>
                <p class="text-sm text-pink-600">Lets Turn up!</p>
            </div>
        </div>




    </div>
</div>


<div class="w-full p-4 mt-4 overflow-x-auto rounded-lg shadow-lg bg-pink-50">
    <h1 class="mb-4 text-3xl font-bold text-pink-800">Memorable Quotes</h1>

    <!-- Quotes Container -->
    <div class="space-y-4">
        <div class="p-4 bg-white border border-pink-300 rounded-lg shadow-md">
            <h5 class="font-semibold text-pink-700">Seth</h5>
            <blockquote class="italic text-pink-800">
                “I Am Truly Jealous You Got To Suck On Those T**s When You Were A Baby.”
            </blockquote>
        </div>

        <div class="p-4 bg-white border border-pink-300 rounded-lg shadow-md">
            <h5 class="font-semibold text-pink-700">I am Mclovin</h5>
            <p class="text-pink-800">Gangsters. What’s Up Guys?</p>
        </div>

        <div class="p-4 bg-white border border-pink-300 rounded-lg shadow-md">
            <h5 class="font-semibold text-pink-700">Seth</h5>
            <p class="italic text-pink-800">
                “You Know How Many Foods Are Shaped Like D***s? The Best Kind!”
            </p>
        </div>
    </div>
</div>


<div class="w-full p-6 mt-6 overflow-x-auto border border-pink-600 rounded-lg shadow-xl bg-pink-50">
    <h1 class="mb-6 text-4xl font-extrabold text-center text-pink-800">Behind The Scenes</h1>

    <div class="flex pb-4 space-x-6 overflow-x-auto">
        <img class="h-auto max-w-sm transition-transform duration-300 transform border border-pink-300 rounded-lg shadow-md blur-sm hover:scale-105 hover:blur-none"
             src="/images/my_time.jpg" alt="image description">
        <img class="h-auto max-w-sm transition-transform duration-300 transform border border-pink-300 rounded-lg shadow-md hover:scale-105"
             src="/images/burn.jpg" alt="image description">
    </div>
</div>


<footer class="bg-pink-200  dark:bg-gray-900">

</footer>






    <script>
        function toggleDropdown() {
            var dropdown = document.getElementById('dropdown-user');
            dropdown.classList.toggle('hidden');
        }
    </script>
</body>

</html>
