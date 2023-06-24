
<div class="relative overflow-x-auto  sm:rounded-b-lg " >
    <div class="flex items-center justify-between pb-4  ">
    <div class="grid grid-cols-6 gap-2   ">

<div class="col"><h3 class="text-2xl mt-2">Membresia</h3></div>
<div class="col"></div>
<div class="col"></div>
        <label for="table-search  "  class="sr-only " style="" >Search</label>
        <div class="relative mt-2">
            <div class="absolute inset-y-0 left-7 flex items-center pl-3 pointer-events-none relative  ">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400 absolute  inset-y-0 right-0 mt-2  " aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
            </div>
            <input type="text" id="table-search-users" class="block p-2 text-sm text-gray-900 w-60 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500" style="width: 167px; border-radius: 20px; border: none !important; background: #D9D9D9;" placeholder="Search" onkeyup="buscarMembresia()">

        </div>
<div class="col"></div>

            <a href="{{ route('membresia.create') }}" class="  inline-flex items-center text-gray-900 bg-white     font-medium rounded-b-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-900  dark:hover:bg-gray-700  " type="button">
                <span class="sr-only text-blue-700">Action button</span>
                <p class="text-blue-700">Add</p> 
                <svg class="m-2" width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6528 24.9042C20.2678 24.9042 25.64 19.5703 25.64 12.9787C25.64 6.38711 20.2678 1.05316 13.6528 1.05316C7.0378 1.05316 1.66565 6.38711 1.66565 12.9787C1.66565 19.5703 7.0378 24.9042 13.6528 24.9042Z" stroke="#3464B0" stroke-width="2"/>
<path d="M12.9281 16.9668V9.46675H14.2008V16.9668H12.9281ZM9.81448 13.8531V12.5804H17.3145V13.8531H9.81448Z" fill="#3464B0"/>
</svg>
</a>
            <!-- Dropdown menu -->
            <div id="dropdownAction" class="z-10 p-2 hidden bg-white divide-y divide-gray-100 rounded-b-lg  w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                    </li>
                    
                </ul>
                <div class="py-1">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                </div>
            </div>
        </div>
</div>

       
    </div>
    <hr>
    <div  id="table-container" >
    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400" id="membresia-table" >
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
        </thead>
        <tbody>
            @foreach($memberships as $member)
            <tr class="bg-white    dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="/images/Ellipse 3.png" alt="Rounded avatar">
                    <div class="pl-3" >
                        <div class="text-base  text-gray-700 font-semibold" >{{$member['name']}} {{$member['l_name']}}  </div>
                        <div class="font-normal text-gray-500">Edad: {{$member['age']}}</div>

                    </div>  
                </th>
                
                <td class="px-6 py-4">
                <div class="font-normal  text-gray-700 font-semibold">    @if($member['bir_date'])
                    Bautizado
                @else
                    No bautizado
                @endif</div>
                        <div class="font-normal text-gray-500">{{$member['bir_date']}}</div>
                </td>

                <td class="px-6 py-4">
                <div class="font-normal  text-gray-700 font-semibold">Espiritu Santo</div>
                        <div class="font-normal text-gray-500">{{$member['h_spirit']}}</div>
                </td>
                
                
                <td class="px-6 py-4">
                <div class="font-normal  text-gray-700 font-semibold">{{$member['directive']}}</div>
                        <div class="font-normal text-gray-500">{{$member['position']}}</div>
                </td>
                <!--Boton del modal-->
                <td class="px-6 py-4">
                    <a href="{{ route('membresia.edit', $member['id']) }}" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" 
                    data-modal-target="authentication-modal"  type="button">
                    Edit </a>
                </td>
                <!--Inicio del modal-->
 
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
</div>

<div class="flex flex-col items-center">
  <div id="pagination-buttons" class="inline-flex mt-2 xs:mt-0">
    <!-- Buttons -->
    <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" onclick="cargarTabla(currentPage - 1)">
        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>
        Prev
    </button>
    <button class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 border-0 border-l border-gray-700 rounded-r hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" onclick="cargarTabla(currentPage + 1)">
        Next
        <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
</div>

    <!--aqui finaliza la tabla -->
