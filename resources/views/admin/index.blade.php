@extends('layouts.main')

@section('title', 'User')

@section('headscript')

@section('header', 'Data User')

@section('content')
{{-- <table class="table table-hover">
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
    </tbody>
    @endforeach
</table> --}}

<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
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
    <!-- /.card-body -->
</div>
@endsection

@section('footscript')
