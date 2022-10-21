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
      @foreach($dosens as $index => $dosen)
        <tr @if($loop->odd) class="bg-secondary" @endif>
            <td scope="row">{{ $loop->iteration }}</td>
            <td><img width=50px,img src="{{ $picture }}" ></td>
            <td>{{$dosen}}</td>
            <td>{{$nip[$index]}}</td>
          </tr> 
          @endforeach
    </tbody>
  </table>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="False">Previous</a>
      </li>
      <li class="page-item"><a class="page-link active" href="/dosen">1</a></li>
      <li class="page-item"><a class="page-link" href="/dosen2">2</a></li>
      <li class="page-item">
        <a class="page-link" href="/dosen2">Next</a>
      </li>
    </ul>
  </nav>
</body>
</html>
@endsection