<script>
   function buscarMembresia() {
    var searchString = document.getElementById('table-search-users').value;
    var table = document.getElementById('membresia-table');
    fetch('http://127.0.0.1:8000/buscar-membresia?search=' + searchString)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
           
            var paginationButtons = document.getElementById('pagination-buttons');

            table.innerHTML = '';
            paginationButtons.innerHTML = '';

            var maxResults = 6; // Establecer el número máximo de resultados a mostrar
            var counter = 0; // Contador para controlar el número de resultados mostrados

            data.forEach(member => {
                if (counter < maxResults) {
                    var row = table.insertRow();
                    var nameCell = row.insertCell();
                    var ageCell = row.insertCell();
                    var editCell = row.insertCell();

                    var chrisDate = convertDateToISO(member.chris_date);
                    var age = calculateAge(chrisDate);

                    nameCell.innerHTML = `
                        <div id="table-container">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400" id="membresia-table">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <!-- Encabezados de la tabla -->
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white" style='width: 234px;'>
                                            <img class="w-10 h-10 rounded-full" src="/images/Ellipse 3.png" alt="Rounded avatar">
                                            <div class="pl-3">
                                                <div class="text-base text-gray-700 font-semibold">${member.name} ${member.l_name}</div>
                                                ${member['bir_date'] ? `<div class="font-normal text-gray-500"> Edad: ${age}</div>` : `<div class="text-gray-500">-</div>`}
                                            </div>
                                        </th>
                                        <td class="px-6 py-4">
                                            <div class="font-normal text-gray-700 font-semibold">
                                                ${member['bir_date'] ? 'Bautizado' : 'No bautizado'}
                                            </div>
                                            <div class="font-normal text-gray-500">${member['bir_date']}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="font-normal text-gray-700 font-semibold">Espiritu Santo</div>
                                            <div class="font-normal text-gray-500">${member['h_spirit']}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="font-normal text-gray-700 font-semibold">${member['directive']}</div>
                                            <div class="font-normal text-gray-500">${member['position']}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded">Editar</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    `;
                    counter++;
                }
            });

            var totalCount = data.length; // Obtener el número total de resultados encontrados
            updatePageCount(totalCount); // Actualizar el contador de páginas
        })
        .catch(error => {
            console.error('Error en la solicitud:', error);
        });
}

// Función para actualizar el contador de páginas
function updatePageCount(totalCount) {
    var maxResults = 6; // Establecer el número máximo de resultados por página
    var pageCount = Math.ceil(totalCount / maxResults); // Calcular el número de páginas
    var paginationButtons = document.getElementById('pagination-buttons');

    paginationButtons.innerHTML = '';

    for (var i = 1; i <= pageCount; i++) {
        var button = document.createElement('button');

        button.textContent = i;
        button.addEventListener('click', function () {
            cargarTabla(this.textContent);
        });
        paginationButtons.appendChild(button);
    }
}

function convertDateToISO(dateString) {
  var parts = dateString.split('/');
  if (parts.length === 3) {
    var day = parts[0];
    var month = parts[1];
    var year = parts[2];
    var isoDate = year + '-' + month + '-' + day;
    return isoDate;
  }
  return null;
}
function borrarBusqueda() {
    document.getElementById('table-search-users').value = '';
    cargarTabla(1); // Cargar la tabla desde la primera página
}
function calculateAge(birthDate) {
  var birDateParts = birthDate.split('-');
  var birthDateObj = new Date(birDateParts[0], birDateParts[1] - 1, birDateParts[2]);
  var today = new Date();
  var age = today.getFullYear() - birthDateObj.getFullYear();
  return age;
}

function applyTailwindStyles(element) {
  element.classList.add('text-sm', 'text-gray-500', 'dark:text-gray-400');
}

// Paginador 
// Variables globales
var currentPage = 1; // Página actual
var itemsPerPage = 6; // Cantidad de elementos por página

// Función para cargar la tabla según la página actual
function cargarTabla(page) {
  var tableContainer = document.getElementById('table-container');
  var startIndex = (page - 1) * itemsPerPage;
  var endIndex = startIndex + itemsPerPage;

  // Obtener los elementos de la tabla a mostrar en la página actual
  var tableRows = Array.from(tableContainer.getElementsByTagName('tr'));

  // Ocultar todos los elementos de la tabla
  tableRows.forEach(row => {
    row.style.display = 'none';
  });

  // Mostrar solo los elementos de la página actual
  var currentPageRows = tableRows.slice(startIndex, endIndex);
  currentPageRows.forEach(row => {
    row.style.display = 'table-row';
  });

  // Actualizar la página actual
  currentPage = page;

  // Actualizar los botones de paginación
  actualizarBotonesPaginacion();
}

// Función para actualizar los botones de paginación
function actualizarBotonesPaginacion() {
  var paginationButtons = document.getElementById('pagination-buttons');

  // Limpiar los botones existentes
  paginationButtons.innerHTML = '';

  // Calcular el número total de páginas
  var tableContainer = document.getElementById('table-container');
  var totalItems = tableContainer.getElementsByTagName('tr').length;
  var totalPages = Math.ceil(totalItems / itemsPerPage);

  // Crear botones de paginación
  for (var i = 1; i <= totalPages; i++) {
    var button = document.createElement('button');
    button.innerText = i;
    button.className = 'inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-gray-800 rounded-l hover:bg-gray-900 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white';
    button.addEventListener('click', function() {
      cargarTabla(parseInt(this.innerText));
    });
    paginationButtons.appendChild(button);
  }
}

// Cargar la tabla inicialmente con la página 1
cargarTabla(1);

</script>