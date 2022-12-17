@extends('welcome')
@section('content')
<div class="container">
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
@endif

<form action="/storedetail" method="post">
    @csrf
    <input type="hidden" class="form-control" name="idpendonor" id="idpendonor"  value="1">
    <div class="form-group">
      <label for="nama">Nama Pendonor</label>
      <input type="nama" class="form-control" name="nama" id="nama">
    </div>

    <div class="form-group">
      <div>
        <label>Apakah anda menderita hepatitis </label>
        </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="hepatitisB" id="hepatitisB" value="1">
        <label class="form-check-label" for="inlineRadio1">YA</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="hepatitisB" id="hepatitisB" value="0">
        <label class="form-check-label" for="inlineRadio2">TIDAK</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
