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
        <div class="max-w-7xl mx-auto px-4 py-2 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                    </div>
                    <div><h4 class="ml-3 font-semibold">Job Seeker</h4></div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('admin.dashboard') }}" class="text-gray-400 px-3 py-2 text-sm {{ (request()->is('admin/dashboard')) ? 'text-gray-900 font-bold' : '' }}">Dashboard</a>
            
                            <a href="{{ route('admin.vacancy.index') }}" class="text-gray-400 px-3 py-2 text-sm {{ (request()->is('admin/vacancy')) ? 'text-gray-900 font-bold' : '' }}">Jobs</a>
            
                            <a href="{{ route('admin.users.index') }}" class="text-gray-400 px-3 py-2 text-sm {{ (request()->is('admin/users')) ? 'text-gray-900 font-bold' : '' }}">Users</a>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <button class="p-1 rounded-full text-gray-400 focus:outline-none">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
        
                        <!-- Profile dropdown -->
                        <div class="ml-3 relative">
                            <div>
                            <button type="button" class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none" id="user-menu" aria-expanded="false" aria-haspopup="true">
                                <img class="h-8 w-8 rounded-full" src="https://www.mantruckandbus.com/fileadmin/media/bilder/02_19/219_05_busbusiness_interviewHeader_1485x1254.jpg" alt="">
                            </button>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" type="button" class="transform bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
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
  
      <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu" :class="{ 'block' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"  @click.away="mobileMenuOpen = false">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('admin/')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Dashboard</a>
        
                <a href="{{ route('admin.vacancy.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('admin/vacancy')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}">Jobs</a>
        
                <a href="{{ route('admin.users.index') }}" class="block px-3 py-2 rounded-md text-base font-medium {{ (request()->is('admin/users')) ? 'bg-indigo-600 text-white' : 'text-gray-500' }}"">Users</a>        
            </div>
            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://www.mantruckandbus.com/fileadmin/media/bilder/02_19/219_05_busbusiness_interviewHeader_1485x1254.jpg" alt="">
                    </div>
                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-gray-900">{{ auth()->user()->name }}</div>
                        <div class="text-sm font-medium leading-none text-gray-400">{{ auth()->user()->email }}</div>
                    </div>
                    <button class="ml-auto bg-gray-800 flex-shrink-0 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    </button>
                </div>
                <div class="mt-3 px-2 space-y-1">        
                    <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Sign out</a>
                </div>
            </div>
        </div>
    </nav>

    </body>
</html>
