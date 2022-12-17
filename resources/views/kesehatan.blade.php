@extends('welcome')
@section('content')
<div class="container">
@if (Session::has('status'))
<h1>{{Session::get('message')}}</h1>
@endif

<form action="/storekesehatan" method="post">
    @csrf
    <input type="hidden" class="form-control" name="idpendonor" id="idpendonor"  value="{{$pendonor->id}}">
    <div class="form-group">
      <label for="nama">Nama Pendonor</label>
      <input type="nama" class="form-control" name="nama" id="nama" value="{{$pendonor->nama}}" disabledle>
    </div>

    <div class="form-group">
      <div>
        <label>Pendonor berusia 17-60 tahun (usia 17 tahun diperbolehkan mendonor dengan izin orang tua) </label>
        </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="usia" id="hepatitisB" value="LOLOS">
        <label class="form-check-label" for="inlineRadio1">LOLOS</label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="usia" id="hepatitisB" value="TIDAK LOLOS">
        <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
      </div>
    </div>
    <div class="form-group">
        <div>
          <label>Berat badan minimal 45 KG </label>
          </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="beratbadan" id="hepatitisB" value="LOLOS">
          <label class="form-check-label" for="inlineRadio1">LOLOS</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="beratbadan" id="hepatitisB" value="TIDAK LOLOS">
          <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
        </div>
      </div>
      <div class="form-group">
        <div>
          <label>Temperatur tubuh 36,6 - 37,5 derajat celcius</label>
          </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="temperature" id="hepatitisB" value="LOLOS">
          <label class="form-check-label" for="inlineRadio1">LOLOS</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="temperature" id="hepatitisB" value="TIDAK LOLOS">
          <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
        </div>
      </div>
      <div class="form-group">
        <div>
          <label>Tekanan darah baik</label>
          </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tekanandarah" id="hepatitisB" value="LOLOS">
          <label class="form-check-label" for="inlineRadio1">LOLOS</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="tekanandarah" id="hepatitisB" value="TIDAK LOLOS">
          <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
        </div>
      </div>
      <div class="form-group">
        <div>
          <label>denyut nadi teratur</label>
          </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="nadi" id="hepatitisB" value="LOLOS">
          <label class="form-check-label" for="inlineRadio1">LOLOS</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="nadi" id="hepatitisB" value="TIDAK LOLOS">
          <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
        </div>
      </div>
      <div class="form-group">
        <div>
          <label>hemoglobin minimal 12 gram untuk perempuan, dan 12,5 gram untuk laki-laki</label>
          </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hemoglobin" id="hepatitisB" value="LOLOS">
          <label class="form-check-label" for="inlineRadio1">LOLOS</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="hemogloblin" id="hepatitisB" value="TIDAK LOLOS">
          <label class="form-check-label" for="inlineRadio2">TIDAK LOLOS</label>
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  @endsection
