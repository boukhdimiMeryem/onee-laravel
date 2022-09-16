<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard ') }}
        </h2>
    </x-slot>

     <div class="w-max cursor-pointer px-4 py-2 text-white font-bold rounded shadow-md bg-blue-600 hover:bg-blue-800 hover:shadow-lg">
        <a class="my-5 mx-5" href="{{ url('/dashboard') }}" title="Back"><button > Back</button></a>
                        
    </div>

<form class="rounded-lg shadow-md p-4 flex flex-col space-y-2 items-center justify-items-center" action="{{ route('store') }}" method="POST">
    @csrf
    
    <div  class="flex flex-col">
        <label for="ic">IC</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="ic">
        @error('ic')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="titre">Titre</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="titre">
            @error('titre')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="code_nm">Code NM</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="code_nm">
            @error('code_nm')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="version_nm">Version NM</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="version_nm">
            @error('version_nm')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="origine">Origine</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="origine">
            @error('origine')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="version_originale">Version Originale</label>
        <input class="p-2 rounded  border-2 border-gray-300" type="text" name="version_originale">
            @error('version_originale')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="w-max cursor-pointer px-4 py-2 text-white font-bold rounded shadow-md bg-green-500 hover:bg-green-600 hover:shadow-lg">
        <button type="submit">submit</button>
    </div>


</form>

</x-app-layout>