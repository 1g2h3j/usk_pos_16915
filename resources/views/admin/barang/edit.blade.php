@extends('layouts.main')

@section('title', 'User | Edit Data')

@section('headscript')

@section('header', 'Edit Data Barang')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Form Barang <i class="fas fa-plus-circle"></i></h4>
    </div>
    <form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
@csrf
@method('PUT')
<div class="card-body">
    <div class="form-group row">
        <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
            <input type="text" name="nama_barang" class="form-control" id="inputNamaBarang" value="{{ $barang->nama_barang }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputHargaBarang" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-8">
            <input type="text" name="harga_barang" class="form-control" id="inputHargaBarang" value="{{ $barang->harga_barang }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-8">
            <input type="text" name="stok" class="form-control" id="inputStok" value="{{ $barang->stok }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputIdKategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-8">
            <input type="text" name="id_kategori" class="form-control" id="inputIdKategori" value="{{ $barang->id_kategori }}">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <input type="text" name="keterangan" class="form-control" id="inputKeterangan" value="{{ $barang->keterangan}}">
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
    <a href="{{ route('barang.index') }}" class="btn btn-danger">Cancel</a>
</div>
</form>
</div>

<style>
    ::placeholder {
        color: #c2c2c2 !important;
    }

</style>
@endsection

@section('footscript')
