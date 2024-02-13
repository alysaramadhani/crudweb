@extends('layouts.main')

@section('content')

<h1>New Data Student</h1>

<form method="post" action="/student/add">
  @csrf
  <div class="mb-3">
    <label for="nis" class="form-label">NIS</label>
    <input type="number" name="nis" class="form-control" id="nis" value="{{ old('nis') }}">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama"value="{{ old('nama') }}">
  </div>
  <div class="mb-3">
    <label for="kelas" class a="form-label">Kelas</label>
    <select  name="kelas_id" class="form-control"  >
      @foreach ($kelas as $grade)
      <option name="kelas_id" value="{{ $grade->id }}">{{$grade->nama_kelas}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
    <input type="date" name="tgl_lahir" class="form-control" id="tanggal_lahir"  value="{{ old('tgl_lahir') }}">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" name="alamat" class="form-control" id="alamat"  value="{{ old('alamat') }}">
  </div>

<button type="submit" class="btn btn-primary">Add</button>

</form>


@endsection