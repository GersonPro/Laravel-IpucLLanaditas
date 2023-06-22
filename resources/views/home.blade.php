@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          
                <!--
                    inicio de los tabs
                -->
                

                <div class=" relative rounded-t-2xl text-white bg-gradient-to-r from-blue-900 via-blue-700 to-blue-900" style="width: 315px;" >
    <ul class="flex  text-sm font-medium text-center tabs" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2 ml-2 " role="presentation" >
            <button class="inline-block p-2  rounded-t-lg text-white  " id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Membresia</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-2  border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-white " id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Directivas</button>
        </li>
        <li class="mr-2" role="presentation">
            <button class="inline-block p-2  border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 text-white" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Contaduria</button>
        </li>
        
    </ul>
</div>
<div class="card rounded-b-lg relative" style="border-radius: 0px 20px 20px 20px !important; border:none !important;">
<div id="myTabContent" class="rounded-b-lg" style="    border-radius: 0px !important;
" >
<div class="hidden p-4 rounded-b-lg relative  " id="profile" role="tabpanel" aria-labelledby="profile-tab" style="">
      <!-- aqui empieza la tabla Membresia -->  
   
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
                <td class="px-6 py-4">
                    <a href="#" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
</div>
    <!--aqui finaliza la tabla -->






    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
</div>

                    
            

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
    /* Estilo para los tabs activos */
    .tabs button[aria-selected="true"] {
        background-color: white;
        color: #000 !important;
        margin-left: -8px;
        border-radius: 5px 5px 0px 0px;
        width: 128px;
    }

    /* Estilo para la tabla */
    #membresia-table {
        /* Agrega tus estilos personalizados aquí */
    }
    .highlight {
  background-color: yellow;
  font-weight: bold;
}

</style>


