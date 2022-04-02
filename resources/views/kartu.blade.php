@extends('datang')

@section('content')

<div class="row container m-5">
    @foreach ($data as $data)
            <div class="col-4 mx-auto">
                <div class="card" style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$data->judul}}</h5>
                    <p class="card-text">{{$data->deskripsi}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
    @endforeach
</div>
@endsection
