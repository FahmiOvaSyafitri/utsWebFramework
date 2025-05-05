@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Daftar Resep Masakan</h1>

    @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
    @endif

    <style>
        .table th {
            text-align: center; /* Menengahkan teks di header tabel */
        }
    </style>
    

    <a href="{{ route('reseps.create') }}" class="btn btn-primary mb-3">Tambah Resep</a>
    <a href="{{ route('reseps.deleted') }}" class="btn btn-secondary mb-3">Lihat Resep yang Dihapus</a>

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
            @foreach($reseps as $resep)
            <tr>
                <td>{{ $resep->judul_resep }}</td>
                <td>{{ $resep->kategori }}</td>
                <td>{{ $resep->penulis }}</td>
                <td>{{ $resep->waktu_memasak }} menit</td>
                <td>{{ $resep->tingkat_kesulitan }}</td>
                <td class="text-center">
                    <a href="{{ route('reseps.show', ['id' => $resep->id]) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('reseps.edit', $resep->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('reseps.destroy', $resep->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $reseps->links('pagination::bootstrap-5') }}
    </div>
    
@endsection
