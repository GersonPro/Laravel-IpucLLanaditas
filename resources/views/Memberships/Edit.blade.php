@extends('layouts.app')

@section('content')

<div class="container">
<div class="relative overflow-x-auto  sm:rounded-b-lg " >
    <div class="flex items-center justify-center pb-4 ">
    <div class="grid  gap-6  p-4  rounded-lg relative  bg-white dark:bg-gray-800">

    <h1 class="text-xl font-bold text-gray-700 font-semibold capitalize dark:text-gray-700">Account settings</h1>
    <form>
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-gray-700 dark:text-gray-700 font-semibold" for="username">Username</label>
                
                <input type="text" name="name" class="rounded border-gray-200 w-full mb-4" value="{{ old('name', $member->name) }}">
                {{print_r($member)}}
            </div>

            <div>
                <label class="text-gray-700 font-semibold dark:text-gray-700 " for="emailAddress">Email Address</label>
                <input id="emailAddress" type="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-700 font-semibold" for="password">Password</label>
                <input id="password" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>

            <div>
                <label class="text-gray-700 dark:text-gray-700 font-semibold" for="passwordConfirmation">Password Confirmation</label>
                <input id="passwordConfirmation" type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 font-semibold dark:text-gray-700" for="passwordConfirmation">Select</label>
                <select class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                    <option>Surabaya</option>
                    <option>Jakarta</option>
                    <option>Tangerang</option>
                    <option>Bandung</option>
                </select>
            </div>
            <div>
                <label class="text-gray-700 font-semibold dark:text-gray-700" for="passwordConfirmation">Date</label>
                <input id="date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
            </div>
            <div>
                <label class="text-gray-700 font-semibold dark:text-gray-700" for="passwordConfirmation">Text Area</label>
                <textarea id="textarea" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 font-semibold">
                Image
              </label>
              <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                <div class="space-y-1 text-center">
                  <svg class="mx-auto h-12 w-12 text-gray-700 font-semibold" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                  <div class="flex text-sm text-gray-600">
                    <label for="file-upload" class="relative cursor-pointer bg-gray-800 rounded-md font-medium p-1 text-indigo-200 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                      <span class="">Upload a file</span>
                      <input id="file-upload" name="file-upload" type="file" class="sr-only">
                    </label>
                    <p class="pl-1 text-gray-700 ">or drag and drop</p>
                  </div>
                  <p class="text-xs text-gray-700">
                    PNG, JPG, GIF up to 10MB
                  </p>
                </div>
              </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Save</button>
        </div>
    </form>



</div>
</div></div></div>
@endsection


