@extends('layouts.app')
@section("title",'Prodi page')
@section("bread1",'Program studi')
@section("bread2",'data')

@section('content')
    <h2> Master data Program Studi </h2>
    <p><a href="/mhs/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    
    <table class="table table-striped" id="mhs-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode prodi</th>
                <th>Nama prodi</th>
                <th>kaprodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
            <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item->kode_prodi }}</td>
            <td>{{ $item->nama_prodi }}</td>
            <td>{{ $item->kaprodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection