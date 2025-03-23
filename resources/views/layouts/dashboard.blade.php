<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')

    <title>Welcome To LaraFlix</title>
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] flex flex-col p-8 lg:px-16 xl:px-20 lg:py-8 lg:justify-center container mx-auto">
    >
    <header
        class="flex justify-between rounded-md px-8 py-5 bg-white/80 dark:bg-[#161615]/50 backdrop-blur-sm shadow mb-10">
        <a href="/" class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">
            LaraFlix🎬
        </a>
        <a href="#"
            class="font-medium flex items-center space-x-1 text-lg hover:underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M4 12a1 1 0 0 0 1 1h7.59l-2.3 2.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76a1 1 0 0 0-.21-.33l-4-4a1 1 0 1 0-1.42 1.42l2.3 2.29H5a1 1 0 0 0-1 1M17 2H7a3 3 0 0 0-3 3v3a1 1 0 0 0 2 0V5a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-3a1 1 0 0 0-2 0v3a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3" />
            </svg>
            <span>
                Sign Out
            </span>
        </a>
    </header>

    <div class="flex gap-x-6">

        <main class="flex-1 p-6 rounded-md bg-white/80 dark:bg-[#161615]/50 shadow">
            @yield('dashboard')
        </main>

        <aside
            class="w-72 p-4 sticky top-10 bg-white/80 dark:bg-[#161615]/50 backdrop-blur-sm rounded-md shadow self-start">
            <nav>
                <ul class="space-y-2">
                    <li>
                        <a href=""
                            class="block px-4 py-2 font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:bg-gray-200 dark:hover:bg-[#161615] rounded-md">
                            Movies
                        </a>
                    </li>
                    <li>
                        <a href=""
                            class="block px-4 py-2 font-medium text-[#1b1b18] dark:text-[#EDEDEC] hover:bg-gray-200 dark:hover:bg-[#161615] rounded-md">
                            TV Shows
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
    </div>
</body>

</html>
