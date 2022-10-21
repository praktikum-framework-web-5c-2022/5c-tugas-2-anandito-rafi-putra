@extends('layouts.navbar')

@section('container')

  <h1>Mata Kuliah</h1>
  <table id="example" class="table table-striped" style="width:100%">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">SKS</th>
      </tr>
    </thead>
    <tbody>
      @foreach($matkuls as $index => $matkul)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img width=50px, img src="{{ $foto }}" ></td>
            <td>{{$matkul}}</td>
            <td>{{$sks[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Previous</a>
      </li>
      <li class="page-item"><a class="page-link active" href="/mata-kuliah">1</a></li>
      <li class="page-item"><a class="page-link" href="/mata-kuliah2">2</a></li>
      <li class="page-item">
        <a class="page-link" href="/mata-kuliah2">Next</a>
      </li>
    </ul>
  </nav>

@endsection