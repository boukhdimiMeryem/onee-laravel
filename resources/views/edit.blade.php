<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard ') }}
        </h2>
    </x-slot>

    {{-- <div class="w-max cursor-pointer px-4 py-2 text-white font-bold rounded shadow-md bg-blue-600 hover:bg-blue-800 hover:shadow-lg">
        <a href="{{ url('/dashboard/normes') }}" title="Back"><button > Back</button></a>
                        
    </div> --}}

    <form class="rounded-lg shadow-md p-4 flex flex-col space-y-2 items-center justify-items-center"
        action="{{ route('update', ['norme' => $norme->id]) }}" method="POST">
        @method('PUT')
        @csrf


        <div class="flex justify-left"  >
            <div class="mt-4">
                <x-label for="role_id" class="mb-2 " value="{{ __('IC') }}" />
                <input value="{{ $norme->ic }}"
                    class="rounded-md mr-7 shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 "
                    type="text" name="ic">
                @error('ic')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="role_id" class="mb-2" value="{{ __('Titre') }}" />
                <input value="{{ $norme->titre }}" size="77"
                    class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 "
                    type="text" style="overflow:scroll;a" name="titre">
                @error('titre')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            
        </div>
        <div class="flex justify-right">
            <div class="mt-4">
                <x-label for="role_id" class="mb-2" value="{{ __('Code NM') }}" />
                <input value="{{ $norme->code_nm }}"
                    class="mb-2 mr-5 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 "
                    type="text" name="code_nm">
                @error('code_nm')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="role_id" class="mb-2" value="{{ __('Version NM') }}" />
                <input value="{{ $norme->version_nm }}"
                    class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 "
                    type="text" name="version_nm">
                @error('version_nm')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="role_id" class="mb-2" value="{{ __('Origine') }}" />
                <input value="{{ $norme->origine }}"
                    class="mb-2  mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="origine">
                @error('origine')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="role_id" class="mb-2" value="{{ __('Version Originale') }}" />
                <input value="{{ $norme->version_originale }}" style="text-align:left"
                    class="mb-2  mr-5 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="version_originale">
                @error('origine')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
        </div>




        {{-- <div  class="flex flex-col ">
        <label for="ic">IC</label>
        <input  value="{{$norme->ic}}" class="p-2 rounded border-2 border-gray-300" type="text" name="ic">
        @error('ic')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="code_nm">Code NM</label>
        <input  value="{{$norme->code_nm}}" class="p-2 rounded  border-2 border-gray-300" type="text" name="code_nm">
            @error('code_nm')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="version_nm">Version NM</label>
        <input  value="{{$norme->version_nm}}" class="p-2 rounded  border-2 border-gray-300" type="text" name="version_nm">
            @error('version_nm')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="titre">Titre</label>
        <input value="{{$norme->titre}}" class="p-2 rounded  border-2 border-gray-300" type="text" name="titre">
            @error('titre')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    
    
    <div class="flex flex-col">
        <label for="origine">Origine</label>
        <input value="{{$norme->origine}}" class="p-2 rounded  border-2 border-gray-300" type="text" name="origine">
            @error('origine')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div>
    <div class="flex flex-col">
        <label for="version_originale">Version Originale</label>
        <input value="{{$norme->version_originale}}" class="p-2 rounded  border-2 border-gray-300" type="text" name="version_originale">
            @error('version_originale')
            <div class="text-red-500 text-xs">{{ $message }}</div>
        @enderror
    </div> --}}
        <div
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
            <button type="submit">Update</button>
        </div>


    </form>

</x-app-layout>
