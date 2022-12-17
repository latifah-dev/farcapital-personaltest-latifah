@extends('welcome')
@section('content')
<div class="container">
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Alamat</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($pendonor as $data )
    <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{$data->nama}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->tanggallahir}}</td>
        <td>{{$data->alamat}}</td>
        <td>{{$data->status}}</td>
        <td>
            <a href="/detail/{{$data->id}}" class="text-gray-400 hover:text-gray-100 mr-2">
                <i class="material-icons-outlined text-base">Detail</i>
            </a>
        </td>
      </tr>
    @endforeach

    </tbody>
  </table>
</div>
  @endsection
