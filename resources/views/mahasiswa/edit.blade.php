@extends("layout/main")
@section("title","HAFIZ DARMAWAN")
@section("container")
<div class="container mt-4">
      <div class="row">
         <div class="col-10">
            <div class="card" style="width: 500px;">
               <div class="card-body">
                  <form action="/mahasiswa/{{ $data->id }}" method="POST">
                     @csrf
                     @method('PUT')
                     <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " name="nama" id="nama" aria-describedby="Nama" placeholder="Nama" value="{{ $data->nama }}{{ old("nama") }}">
                        @error('nama')
                           <small id="" class="invalid-feedback">{{ $message }}</small>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp')is-invalid                           
                        @enderror" name="nrp" id="nrp" placeholder="NRP" value="{{ $data->nrp }}{{ old("nrp") }}">
                        @error('nrp')
                           <small id="" class="invalid-feedback">{{ $message }}</small>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email')is-invalid
                        @enderror" name="email" id="email" placeholder="Email" value="{{ $data->email }}{{ old("email") }}">
                        @error('email')
                           <small id="" class="invalid-feedback">{{ $message }}</small>
                        @enderror
                     </div>
                     <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan')is-invalid
                        @enderror" name="jurusan" id="jurusan" placeholder="Jurusan" value="{{ $data->jurusan }}{{ old("jurusan") }}">
                        @error('jurusan')
                           <small id="" class="invalid-feedback">{{ $message }}</small>
                        @enderror
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                  </div>
               </div>
         </div>
      </div>
   </div>
@endsection