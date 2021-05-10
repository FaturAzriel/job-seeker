<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ !empty($title) ? $title . ' | ' .config('app.name') : config('app.name') }}</title>
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
        
        <!-- Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- ... -->
    </head>
    <body>
    <nav class="bg-white shadow" x-data="{ mobileMenuOpen : false }">
        <div class="mx-auto px-4 py-3 sm:px-6 lg:px-16">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    </div>
                    <div><h4 class="ml-3 font-semibold">Job Seeker</h4></div>
                </div>

                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-4">
                        <a href="{{ route('home') }}" class="text-gray-400 px-3 py-2 {{ (request()->is('/')) ? 'text-gray-900 font-bold' : '' }}">Home</a>
                        
                        <a href="{{ route('about') }}" class="text-gray-400 px-3 py-2 {{ (request()->is('about')) ? 'text-gray-900 font-bold' : '' }}">About Us</a>
                        
                        <a href="{{ route('jobs') }}" class="text-gray-400 px-3 py-2 {{ (request()->is('jobs')) ? 'text-gray-900 font-bold' : '' }}">Find Jobs</a>
                        
                        <a href="{{ route('contact') }}" class="text-gray-400 px-3 py-2 {{ (request()->is('contact')) ? 'text-gray-900 font-bold' : '' }}">Contact Us</a>
                        
                        <a href="{{ route('login') }}" class="bg-indigo-600 rounded text-white font-semibold px-8 py-2">Login</a>
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="transform bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            
                            <!-- Open -->
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            
                            <!-- Close -->
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <div class="md:hidden bg-white shadow w-full" id="mobile-menu" :class="{ 'block' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ route('home') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('/')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Dashboard</a>
                
                <a href="{{ route('about') }}" class=" block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('about')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">About Us</a>
        
                <a href="{{ route('jobs') }}" class=" block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('jobs')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Find Jobs</a>

                <a href="{{ route('contact') }}" class=" block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('contact')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Contact Us</a>

                <a href="{{ route('login') }}" class=" block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('login')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Login</a>
            </div>
        </div>
      </nav>
    </body>
</html>

