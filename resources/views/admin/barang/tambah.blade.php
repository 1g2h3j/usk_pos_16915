@extends('layouts.main')

@section('title', 'User | Tambah Data')

@section('headscript')

@section('header', 'Tambah Data User')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Form User <i class="fas fa-plus-circle"></i></h4>
    </div>
    <form action="{{ route('barang.store') }}" method="POST">
@csrf
<div class="card-body">
    <div class="form-group row">
        <label for="inputNamaBarang" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-8">
            <input type="text" name="nama_barang" class="form-control" id="inputNamaBarang" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputHargaBarang" class="col-sm-2 col-form-label">Harga</label>
        <div class="col-sm-8">
            <input type="text" name="harga_barang" class="form-control" id="inputHargaBarang" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputStok" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-8">
            <input type="text" name="stok" class="form-control" id="inputStok" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputIdKategori" class="col-sm-2 col-form-label">Kategori</label>
        <div class="col-sm-8">
            <input type="text" name="id_kategori" class="form-control" id="inputIdKategori" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-8">
            <input type="text" name="keterangan" class="form-control" id="inputKeterangan" placeholder="">
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
