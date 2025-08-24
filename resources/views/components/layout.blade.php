<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head></x-head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18]">

    <x-header></x-header>

    {{-- main content start --}}
    {{ $slot }}
    {{-- main content end --}}

    <x-footer></x-footer>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif

    <x-script></x-script>
</body>
