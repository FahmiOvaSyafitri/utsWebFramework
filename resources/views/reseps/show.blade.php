@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>{{ $resep->judul_resep }}</h1>
    <p><strong>Kategori:</strong> {{ $resep->kategori }}</p>
    <p><strong>Bahan:</strong><br>{{ $resep->bahan }}</p>
    <p><strong>Langkah Pembuatan:</strong><br>{{ $resep->langkah_pembuatan }}</p>
    <p><strong>Waktu Memasak:</strong> {{ $resep->waktu_memasak }} menit</p>
    <p><strong>Penulis:</strong> {{ $resep->penulis }}</p>
    <p><strong>Tingkat Kesulitan:</strong> {{ $resep->tingkat_kesulitan }}</p>
    <a href="{{ route('reseps.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
