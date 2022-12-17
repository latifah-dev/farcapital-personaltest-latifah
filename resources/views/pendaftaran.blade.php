@extends('welcome')
@section('content')
<div class="container">
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
@endif
<form action="/store" method="post">
    @csrf
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="nama" class="form-control" name="nama" id="nama" placeholder="masukkan nama">
    </div>

    <div class="form-group">
      <label for="gender">Jenis Kelamin</label>
      <select class="form-control" id="gender" name="gender">
        <option>--Jenis Kelamin--</option>
        <option id="gender" name="gender">Laki-Laki</option>
        <option id="gender" name="gender">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
        <label for="tanggallahir">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tanggallahir" id="nama" placeholder="masukkan tanggal lahir">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
