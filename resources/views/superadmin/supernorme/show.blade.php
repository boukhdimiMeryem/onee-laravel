@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">supernorme {{ $supernorme->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/superadmin/supernorme') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/superadmin/supernorme/' . $supernorme->id . '/edit') }}" title="Edit supernorme"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('superadmin/supernorme' . '/' . $supernorme->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete supernorme" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $supernorme->id }}</td>
                                    </tr>
                                    <tr><th> IC </th><td> {{ $supernorme->IC }} </td></tr><tr><th> Code NM </th><td> {{ $supernorme->Code_NM }} </td></tr><tr><th> Version  NM </th><td> {{ $supernorme->Version_ NM }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
