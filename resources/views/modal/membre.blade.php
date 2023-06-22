
<div class="relative overflow-x-auto  sm:rounded-b-lg">
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

            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="  inline-flex items-center text-gray-900 bg-white     font-medium rounded-b-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-900  dark:hover:bg-gray-700  " type="button">
                <span class="sr-only text-blue-700">Action button</span>
                <p class="text-blue-700">Add</p> 
                <svg class="m-2" width="27" height="28" viewBox="0 0 27 28" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M13.6528 24.9042C20.2678 24.9042 25.64 19.5703 25.64 12.9787C25.64 6.38711 20.2678 1.05316 13.6528 1.05316C7.0378 1.05316 1.66565 6.38711 1.66565 12.9787C1.66565 19.5703 7.0378 24.9042 13.6528 24.9042Z" stroke="#3464B0" stroke-width="2"/>
<path d="M12.9281 16.9668V9.46675H14.2008V16.9668H12.9281ZM9.81448 13.8531V12.5804H17.3145V13.8531H9.81448Z" fill="#3464B0"/>
</svg>
 </button>
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
    <div >
    <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400" id="membresia-table">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            
        </thead>
        <tbody>
            @foreach($memberships as $member)
            <tr class="bg-white    dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                
                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                <img class="w-10 h-10 rounded-full" src="/images/Ellipse 3.png" alt="Rounded avatar">
                    <div class="pl-3">
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
                    <a href="#" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" 
                    data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                    Edit </a>
                </td>
                <!--Inicio del modal-->
                
<!-- Main modal -->
<div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full modal">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-gray-700" data-modal-hide="authentication-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-gray-700">Actualizar Datos</h3>
                <form class="space-y-6" action="#">
                 
                </form>
            </div>
        </div>
    </div>
</div> 

                <!-- Fin del Modal-->
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
</div>
    <!--aqui finaliza la tabla -->
<script>
    function buscarMembresia() {
  var searchString = document.getElementById('table-search-users').value;

  fetch('http://127.0.0.1:8000/buscar-membresia?search=' + searchString)
      .then(response => {
          if (!response.ok) {
              throw new Error('Error en la solicitud: ' + response.status);
          }
          return response.json();
      })
      .then(data => {
          var table = document.getElementById('membresia-table');

          table.innerHTML = '';

          data.forEach(member => {
              var row = table.insertRow();
              var nameCell = row.insertCell();
              var ageCell = row.insertCell();
              var editCell = row.insertCell();

              var chrisDate = convertDateToISO(member.chris_date);
              var age = calculateAge(chrisDate);

              nameCell.innerHTML = `
                  <table class=" w-full text-sm text-left text-gray-500 dark:text-gray-400" id="membresia-table">
                  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                          <!-- Encabezados de la tabla -->
                      </thead>
                      <tbody>
                      <tr class="bg-white    dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                      <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white" style='width: 234px;'>                                    <img class="w-10 h-10 rounded-full" src="/images/Ellipse 3.png" alt="Rounded avatar">
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
                                  <div class="font-normal text-gray-700 font-semibold">Espíritu Santo</div>
                                  <div class="font-normal text-gray-500">${member['h_spirit']}</div>
                              </td>
                              <td class="px-6 py-4">
                                  <div class="font-normal text-gray-700 font-semibold">${member['directive']}</div>
                                  <div class="font-normal text-gray-500">${member['position']}</div>
                              </td>
                              
                          </tr>
                          
                      </tbody>
                  </table>
              `;

              editCell.className = 'px-6 py-4';
              editCell.innerHTML = `
  <td class="px-6 py-4">
  <a href="#" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" 
                    data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button">
                    Edit </a>
                </td>
`;

              applyTailwindStyles(nameCell);
              applyTailwindStyles(ageCell);
              applyTailwindStyles(editCell);
          });
      })
      .catch(error => {
          console.error('Error:', error);
      });
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

</script>