@extends('layouts.default')

<title>
    LogIn To View Personalized WatchList
</title>

@section('content')
    <form method="POST" action="" novalidate
        class="w-[355px] p-6 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-md">
        @csrf
        <div class="text-center mb-6">
            <img src="https://laravel.com/img/favicon/favicon.ico" alt="Icon" class="w-14 h-14 mx-auto">
            <h2 class="text-2xl font-bold mt-2">LaraFlix</h2>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-[13px] leading-[20px] text-[#706f6c] dark:text-[#A1A09A] mb-1">User name or Email
                address <span class="text-[#f53003] dark:text-[#FF4433]">*</span></label>
            <input id="email" name="email" required autofocus autocomplete="email"
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded">
        </div>
        <div class="mb-4 relative">
            <label for="password"
                class="block text-[13px] leading-[20px] text-[#706f6c] dark:text-[#A1A09A] mb-1">Password <span class="text-[#f53003] dark:text-[#FF4433]">*</span></label>
            <input type="password" id="password" name="password" required
                class="w-full px-3 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded pr-10">
            <div class="absolute inset-y-0 right-3 top-6 flex items-center cursor-pointer" onclick="togglePasswordVisibility('password', 'eyeIcon')">
                <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700 dark:text-[#A1A09A]"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
            </div>
        </div>
        <div class="mb-6 flex items-center">
            <input type="checkbox" id="remember" name="remember" class="mr-2">
            <label for="remember"
                class="text-[13px] leading-[20px] cursor-pointer text-[#706f6c] dark:text-[#A1A09A]">Remember me</label>
        </div>
        <button type="submit"
            class="w-full cursor-pointer py-2 mb-4 rounded border border-black bg-[#1b1b18] text-white text-sm leading-normal hover:border-black transition-all dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-amber-200 font-medium dark:hover:border-white">
            Login Now
        </button>
        <p class="text-sm opacity-85">New user? Create a new account
            <a href="/register"
                class="inline-flex items-center space-x-1 font-medium hover:no-underline underline underline-offset-2 text-[#f53003] dark:text-[#FF4433] ml-1">
                <span>here</span>
                <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-2.5 h-2.5">
                    <path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor"
                        stroke-linecap="square" />
                </svg>
            </a>
        </p>
    </form>
@endsection
