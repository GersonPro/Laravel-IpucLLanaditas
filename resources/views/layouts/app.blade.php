<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/app.css">
  <link rel="stylesheet" href="resources/css/style.css">

  
  @vite('resources/css/app.css')
  @vite('resources/css/style.css')

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://right-distinct.tailwindui.com/script.js" data-site="SOXJJCZQ" data-auto="false" defer=""></script>
  <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
  <script type="module" src="https://tailwindui.com/build/assets/app-9780190a.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />

 <style>
 body {
    background-color: #F3F4F6 !important;
}

 </style>



    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/Busqueda.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
         
                <a class="navbar-brand " href="{{ url('/') }}">
                       
            <?php
        include 'images/IPUC Llanaditas Amarillo y azul.svg'
        ?>
        
                </a>
                          
      <div class="hidden md:block  grid grid-cols-3 gap-4 font-semibold ">
      <a class="text-gray-800 hover:text-gray-600 mx-4 hover:bg-slate-100 p-2 rounded " href="#">Inicio</a>
        <a class="text-gray-800 hover:text-gray-600 mx-4 " href="#">Membresia</a>
        <a class="text-gray-800 hover:text-gray-600 mx-4" href="#">Contaduria</a>
        <a class="text-gray-800 hover:text-gray-600" href="#">Directivas</a>

</div>

       <div class="relative h-12 w-50 ...">
       <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class=" absolute inset-y-0 right-10 w-35 text-dark font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center   " type="button">
       <!--avatar-->
       <p class="text-gray-800 hover:text-gray-600 m-2 font-semibold" >{{ Auth::user()->name }}</p>
       <img class="w-10 h-10 rounded-full" src="/images/Ellipse 3.png" alt="Rounded avatar">
       <svg class="w-4 h-4 left-20 m-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class=" py-2 text-sm text-gray-700 dark:text-gray-700" aria-labelledby="dropdownDefaultButton">
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white ">Dashboard</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
      </li>
      <li>
        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
      </li>
      <li>
        
        <form action="{{ route('logout') }}" method="POST" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
        @csrf

    <button type="submit">Cerrar sesión</button>
</form>
      </li>
    </ul>
</div>
       </div>


          
        <!-- aqui viene el animado-->
      
  <button type="button" class="inline-flex items-center gap-x-1 text-sm font-semibold leading-6 text-gray-900" aria-expanded="false">
   

         <!-- aqui viene el animado-->


    <div class="md:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
      <a class="text-gray-800 hover:text-gray-600 mx-4 " href="#">Membresia</a>
        <a class="text-gray-800 hover:text-gray-600 mx-4" href="#">Contaduria</a>
        <a class="text-gray-800 hover:text-gray-600" href="#">Directivas</a>
      </div>
</div>
</div>
</div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    </ul>
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
       

            <main class="py-4">
                @yield('content')
            </main>
        </div>
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

</body>
<script>
    // Obtener el botón y el menú
    const button = document.querySelector('.relative button');
    const menu = document.querySelector('.relative div');

    // Agregar un evento al botón
    button.addEventListener('click', () => {
    // Cambiar el estado del atributo aria-expanded
    const expanded = button.getAttribute('aria-expanded') === 'true' || false;
    button.setAttribute('aria-expanded', !expanded);
    
    // Mostrar u ocultar el menú
    if (expanded) {
        menu.classList.add('opacity-0', 'translate-y-1');
        menu.classList.remove('opacity-100', 'translate-y-0');
    } else {
        menu.classList.add('opacity-100', 'translate-y-0');
        menu.classList.remove('opacity-0', 'translate-y-1');
    }
    });

    </script>
    
</html>
