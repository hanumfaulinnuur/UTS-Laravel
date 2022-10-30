@extends('layout.layout')
@section('title', 'Review')

@section('Review_Buku')
<div class="alert alert-success" role="alert">
<br><h1>Detail Buku :</h1>
<hr />
<center>
<img src="{{asset('assets/'.$reviewNovel->foto)}}" style="width: 20rem;" class="rounded mx-auto d-block" alt="..."><br>
</center>
<div class="container">
<div class="card" style="width: 70rem;">
        <div class="card-body">
                <h1 class="card-title">{{ $reviewNovel->nama }}</h1>
                <hr />
                <p class="card-text">{{ $reviewNovel->review }}</p>

                <h4 class="card-text">jenis : {{ $reviewNovel->jenis }}</h4>
                <h4 class="card-text">Harga Pasar : {{ $reviewNovel->harga }},-</h4>
                <h4 class="card-text">Stok : {{ $reviewNovel->stok }}</h4>
        </div>
    </div>
</div>
</div>

@endsection