<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link  href="{{ route('produtos.index') }}">
                        {{ __('Produtos') }}
                    </x-nav-link>
                    <x-nav-link  href="{{ route('categorias.index') }}">
                        {{ __('Categorias') }}
                    </x-nav-link>
                    <x-nav-link  href="{{ route('estoque.index') }}">
                        {{ __('Estoque') }}
                    </x-nav-link>
                    <x-nav-link  href="{{ route('formaPagamento.index') }}">
                        {{ __('Forma de pagamento') }}
                    </x-nav-link>
                    <x-nav-link  href="{{ route('pedidos.index') }}">
                        {{ __('Pedidos') }}
                    </x-nav-link>
                </div>
            </div>
    <body class="font-sans antialiased">
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
