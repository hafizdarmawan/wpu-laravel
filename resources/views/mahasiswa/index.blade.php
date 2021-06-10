@extends("layout/main")
@section("title","HAFIZ DARMAWAN")
@section("container")
<div class="container mt-4">
      <div class="row">
         <div class="col-10">
            <h1>Daftar Mahasiswa</h1>
            @if (session('status'))
               <div class="alert alert-success">
                  {{ session('status') }}
               </div>
            @endif
            <div class="mt-4 mb-2 float-right">
               <a href="mahasiswa/create" class="btn btn-primary"> Tambah</a>
            </div>
               <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nama</th>
                     <th scope="col">NRP</th>
                     <th scope="col">EMAIL</th>
                     <th scope="col">JURUSAN</th>
                     <th scope="col">AKSI</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach ($mahasiswa as $maha)
                  <tr>
                     <th scope="row">{{ $loop->iteration }}</th>
                     <td>{{ $maha->nama }}</td>
                     <td>{{ $maha->nrp }}</td>
                     <td>{{ $maha->email }}</td>
                     <td>{{ $maha->jurusan }}</td>
                     <td>
                        <a href="mahasiswa/{{ $maha->id }}" class="btn btn-success">Detail</a>
                        <a href="mahasiswa/{{ $maha->id}}/edit" class="btn btn-success">Edit</a>
                        <form action="mahasiswa/{{ $maha->id }}" method="post" class="d-inline">
                           @csrf
                           @method('delete')
                           <button type="sumbit" class="btn btn-danger">Delete</button>
                        </form>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
               </table>
         </div>
      </div>
   </div>
@endsection