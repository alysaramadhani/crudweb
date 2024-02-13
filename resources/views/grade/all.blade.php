@extends("layouts.main")
@php 
$no = 1
@endphp

@section('content')
<h2>Data Kelas</h2>
<a type="button" class="btn btn-primary m-2 " href="/grade/create">Add new data</a>
@if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('fail'))
        <div class="alert alert-danger col-lg-12" role="alert">
            {{ session('success') }}
        </div>
    @endif

<table class="table">
  <thead>
    <tr>   
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
  @foreach($grades as $grade)
            <tr>
              <th scope="row" class="align-middle">{{$no++}}</th>
              
              <td class="align-middle">{{$grade->nama_kelas}}</td>
             
              <td class="d-flex justify-content-start">
               
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg></a>
              <a href="/grade/edit/{{ $grade->id }}" class="btn btn-warning me-2"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a>
              
              <form method="POST" action="/grade/delete/{{ $grade->id }}">
                @method('delete')
                @csrf
              <button class="btn btn-danger me-2" onclick="return confirm('Apakah anda yakin ingin menghapus data {{ $grade->nama}} ?')"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><style>svg{fill:#ffffff}</style><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg></button>

              </form>
              
              </td>
            </tr>
         @endforeach 
  </tbody>
</table>
@endsection