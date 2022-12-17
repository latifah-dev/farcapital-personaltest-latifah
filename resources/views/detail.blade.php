@extends('welcome')
@section('content')
<div class="container">
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
@endif

<table class="table">
    {{$pendonor->nama}}
    <br>
    {{$pendonor->gender}}
    <br>
    {{$pendonor->tanggallahir}}
    <br>
    {{$pendonor->alamat}}
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Pernyataan</th>
        <th scope="col">Jawaban</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Apakah anda menderita hepatitis</td>
        <td></td>
    </tr>


    </tbody>
  </table>
  <a href="/kesehatan/{{$pendonor->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
    <i class="material-icons-outlined text-base">Form Kesehatan</i>
</a>
</div>
  @endsection
