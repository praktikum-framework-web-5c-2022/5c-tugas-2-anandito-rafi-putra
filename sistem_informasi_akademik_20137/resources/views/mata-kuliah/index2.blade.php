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
      <?php $count = 11; ?> 
      @foreach($matkuls2 as $index2 => $matkul2)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <td scope="row">{{ $count }}</td>
            <td><img width=50px, img src="{{ $foto }}" ></td>
            <td>{{$matkul2}}</td>
            <td>{{$sks2[$index2]}}</td>
          </tr> 
          <?php $count++; ?>
          @endforeach

    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <a class="page-link" href="/mata-kuliah" tabindex="-1" aria-disabled="False">Previous</a>
      <li class="page-item"><a class="page-link" href="/mata-kuliah">1</a></li>
      <li class="page-item"><a class="page-link active" href="/mata-kuliah2">2</a></li>
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Next</a>
      </li>
    </ul>
  </nav>
@endsection