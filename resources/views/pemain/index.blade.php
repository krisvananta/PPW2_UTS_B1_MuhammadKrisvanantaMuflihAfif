@extends('layouts.layout')

@section('content')
<table class="table table-striped table-bordered table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="">No</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">Nomor Punggung</th>
            <th scope="col">Posisi</th>
        </tr>
    </thead>
    <tbody>
        @php
            $rowNumber = 1;
        @endphp
        @foreach ($pemain_data as $pemain)
            <tr>
                <td>{{ $rowNumber++ }}</td>
                <td>{{ $pemain->id }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection