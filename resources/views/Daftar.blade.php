@extends('layout.layout')
@section('title', 'Beranda')

@section('Daftar_Buku')

<div class="alert alert-success" role="alert">
    <center>
    <br><h1>Daftar Koleksi Buku Novel Terlaris</h1>
    <hr size="10px"><br>
    </center>

    <div class="container-fluid">
    <div class="container">
        <div class="row justify-content-between">
            @foreach($buku as $book)
            <div class="card mb-5" style="width: 18rem;">
                <img src="assets/{{$book->foto}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h4>{{$book->nama}}</h4><br>
                    <a href="{{route('review', $book->id)}}" class="btn btn-success">Lihat Review</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>

@endsection