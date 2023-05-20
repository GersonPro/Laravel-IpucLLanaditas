<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/app.css">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://right-distinct.tailwindui.com/script.js" data-site="SOXJJCZQ" data-auto="false" defer=""></script>
  <script src="https://cdn.paddle.com/paddle/paddle.js"></script>
  <script type="module" src="https://tailwindui.com/build/assets/app-9780190a.js"></script>

</head>
<body class="bg-gradient-to-r from-gray-800 via-blue-900 to-gray-800">

@include('nav.nav')
<div class="container mx-auto px-4 my-3 bg-white">
<div class="container mx-auto">
  <div class="mt-10">
    <ul class="flex border-b">
      <li class="-mb-px mr-1">
        <a class="bg-white inline-block border-l border-t border-r rounded-t py-2 px-4 text-blue-700 font-semibold" href="#">Lista de Creyentes</a>
      </li>
      <li class="mr-1">
        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Ofrendas Mes</a>
      </li>
      <li class="mr-1">
        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Niños Presentados</a>
      </li>
      <li class="mr-1">
        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Directivas</a>
      </li>
      <li class="mr-1">
        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="#">Evento Directivas</a>
      </li>
    </ul>
  </div>
</div>
<div class="mt-4 pb-4">
        <div class="tab1 tab-content active">
        <table class="border-collapse table-fixed w-full text-sm">
      <thead class="bg-white   h-3">
        <tr>
          <th class="border-b dark:border-slate-900 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left"><b>#</b></th>
          <th class="border-b dark:border-slate-900 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Nombres</th>
          <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Apellidos</th>
          <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Edad</th>
          <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Bautizado</th>
        </tr> <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Promesa</th>
        <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Feecha de bautizado</th>
        <th class="border-b dark:border-slate-900 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-900 text-left">Fecha Rec. Esp Santo</th>
      </thead>
      <tbody class="bg-white dark:bg-slate-100">
        <tr>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 pl-8 text-slate-500 dark:text-slate-700">The Sliding Mr. Bones (Next Stop, Pottersville)</td>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 text-slate-500 dark:text-slate-700">Malcolm Lockyer</td>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 pr-8 text-slate-500 dark:text-slate-700">1961</td>
        </tr>
        <tr>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 pl-8 text-slate-500 dark:text-slate-700">Witchy Woman</td>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 text-slate-500 dark:text-slate-700">The Eagles</td>
          <td class="border-b border-slate-100 dark:border-slate-300 p-4 pr-8 text-slate-500 dark:text-slate-700">1972</td>
        </tr>
        <tr>
          <td class="border-b border-slate-200 dark:border-slate-300 p-4 pl-8 text-slate-500 dark:text-slate-700">Shining Star</td>
          <td class="border-b border-slate-200 dark:border-slate-300 p-4 text-slate-500 dark:text-slate-700">Earth, Wind, and Fire</td>
          <td class="border-b border-slate-200 dark:border-slate-300 p-4 pr-8 text-slate-500 dark:text-slate-700">1975</td>
        </tr>
      </tbody>
    </table>
        </div>


</div>
</div>

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