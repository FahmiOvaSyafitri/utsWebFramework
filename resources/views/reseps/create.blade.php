@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Tambah Resep Baru</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reseps.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="judul_resep" class="form-label">Judul Resep</label>
            <input type="text" class="form-control" id="judul_resep" name="judul_resep" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" required>
        </div>

        <div class="mb-3">
            <label for="bahan" class="form-label">Bahan</label>
            <textarea class="form-control" id="bahan" name="bahan" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="langkah_pembuatan" class="form-label">Langkah Pembuatan</label>
            <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="waktu_memasak" class="form-label">Waktu Memasak (menit)</label>
            <input type="number" class="form-control" id="waktu_memasak" name="waktu_memasak" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required>
        </div>

        <div class="mb-3">
            <label for="tingkat_kesulitan" class="form-label">Tingkat Kesulitan</label>
            <select class="form-select" id="tingkat_kesulitan" name="tingkat_kesulitan" required>
                <option value="Mudah">Mudah</option>
                <option value="Sedang">Sedang</option>
                <option value="Sulit">Sulit</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Simpan Resep</button>
        <a href="{{ route('reseps.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
