<nav x-data="{ open: false }"
    class="sticky top-0 z-50 bg-white/80 dark:bg-neutral-950/80 backdrop-blur
           border-b border-neutral-200 dark:border-neutral-800">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <div class="flex items-center gap-10">

                <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
                    <x-application-logo
                        class="h-9 w-auto fill-current text-neutral-900 dark:text-neutral-100" />
                </a>

                <div class="hidden sm:flex items-center gap-8">
                    <x-nav-link
                        :href="route('welcome')"
                        :active="request()->routeIs('dashboard')"
                        class="text-sm font-medium text-neutral-600 dark:text-neutral-400
                               hover:text-neutral-900 dark:hover:text-neutral-100 transition">
                        Welcome
                    </x-nav-link>
                </div>

                 <div class="hidden sm:flex items-center gap-8">
                    <x-nav-link
                        :href="route('dashboard')"
                        :active="request()->routeIs('dashboard')"
                        class="text-sm font-medium text-neutral-600 dark:text-neutral-400
                               hover:text-neutral-900 dark:hover:text-neutral-100 transition">
                        Dashboard
                    </x-nav-link>
                </div>

            </div>

            <div class="hidden sm:flex items-center gap-4">

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl
                                   border border-neutral-200 dark:border-neutral-800
                                   bg-white dark:bg-neutral-900
                                   text-sm font-medium text-neutral-700 dark:text-neutral-300
                                   hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">

                            <span>{{ Auth::user()->name }}</span>

                            <svg class="w-4 h-4 text-neutral-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link
                            :href="route('profile.edit')"
                            class="text-neutral-700 dark:text-neutral-300">
                            Perfil
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link
                                :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();"
                                class="text-red-600 dark:text-red-400">
                                Cerrar sesión
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <div class="flex items-center sm:hidden">
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 rounded-xl
                           text-neutral-500 dark:text-neutral-400
                           hover:bg-neutral-100 dark:hover:bg-neutral-800 transition">

                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="open" x-transition class="sm:hidden">
        <div class="px-4 pt-4 pb-3 space-y-2 bg-white dark:bg-neutral-950 border-t border-neutral-200 dark:border-neutral-800">

            <x-responsive-nav-link
                :href="route('dashboard')"
                :active="request()->routeIs('dashboard')"
                class="rounded-xl">
                Dashboard
            </x-responsive-nav-link>

            <div class="mt-4 pt-4 border-t border-neutral-200 dark:border-neutral-800">
                <div class="px-2 mb-3">
                    <p class="text-sm font-medium text-neutral-900 dark:text-neutral-100">
                        {{ Auth::user()->name }}
                    </p>
                    <p class="text-xs text-neutral-500">
                        {{ Auth::user()->email }}
                    </p>
                </div>

                <x-responsive-nav-link :href="route('profile.edit')" class="rounded-xl">
                    Perfil
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link
                        :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();"
                        class="rounded-xl text-red-600 dark:text-red-400">
                        Cerrar sesión
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
