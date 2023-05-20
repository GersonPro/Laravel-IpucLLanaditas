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

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>

                </div>
            </div>
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