@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Edit Resep</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reseps.update', $resep->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul_resep" class="form-label">Judul Resep</label>
            <input type="text" class="form-control" id="judul_resep" name="judul_resep" value="{{ $resep->judul_resep }}" required>
        </div>

        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ $resep->kategori }}" required>
        </div>

        <div class="mb-3">
            <label for="bahan" class="form-label">Bahan</label>
            <textarea class="form-control" id="bahan" name="bahan" rows="3" required>{{ $resep->bahan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="langkah_pembuatan" class="form-label">Langkah Pembuatan</label>
            <textarea class="form-control" id="langkah_pembuatan" name="langkah_pembuatan" rows="3" required>{{ $resep->langkah_pembuatan }}</textarea>
        </div>

        <div class="mb-3">
            <label for="waktu_memasak" class="form-label">Waktu Memasak (menit)</label>
            <input type="number" class="form-control" id="waktu_memasak" name="waktu_memasak" value="{{ $resep->waktu_memasak }}" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $resep->penulis }}" required>
        </div>

        <div class="mb-3">
            <label for="tingkat_kesulitan" class="form-label">Tingkat Kesulitan</label>
            <select class="form-select" id="tingkat_kesulitan" name="tingkat_kesulitan" required>
                <option value="Mudah" {{ $resep->tingkat_kesulitan == 'Mudah' ? 'selected' : '' }}>Mudah</option>
                <option value="Sedang" {{ $resep->tingkat_kesulitan == 'Sedang' ? 'selected' : '' }}>Sedang</option>
                <option value="Sulit" {{ $resep->tingkat_kesulitan == 'Sulit' ? 'selected' : '' }}>Sulit</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update Resep</button>
        <a href="{{ route('reseps.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
