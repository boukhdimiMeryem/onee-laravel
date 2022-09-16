<table id="example" class="table table-striped" style="width:100%">
    <thead>
        <tr>
            <th>titre</th>
            <th>ic</th>
            <th>Origine</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($normes as $item)
        <tr>

            <td>{{$item->Titre}}</td>
            <td>{{$item->IC}}</td>
            <td>{{$item->Origine}}</td>
            <td><a href="{{route('show',$item->IC)}}">voir</a></td>
        </tr>
        @endforeach
        {{-- <tfoot>
            {{$normes->links()}}
        </tfoot> --}}
    </tbody>
 
</table>