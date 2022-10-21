@extends('layouts.navbar')

@section('container')
<h1>Data Mahasiswa</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">NPM</th>
      </tr>
    </thead>
    <tbody>
    
      @foreach($mahasiswas as $index => $mahasiswa)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img width=50px,img src="{{ $gambar }}" ></td>
            <td>{{$mahasiswa}}</td>
            <td>{{$npm[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Previous</a>
      </li>
      <li class="page-item"><a class="page-link active" href="/mahasiswa">1</a></li>
      <li class="page-item"><a class="page-link" href="/mahasiswa2">2</a></li>
      <li class="page-item">
        <a class="page-link" href="/mahasiswa2">Next</a>
      </li>
    </ul>
  </nav>
@endsection