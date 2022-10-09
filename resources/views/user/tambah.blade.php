@extends('layouts.main')

@section('title', 'User')

@section('headscript')

@section('header', 'Tambah Data User')

@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Floating labels</h5>
        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

        <form>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingnameInput" placeholder="Enter Name">
                <label for="floatingnameInput">Name</label>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingemailInput"
                            placeholder="Enter Email address" value="name@example.com">
                        <label for="floatingemailInput">Email address</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="floatingSelectGrid">Works with selects</label>
                    </div>
                </div>
            </div>

            <div class="mb-3">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="floatingCheck">
                    <label class="form-check-label" for="floatingCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-md">Submit</button>
            </div>
        </form>
    </div>
    <!-- end card body -->
</div>
{{-- <div class="card">
    <div class="card-header">
      <h4>Form User</h4>
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

</style> --}}
@endsection

@section('footscript')
