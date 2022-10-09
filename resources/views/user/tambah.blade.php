@extends('layouts.main')

@section('title', 'User | Tambah Data')

@section('headscript')

@section('header', 'Tambah Data User')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Form User <i class="fas fa-plus-circle"></i></h4>
    </div>
    <form action="{{ route('user.store') }}" method="POST">
@csrf
<div class="card-body">
    <div class="form-group row">
        <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-8">
            <input type="text" name="username" class="form-control" id="inputUsername" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-8">
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama User</label>
        <div class="col-sm-8">
            <input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputLevel" class="col-sm-2 col-form-label">Level</label>
        <div class="col-sm-8">
            <input type="text" name="level" class="form-control" id="inputLevel" placeholder="">
        </div>
    </div>
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
    <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
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
