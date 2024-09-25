<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="bg-[#13152b] opacity-80 fixed px- z-50 w-full">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="#home" id="home-link">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-400" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link href="#home" id="home-nav" class="nav-link">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link href="#about" id="about-nav" class="nav-link">
                        {{ __('About me') }}
                    </x-nav-link>
                    <x-nav-link href="#projects" id="projects-nav" class="nav-link">
                        {{ __('Projects') }}
                    </x-nav-link>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <div class="bg-gradient-to-r from-[#34e3b2] to-[#006Cb3] rounded-xl p-1.5">
                    <x-nav-link href="#contact" id="contact-nav" class="nav-link text-white hover:border-none border-none">
                        {{ __('Contact me!') }}
                    </x-nav-link>
                </div>
            </div>


            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('home') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
