<x-app-layout>
    <x-slot name="header">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> --}}


        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('NORMES ') }}
        </h2>
    </x-slot>



    {{-- <div class="container max-w-7xl mx-auto mt-8">
        <div class="mb-4">
            <div  class="flex flex-col mx-7 ">
                <label for="ic">Search: </label>
                <input  value="" class=" w-64 rounded border-2 border-gray-300" type="text" name="ic">
                
            </div>
            
            <div class="flex justify-end">
                <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">
                    <a href="{{ route('create') }}">Create Norm</a>
                </button>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <table class="table table-bordered myTable">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t  border-b border-gray-200 bg-gray-50">
                                    IC </th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t border-b border-gray-200 bg-gray-50">
                                    Code NM</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t border-b border-gray-200 bg-gray-50">
                                    Version NM</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t border-b border-gray-200 bg-gray-50">
                                    Titre</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t border-b border-gray-200 bg-gray-50">
                                    Origine</th>
                                <th
                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-t border-b border-gray-200 bg-gray-50">
                                    Version Originale</th>
                                <th class="px-6 py-3 text-sm text-left text-gray-500 border-t border-b border-gray-200 bg-gray-50"
                                    colspan="3">
                                    Action</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            @foreach ($normes as $norme)
                                <tr>
                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="flex items-center">
                                            {{ $norme->ic }}
                                        </div>

                                    </td>

                                    <td class="px-4 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div>{{ $norme->code_nm }}</div>
                                    </td>

                                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div>{{ $norme->version_nm }}</div>
                                    </td>

                                    <td class=" py-4 whitespace-no-wrap border-b border-gray-200">
                                        <div class="text-sm leading-5 text-gray-900"> {{ $norme->titre }}</div>
                                    </td>

                                    <td
                                        class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        <span>{{ $norme->origine }}</span>
                                    </td>

                                    <td
                                        class="px-1 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                                        <span>{{ $norme->version_originale }}</span>
                                    </td>

                                    {{-- <td
                                        class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                            </svg>
                                        </a>

                                    <td
                                        class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                                        <a href="#" class="text-gray-600 hover:text-gray-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>

                                    </td>

                                    </td>
                                    <td
                                        class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 text-red-600 hover:text-red-800" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg></a>

                                    </td> 

                                    <td class="flex space-x-2 px-5 py-5 border-b border-gray-200 bg-white text-sm ">

                                        <button
                                            class="cursor-pointer p-2 rounded shadow-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><a
                                                href="{{ route('edit', $norme->ic) }}"
                                                style="color: #fff">Edit</a></button>
    
                                        <form action="{{ route('destroy', $norme->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="cursor-pointer p-2 rounded shadow-md bg-red-500 hover:bg-red-600 hover:shadow-lg" >
                                                Delete
                                            </button>
                                        </form>
    
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script> 


            <script type=text/javascript>
                $(function(){                    
                    var dataTable = $('.myTable').DataTable();
                });
            </script>
            </div>
        </div>
    </div> --}}

    {{-- debut --}}


    @extends('welcome')
    {{-- @section('content') --}}
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="flex justify-center px-3 pt-5 mx-10 mb-5 border-bottom ">
                
                    <form action="{{ url('/dashboard/search') }} " type="get">
                        <label for="ic_search" class="ml-20 mb-3">Recherche Avancée</label>
                        <br>
                        <input type="text" name="ic_query" placeholder="sasissez le ic" size="60" class="ml-1 mt-2 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <br>
                        <label for="codeNM_search"></label>
                        <input type="text" name="codeNM_query" placeholder="sasissez le code nm" size="60" class=" my-4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                                
                        <button class=" btn btn-outline-success my-2 my-sm-0 ml-20 text-white bg-green-600 " type="submit">Search</button>
                        <br>
                    </form>
            </div>
            <div class="flex justify-left ml-10 ">
               
                <button class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">
                    <a href="{{ route('create') }}">Create Norm</a>
                </button>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="container ">
                    {{-- <h2 class="nb-4">Datatable</h2> --}}
                    <table class="table table-bordered myTable">
                        <thead>
                            <tr>
                                <th class="text-center">IC</th>
                                <th class="text-center">Code NM</th>
                                <th class="text-center">Version NM</th>
                                <th class="text-center ">Titre</th>
                                <th class="text-center">Origine</th>
                                <th class="text-center ">Version Originale</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normes as $norme)
                                <tr>
                                    <td>{{ $norme->ic }}</td>
                                    <td>{{ $norme->code_nm }}</td>
                                    <td>{{ $norme->version_nm }}</td>
                                    <td class="mx-15 " style="overflow:scroll">{{ $norme->titre }}</td>
                                    <td>{{ $norme->origine }}</td>
                                    <td class="mx-3 text-center my-3">{{ $norme->version_originale }}</td>
                                    <td class="pt-3 px-5 text-center">

                                        <button class=" my-1 mx-3">
                                            <a href="{{ route('edit', $norme->id) }}" >
                                                
<svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="40px" height="40px"><path fill="#E57373" d="M42.583,9.067l-3.651-3.65c-0.555-0.556-1.459-0.556-2.015,0l-1.718,1.72l5.664,5.664l1.72-1.718C43.139,10.526,43.139,9.625,42.583,9.067"/><path fill="#FF9800" d="M4.465 21.524H40.471999999999994V29.535H4.465z" transform="rotate(134.999 22.469 25.53)"/><path fill="#B0BEC5" d="M34.61 7.379H38.616V15.392H34.61z" transform="rotate(-45.02 36.61 11.385)"/><path fill="#FFC107" d="M6.905 35.43L5 43 12.571 41.094z"/><path fill="#37474F" d="M5.965 39.172L5 43 8.827 42.035z"/></svg>    
                                            </a>
                                        </button>
                                        {{-- cursor-pointer p-2 rounded shadow-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg --}}
                                        <form action="{{ route('destroy', $norme->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button type="submit"  class=" my-3">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-6 h-6 text-red-600 hover:text-red-800" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <script type="text/javascript"
                    src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
                <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>


                <script type=text/javascript>
                    $(function() {
                        var dataTable = $('.myTable').DataTable();
                    });
                </script>
            </div>
        </div>

    </div>
    {{-- @endsection --}}

    {{-- fin --}}


</x-app-layout>
