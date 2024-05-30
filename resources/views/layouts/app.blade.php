<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <style>
        body{
            background-image: url('bg.jpg');
            background-size: cover;
        }
        .form-control, .form-control:hover, .form-control:active{
            background-color: white !important;
        }
        .card {
        background: #ffffff;
        border-radius: 10px;
        margin: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

    }

    .card-header {
        background: linear-gradient(120deg, #6a11cb, #2575fc);
        color: #fff;
        padding: 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        margin: 20px;
        padding: 20px;
    }
    </style>
    <div id="app">
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="{{ url('/') }}" class="text-lg font-bold text-gray-800">
                                {{ config('app.name', 'Laravel') }}
                            </a>
                        </div>
                    </div>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
                            @endif
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Register</a>
                            @endif
                        @else
                        <div class="hidden sm:flex sm:items-center sm:ms-6">
                            <div class="ms-3 relative">
                                <div class="relative">
                                    <div>
                                        <span class="inline-flex rounded-md">
                                            <button onclick="toggleDropdown()" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                                LAHBARI YOUSSEF
                                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <div id="dropdown" class="absolute z-50 mt-2 rounded-md shadow-lg ltr:origin-top-right rtl:origin-top-left end-0 w-48 hidden">
                                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                            <a href="" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out ">Profile</a>
                                           
                                            <a href="{{ route('logout') }}" class="block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out " onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Log Out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            function toggleDropdown() {
                                const dropdown = document.getElementById('dropdown');
                                dropdown.classList.toggle('hidden');
                            }
                        </script>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
    @yield('scripts')
</body>
</html>
