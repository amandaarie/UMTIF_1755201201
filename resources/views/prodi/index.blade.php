@extends('layouts.app')
@section('title','Prodi Page')
@section('bread1','Program Studi')
@section('bread2','Data')
@section('content')
    <h3>Master Data Program Studi</h3>
    <table class="table table-striped" id="prodi-table">
        <thead>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
            <tr>
                <th>No</th>
                <th>Kode Prodi</th>
                <th>Nama Prodi</th>
                <th>Kaprodi</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <script>
            $(function () {
        
            var table = $('prodi-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('prodi.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'kode_prodi', name: 'kode_prodi'},
                {data: 'nama_prodi', name: 'nama_prodi'},
                {data: 'kaprodi', name: 'kaprodi'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
    </script>
@endsection