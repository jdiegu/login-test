<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Tailwind -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">



</head>

<body class="min-h-screen bg-[#FDFDFC] dark:bg-[#0b0b0b] text-[#1b1b18] dark:text-[#EDEDEC]">

    <header class="max-w-7xl mx-auto px-6 py-6 flex items-center justify-between">
        <h1 class="text-lg font-semibold tracking-tight">Proyecto Final</h1>

        @if (Route::has('login'))
            <nav class="flex items-center gap-3">
                @auth
                    <span class="text-sm text-emerald-600 dark:text-emerald-400 font-medium">
                        Sesión iniciada
                    </span>
                    <a href="{{ url('/dashboard') }}"
                        class="px-4 py-2 rounded-md text-sm font-medium bg-black text-white dark:bg-white dark:text-black hover:opacity-90 transition">
                        Dashboard
                    </a>
                @else
                    <a href="/google-auth/redirect"
                        class="px-4 py-2 rounded-md text-sm font-medium border border-neutral-300 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">
                        Google
                    </a>
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 rounded-md text-sm font-medium border border-neutral-300 dark:border-neutral-700 hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">
                        Log in
                    </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="px-4 py-2 rounded-md text-sm font-medium bg-black text-white dark:bg-white dark:text-black hover:opacity-90 transition">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <main class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center py-5">

        <!-- TEXT CONTENT -->
        <section>
            @guest
                <span
                    class="inline-block mb-4 px-3 py-1 rounded-full text-xs font-medium bg-neutral-100 dark:bg-neutral-800">
                    Proyecto académico
                </span>

                <h2 class="text-4xl lg:text-5xl font-bold tracking-tight mb-6">
                    Proyecto del curso de<br class="hidden sm:block"> PHP con Laravel
                </h2>

                <p class="text-neutral-600 dark:text-neutral-400 max-w-xl mb-8">
                    Esta aplicación forma parte de un <strong>proyecto académico</strong> desarrollado con Laravel.
                    Puedes iniciar sesión para explorar sus funcionalidades o acceder utilizando tu cuenta de Google.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="{{ route('login') }}"
                        class="px-6 py-3 rounded-lg bg-black text-white dark:bg-white dark:text-black font-medium hover:opacity-90 transition">
                        Iniciar sesión
                    </a>
                    <a href="/google-auth/redirect"
                        class="px-6 py-3 rounded-lg border border-neutral-300 dark:border-neutral-700 font-medium hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">
                        Iniciar con Google
                    </a>
                </div>
            @endguest

            @auth
                <span
                    class="inline-block mb-4 px-3 py-1 rounded-full text-xs font-medium bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300">
                    Sesión activa
                </span>

                <h2 class="text-4xl lg:text-5xl font-bold tracking-tight mb-6">
                    Proyecto final<br class="hidden sm:block"> PHP Laravel
                </h2>

                <p class="text-neutral-600 dark:text-neutral-400 max-w-xl mb-8">
                    Has iniciado sesión correctamente. Este sistema corresponde al <strong>proyecto final del curso de PHP
                        con Laravel</strong>,
                    desarrollado y presentado por <strong>Juan Diego Morales</strong>.
                </p>

                <a href="{{ url('/dashboard') }}"
                    class="px-6 py-3 rounded-lg bg-black text-white dark:bg-white dark:text-black font-medium hover:opacity-90 transition">
                    Ir al Dashboard
                </a>

                <div
                    class="mt-6 bg-neutral-100 dark:bg-neutral-900 rounded-xl p-6 border border-neutral-200 dark:border-neutral-800 mb-8">

                    <h3 class="text-sm font-semibold mb-1 text-neutral-800 dark:text-neutral-200">
                        Juan Diego Morales
                    </h3>
                    <p class="text-sm text-neutral-500 dark:text-neutral-400 mb-4">
                        Desarrollador · Proyecto final Laravel
                    </p>

                    <div class="flex items-center gap-4">
                        <a href="mailto:juan.morales@email.com"
                            class="text-neutral-500 hover:text-black dark:hover:text-white transition" title="Email">
                            <i class="fa-regular fa-envelope fa-2xl"></i>
                        </a>


                        <!-- GitHub -->
                        <a href="https://github.com/juandm" target="_blank"
                            class="text-neutral-500 hover:text-black dark:hover:text-white transition" title="GitHub">
                            <i class="fa-brands fa-github fa-2xl"></i>
                        </a>


                        <!-- LinkedIn -->
                        <a href="https://linkedin.com/in/juandm" target="_blank"
                            class="text-neutral-500 hover:text-black dark:hover:text-white transition" title="LinkedIn">
                            <i class="fa-brands fa-linkedin fa-2xl"></i>
                        </a>
                    </div>
                </div>

            @endauth
        </section>

        <!-- VISUAL CARD -->
        <section class="relative">

            <div class="flex justify-center">

                <img src="{{ asset('media/Laravel-Logo.wine.png') }}" alt="Laravel Logo"
                    class="w-full max-w-xs sm:max-w-sm md:max-w-md h-auto object-contain rounded-xl">
            </div>


            <div
                class="rounded-2xl border border-neutral-200 dark:border-neutral-800 bg-white dark:bg-neutral-900 p-6 shadow-sm">
                <h3 class="text-lg font-semibold mb-4 text-neutral-500">Tecnologías utilizadas</h3>

                <ul class="space-y-4 text-sm">
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        Laravel 10
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        Blade + Tailwind CSS
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-red-500"></span>
                        Autenticación (Local & Google)
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <footer class="text-center text-xs text-neutral-500 py-6">
        © {{ date('Y') }} {{ config('app.name') }} · Proyecto académico Laravel
    </footer>

</body>

</html>