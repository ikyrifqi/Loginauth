@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-4">
            <img src="{{ url('images/logojogja.png') }}" class="rounded mx-auto d-block" width="300"  alt="">
        </div>
        @foreach($barangs as $barang)
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
             <img src="..." class="card-img-top" alt="...">
             <div class="card-body">
             <h5 class="card-title">Card title</h5>
             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <a href="#" class="btn btn-primary">Go somewhere</a>
         </div>
     </div>   
     </div>
        @endforeach
    </div>
</div>
@endsection
