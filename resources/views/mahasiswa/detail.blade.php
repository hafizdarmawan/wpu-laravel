@extends("layout/main")
@section("title","HAFIZ DARMAWAN")
@section("container")
<div class="container mt-4">
      <div class="row">
         <div class="col-10">
            <div class="card" style="width: 18rem;">
               <div class="card-body">
                  <h5 class="card-title">{{ $student->nama}}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
               </div>
               <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $student->nrp }}</li>
                  <li class="list-group-item">{{ $student->email }}</li>
                  <li class="list-group-item">{{ $student->jurusan }}</li>
               </ul>
               </div>
         </div>
      </div>
   </div>
@endsection