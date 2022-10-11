@extends('layouts.main')

@section('title', 'Barang')

@section('headscript')

@section('header', 'Data Barang')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body pt-1">
                <div class="card-header p-0">
                    <h4>Tambah Data Barang</h4>
                    <a href="{{ route('barang.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                </div>
                <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Harga Barang</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $data)
                        <tr>
                            <td>{{ $data->id_barang }}</td>
                            <td>{{ $data->nama_barang }}</td>
                            <td>{{ $data->harga_barang }}</td>
                            <td>{{ $data->stok }}</td>
                            <td>{{ $data->id_kategori }}</td>
                            <td>{{ $data->keterangan }}</td>
                            <td>
                                <a href="{{ url('/barang/'.$data->id_barang.'/edit') }}" class="btn btn-warning mr-2">Edit
                                    <i class="fas fa-edit"></i></a>
                                <a href="{{ url('/barang/'.$data->id_barang.'/delete') }}" class="btn btn-danger">Delete <i
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
