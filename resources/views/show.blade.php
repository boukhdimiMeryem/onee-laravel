@extends('welcome')
@section('content')
    <div class="flex flex-col ">
        <div class="display:block ml-40 ">
            <div class="mt-4">
                <x-label for="role_id" class="mb-2 " value="{{ __('Titre') }}" />
                <input value="{{ $norme->titre }}" size="80"
                    class="input-field mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50 style-overflow-scroll" 
                    type="text" style="overflow:scroll" name="titre">
                <br>
            </div>
            <div class="mt-4">
                <x-label for="role_id" class="mb-2 " value="{{ __('IC') }}" />
                <input value="{{ $norme->ic }}"  size="80"
                    class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="titre">
            </div>
            <br>

            <div class="mt-4">
                <x-label for="role_id" class="mb-2 " value="{{ __('Version NM') }}" />
                <input value="{{ $norme->version_nm }}" size="80"
                    class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50"
                    type="text" name="titre">
            </div>
            <div class=" display:block">
                <div class="mt-4">

                    <x-label for="role_id" class="mb-2 " value="{{ __('Code NM') }}" />
                    <input value="{{ $norme->code_nm }}" size="80"
                        class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50"
                        type="text" name="titre">
                    <br>
                </div>
                <div class="mt-4">

                    <x-label for="role_id" class="mb-2 " value="{{ __('Version Originale') }}" />
                    <input value="{{ $norme->version_originale }}" size="80"
                        class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                        focus:ring-indigo-200 focus:ring-opacity-50"
                        type="text" name="titre">
                    <br>
                </div>
                <div class="mt-4">

                    <x-label for="role_id" class="mb-2 " value="{{ __('Origine') }}" />
                    <input value="{{ $norme->origine }}" size="80"
                        class="mb-2 mr-7 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring
                    focus:ring-indigo-200 focus:ring-opacity-50"
                        type="text" name="titre">
                </div>
            </div>
        </div>
    </div>
    @endsection
