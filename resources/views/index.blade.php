<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'AppliqTech')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <script src="https://kit.fontawesome.com/530790a84d.js" crossorigin="anonymous"></script>        
        @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="main-layout">
        <x-header/>
        <x-pages.home/>
        <x-pages.about-us :offers="$offers" />
        <x-pages.our-works :ourWorks="$ourWorks"/>
        <x-pages.price-list :priceLists="$priceLists" />
        <x-pages.contact />
        
        @livewireScripts
    </body>

</html>
