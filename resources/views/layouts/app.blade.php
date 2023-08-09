<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CloudPixel</title>

    @vite(["resources/css/app.css", "resources/js/app.js"])
</head>
<body class="dark:bg-slate-700 dark:text-white">
    <header class="flex py-3 px-5 items-center bg-gray-50 dark:bg-slate-800">
        <h1 class="text-2xl font-bold text-gray-500 dark:text-gray-200">CloudPixel</h1>
        <nav class="ms-auto flex gap-3">
            @guest
                <a href="{{ route("login") }}" class="nav-link">Login</a>
                <a href="{{ route("register") }}" class="nav-link">Register</a>
            @endguest
            @auth
                <a href="{{ route("login.logout") }}" class="nav-link">Logout</a>
            @endauth
        </nav>

        <button type="button" id="theme-toggler" class="mx-3 btn">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="14" height="20" fill="none" viewBox="0 0 14 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7a3 3 0 0 1 3-3M5 19h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 1 7c0 4 4 5 4 9h4Z"/>
            </svg>
        </button>
    </header>
    <main>
        @yield("content") 
    </main>
</body>
</html>