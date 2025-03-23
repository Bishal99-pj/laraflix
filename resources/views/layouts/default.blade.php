<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen container mx-auto flex-col">
    <div
        class="flex max-w-7xl my-6 items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        @yield('content')
    </div>
</body>

</html>
