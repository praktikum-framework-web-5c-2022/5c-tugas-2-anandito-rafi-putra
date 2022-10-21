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
        <?php $count = 11; ?> 
      @foreach($mahasiswas2 as $index => $mahasiswa2)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <td scope="row">{{ $count }}</td>
            <td><img width=50px,img src="{{ $gambar }}" ></td>
            <td>{{$mahasiswa2}}</td>
            <td>{{$npm2[$index]}}</td>
          </tr> 
          <?php $count++; ?>
          @endforeach
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <a class="page-link" href="/mahasiswa" tabindex="-1" aria-disabled="False">Previous</a>
      <li class="page-item"><a class="page-link" href="/mahasiswa">1</a></li>
      <li class="page-item"><a class="page-link active" href="/mahasiswa2">2</a></li>
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Next</a>
      </li>
    </ul>
  </nav>
@endsection