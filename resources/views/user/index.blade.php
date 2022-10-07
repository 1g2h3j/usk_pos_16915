@extends('layouts.main')

@section('title', 'User')

@section('headscript')

@section('header', 'Data User')

@section('content')
<div class="card">
    <div class="card-header">
        <buttton class="btn btn-success">Tambah <i class="fas fa-plus"></i></buttton>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Level</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $data)
                <tr>
                    <td>{{ $data->id_user }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->nama_user }}</td>
                    <td>{{ $data->level }}</td>
                    <td>
                        <button type="button" class="btn btn-warning">Edit <i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-danger">Delete <i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
                </tfoot>
        </table>
    </div>
</div>
@endsection

@section('footscript')
