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
   @include('modal.membre')




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


