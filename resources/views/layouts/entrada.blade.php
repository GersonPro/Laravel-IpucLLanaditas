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



    <title>{{ config('entrada.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<a class="navbar-brand " href="{{ url('/') }}">
<main class="py-4">
                @yield('content')
            </main>
   
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
