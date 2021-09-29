<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

      
        <!-- Styles -->
         <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
         <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
         
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
@if (session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 3000)"
         x-show="show"
         class="fixed bg-green-500 text-white py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
</html>