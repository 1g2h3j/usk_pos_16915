@extends('layouts.main')

@section('title', 'User | Edit')

@section('headscript')

@section('header', 'Edit Data User')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Form User <i class="fas fa-edit"></i></h4>
    </div>
    <form action="{{ route('user.update', $user->id_user) }}" method="POST">
        @csrf
        @method('PUT')
    <div class="card-body">
      <div class="form-group row">
        <label for="inputUsername" class="col-sm-3 col-form-label">Username</label>
        <div class="col-sm-9">
          <input type="text" name="username" class="form-control" id="inputUsername" value="{{ $user->username }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" name="password" class="form-control" id="inputPassword" value="{{ $user->password }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputNama" class="col-sm-3 col-form-label">Nama User</label>
        <div class="col-sm-9">
          <input type="text" name="nama_user" class="form-control" id="inputNama" value="{{ $user->nama_user }}">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputLevel" class="col-sm-3 col-form-label">Level</label>
        <div class="col-sm-9">
          <input type="text" name="level" class="form-control" id="inputLevel" value="{{ $user->level }}">
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary mr-2">Simpan</button>
      <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
    </div>
  </form>
  </div>
@endsection

@section('footscript')
