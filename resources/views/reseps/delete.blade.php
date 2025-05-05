@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Resep yang Dihapus</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('reseps.index') }}" class="btn btn-primary mb-3">Kembali ke Daftar Resep</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reseps as $resep)
            <tr>
                <td>{{ $resep->judul_resep }}</td>
                <td>{{ $resep->kategori }}</td>
                <td>{{ $resep->penulis }}</td>
                <td>
                    <form action="{{ route('reseps.restore', $resep->id) }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-success btn-sm">Pulihkan</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada resep yang dihapus.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $reseps->links() }}
    </div>
@endsection
