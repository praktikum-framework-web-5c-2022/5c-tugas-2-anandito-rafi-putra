@extends('layouts.navbar')
@section('container')
  <h1>Data Dosen</h1>
<table class="table" id="example">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Foto</th>
        <th scope="col">Nama</th>
        <th scope="col">NIP</th>
      </tr>
    </thead>
    <tbody>
        <?php $count = 11; ?> 
      @foreach($dosens2 as $index2 => $dosen2)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <td scope="row">{{ $count }}</td>
            <td><img width=50px,img src="{{ $picture }}" ></td>
            <td>{{$dosen2}}</td>
            <td>{{$nip2[$index2]}}</td>
          </tr> 
          <?php $count++; ?>
          @endforeach
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <a class="page-link" href="/dosen" tabindex="-1" aria-disabled="False">Previous</a>
      <li class="page-item"><a class="page-link" href="/dosen">1</a></li>
      <li class="page-item"><a class="page-link active" href="/dosen2">2</a></li>
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Next</a>
      </li>
    </ul>
  </nav>

@endsection