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
        <td>Apakah anda pernah menderita hepatitis?</td>
        <td>
            @if ($pernyataan->hepatitisB == 0)
                Tidak
            @else
                Ya
            @endif
        </td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Dalam jangka waktu 6 bulan apakah anda kontak erat dengan penderita hepatitis? </td>
        <td>
            @if ($pernyataan->kontakhepatitis == 0)
                Tidak
            @else
                Ya
            @endif
        </td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Dalam jangka waktu 6 bulan apakah anda sudah mendapatkan transfusi? </td>
        <td>
            @if ($pernyataan->dapattransfusi == 0)
                Tidak
            @else
                Ya
            @endif
        </td>
    </tr>

    </tbody>
  </table>
  <a href="/kesehatan/{{$pendonor->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
    <i class="material-icons-outlined text-base">Form Kesehatan</i>
</a>
</div>
  @endsection
