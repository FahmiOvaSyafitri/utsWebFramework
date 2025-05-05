@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resep yang Dihapus</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Waktu Masak</th>
                <th>Tingkat Kesulitan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reseps as $resep)
            <tr>
                <td>{{ $resep->judul_resep }}</td>
                <td>{{ $resep->kategori }}</td>
                <td>{{ $resep->penulis }}</td>
                <td>{{ $resep->waktu_memasak }} menit</td>
                <td>{{ $resep->tingkat_kesulitan }}</td>
                <td>
                    <form action="{{ route('reseps.restore', $resep->id) }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Pulihkan</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    

    <div class="d-flex justify-content-end">
        {{ $reseps->links('pagination::bootstrap-5') }}
    </div>

    <a href="{{ route('reseps.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
