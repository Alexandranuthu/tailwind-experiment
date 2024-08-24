<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-sm overflow-hidden bg-pink-100 rounded-lg shadow-lg">
        <div class="flex items-center justify-center mt-4">
            <img class="w-20 h-20 border-4 border-pink-300 rounded-full" src="/images/mclovin.jpg" alt="mclovin profile picture">
        </div>

        <div class="px-4 py-6 text-center">
            <h1 class="mb-2 text-3xl font-bold">Mclovin</h1>
            <p class="mb-4 text-gray-700">I’m sorry, Evan, that the Coen Brothers don't direct the p**n I watch</p>
        </div>
        <div class="flex items-center justify-center px-4 mb-4 space-x-4">
            <span class="px-3 py-1 text-sm bg-gray-200 rounded-full">Comedy</span>
            <span class="px-3 py-1 text-sm bg-gray-200 rounded-full">Drama</span>
            <span class="px-3 py-1 text-sm bg-gray-200 rounded-full">coming-of-age</span>
        </div>

        <div class="flex items-center justify-center mb-6 space-x-4 cursor-pointer">
            <img class="w-8 h-8" src="/icons/discord.png" alt="discord icon">
            <a href="https://www.reddit.com/r/FIlm/comments/1e62kwr/is_superbad_2007_a_funny_movie/?utm_source=share&utm_medium=web3x&utm_name=web3xcss&utm_term=1&utm_content=share_button"><img class="w-8 h-8" src="/icons/reddit.png" alt="reddit icon"></a>
            <img class="w-8 h-8" src="/icons/twitter.png" alt="twitter icon">
            <a href="https://youtu.be/vqQmTyOHTsw?si=eqA7-DH9fYNxJVsCo"><img class="w-8 h-8" src="/icons/youtube.png" alt="youtube icon"></a>
        </div>

        <div class="px-4 mb-6">
            <button class="w-full h-12 text-white bg-red-700 rounded-full hover:bg-red-600">Send message</button>
        </div>
    </div>

</body>

</html>
