@extends('layouts/app')

@section('title', 'Admin - List Book')
    
@section('content')

<div class="container">

    <h2 class="text-center">DETAIL BUKU</h2>
        <p> Buku : {{$book->judul}}</p>
        <p>Penulis : {{$book->penulis}}</p>
        <p>tahun : {{$book->tahun}}</p>
        <p>tahun : {{$book->penerbit}}</p>
</div>

@endsection