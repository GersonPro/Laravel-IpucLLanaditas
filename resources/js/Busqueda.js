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
