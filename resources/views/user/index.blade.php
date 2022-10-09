@extends('layouts.main')

@section('title', 'User')

@section('headscript')

@section('header', 'Data User')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body pt-1">
                <div class="card-header p-0">
                    <h4>Tambah Data User</h4>
                    <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
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
                                <a href="{{ url('/user/'.$data->id_user.'/edit') }}" class="btn btn-warning mr-2">Edit
                                    <i class="fas fa-edit"></i></a>
                                <a href="{{ url('/user/'.$data->id_user.'/delete') }}" class="btn btn-danger">Delete <i
                                        class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footscript')
