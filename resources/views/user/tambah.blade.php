@extends('layouts.main')

@section('title', 'User')

@section('headscript')

@section('header', 'Data User')

@section('content')
<div class="card">
    <div class="card-header">
      <h4>Horizontal Form</h4>
    </div>
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
        <div class="col-sm-9">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
        <div class="col-sm-9">
          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
      </div>
      <fieldset class="form-group">
        <div class="row">
          <div class="col-form-label col-sm-3 pt-0">Radios</div>
          <div class="col-sm-9">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
              <label class="form-check-label" for="gridRadios1">
              First radio
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
              <label class="form-check-label" for="gridRadios2">
                Second radio
              </label>
            </div>
            <div class="form-check disabled">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
              <label class="form-check-label" for="gridRadios3">
                Third disabled radio
              </label>
            </div>
          </div>
        </div>
      </fieldset>
      <div class="form-group row">
        <div class="col-sm-3">Checkbox</div>
        <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1">
            <label class="form-check-label" for="gridCheck1">
            Example checkbox
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
@endsection

@section('footscript')
