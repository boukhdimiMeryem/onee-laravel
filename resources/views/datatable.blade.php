<x-app-layout>
    <x-slot name="header">
        <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"-->
        <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap5.min.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container mt-5">
                        <h2 class="nb-4">Datatable</h2>
                        <table class="table table-bordered myTable">
                            <thead>
                                <tr>
                                    <th class="text-center" >IC</th>
                                    <th class="text-center">Code NM</th>
                                    <th class="text-center" width=50px>Version NM</th>
                                    <th class="text-center" width="500px">Titre</th>
                                    <th class="text-center">Origine</th>
                                    <th class="text-center" width=10px>Version Originale</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                    <script>src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
                    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
                    <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
                    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        
                    <script type=text/javascript>
                        $(document).ready(function(){

                        //fill_datatable();

                    
                            var dataTable = $('.myTable').DataTable({
                                processing: true,
                                serverSide: true,
                                fixedHeader: true,
                                paging:true,
                                ajax: "{{ route('normes.index') }}",
                                columns: [
                                    {
                                        data:'IC',
                                        name:'IC'
                                    },
                                    {
                                        data:'Code NM',
                                        name:'Code NM'
                                    },
                                    {
                                        data:'Version NM',
                                        name:'Version NM'
                                    },
                                    {
                                        data:'Origine',
                                        name:'Origine'
                                    },
                                    {
                                        data:'Version Originale',
                                        name:'Version Originale'
                                    },
                                    {
                                        data:'action',
                                        name:'action',
                                        orderable:true,
                                        searchable:true
                                    },
                                ]
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 