<!doctype html>
<html>
<head>
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

</head>
<body class="fondo-image">

<div class="grid grid-cols-2 gap-4 ">

<section class="bg-white">
  <div class="flex flex-col items-center justify-center py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 ">
      <?php
        include 'images/IPUC Llanaditas Amarillo y azul.svg'
        ?>   
      </a>
      <div class="w-full bg-white rounded-lg   md:mt-0 sm:max-w-md xl:p-0 ">
          <div class=" space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-3xl text-center">
              Iniciar sesión
              </h1>
              <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}">
                      @csrf

                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo Electronico</label>
                      <input type="email" value="{{ old('email') }}" name="email" id="email" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-400 block w-full p-2.5 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="" autocomplete="email">
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class=" border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="flex items-center h-5">
                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                          </div>
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-800 dark:text-gray-800" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me</label>
                          </div>
                      </div>
                      
                  </div>
                  <button type="submit" class="bg-boton w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Iniciar sesión</button>
                  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                 <div style="
                     justify-content: center;
    position: relative;
    text-align: center;
    width: 15px;
    left: 120px;
}">
                
                  <?php 
        include 'images/Decom Amarillo.svg'
        ?>   </div>
         
              </form>
          </div>
      </div>
  </div>
</section>


<section class="">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 justify-center opacity">
 
      <?php
        include 'images/Group.svg'
        ?>   
       <br>
      <?php
        include 'images/permance.svg'
        ?>   
  </div>
  </section>
</div>
</div>
</body>
</html>