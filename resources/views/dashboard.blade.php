<x-app-layout>
    
    <x-slot name="header">
        <div class="flex items-center justify-between ">
            <div>
                <h2 class="text-xl font-semibold tracking-tight text-neutral-900 dark:text-neutral-100">
                    Dashboard
                </h2>
            </div>
        </div>
    </x-slot>


    <div class="py-6 bg-neutral-50 dark:bg-neutral-950">
        <div class="max-w-7xl mx-auto px-6 space-y-12">

            @guest
                <div
                    class="relative overflow-hidden rounded-3xl border border-neutral-200 dark:border-neutral-800
                           bg-white dark:bg-neutral-900 shadow-sm">

                    <div
                        class="absolute inset-0 bg-gradient-to-br from-neutral-100/60 to-transparent
                               dark:from-neutral-800/40"></div>

                    <div class="relative p-12 text-center">
                        <span
                            class="inline-flex items-center mb-6 px-4 py-1.5 rounded-full text-xs font-semibold
                                   bg-neutral-200 text-neutral-800
                                   dark:bg-neutral-800 dark:text-neutral-200">
                            Acceso restringido
                        </span>

                        <h3 class="text-4xl font-bold tracking-tight mb-4 text-neutral-900 dark:text-neutral-100">
                            Inicia sesión
                        </h3>

                        <p class="text-neutral-600 dark:text-neutral-400 max-w-xl mx-auto mb-10">
                            Este dashboard pertenece al <strong>proyecto final de PHP con Laravel</strong>.
                            Autentícate.
                        </p>

                        <div class="flex justify-center flex-wrap gap-4">
                            <a href="{{ route('login') }}"
                                class="px-7 py-3 rounded-2xl
                                       bg-neutral-900 text-white
                                       dark:bg-neutral-100 dark:text-neutral-900
                                       font-medium hover:opacity-90 transition">
                                Iniciar sesión
                            </a>

                            <a href="/google-auth/redirect"
                                class="px-7 py-3 rounded-2xl
                                       border border-neutral-300 text-neutral-700
                                       dark:border-neutral-700 dark:text-neutral-300
                                       hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">
                                Google
                            </a>
                        </div>
                    </div>
                </div>
            @endguest

            @auth

                <div
                    class="relative overflow-hidden rounded-3xl
                           bg-gradient-to-br from-neutral-800 via-neutral-900 to-neutral-950
                           dark:from-neutral-900 dark:via-neutral-950 dark:to-black
                           text-neutral-100 shadow-sm mb-5">

                    <div class="relative z-10 p-12">
                        <span
                            class="inline-flex items-center mb-5 px-4 py-1.5 rounded-full text-xs font-semibold
                                   bg-white/10 text-neutral-100">
                            Sesión activa
                        </span>

                        <h3 class="text-4xl md:text-5xl font-bold tracking-tight mb-4">
                            Bienvenido, {{ Auth::user()->name }}
                        </h3>

                        <p class="text-neutral-300 max-w-2xl text-lg">
                            <strong>Has iniciado sesión correctamente</strong>.
                        </p>
                    </div>

                    <div
                        class="absolute -top-32 -right-32 w-96 h-96
                               bg-white/10 rounded-full blur-3xl"></div>
                </div>

                <div
                    class="rounded-3xl border border-neutral-200 dark:border-neutral-800
                           bg-neutral-100 dark:bg-neutral-900 p-5">

                    <h4 class="text-2xl font-bold mb-4 text-neutral-900 dark:text-neutral-100">
                        Proyecto Final
                    </h4>

                    <p class="text-neutral-600 dark:text-neutral-400 max-w-3xl mb-8">
                        Web desarrollada con Laravel con Autenticación local y con Google.
                    </p>

                    <ul class="grid gap-2 text-sm">
                        <li class="flex items-center gap-3 text-neutral-700 dark:text-neutral-300">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                            Laravel 10
                        </li>
                        <li class="flex items-center gap-3 text-neutral-700 dark:text-neutral-300">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                            Blade + Tailwind CSS
                        </li>
                        <li class="flex items-center gap-3 text-neutral-700 dark:text-neutral-300">
                            <span class="w-2.5 h-2.5 rounded-full bg-red-500"></span>
                            Autenticación local y Google
                        </li>
                    </ul>
                </div>

            @endauth
        </div>
    </div>
</x-app-layout>
