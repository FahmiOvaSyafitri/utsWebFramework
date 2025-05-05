<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Http\Request;

class ResepController extends Controller
{
    public function index()
    {
        $reseps = Resep::paginate(8);
        return view('reseps.index', compact('reseps'));
    }

    public function create()
    {
        return view('reseps.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul_resep' => 'required',
            'kategori' => 'required',
            'bahan' => 'required',
            'langkah_pembuatan' => 'required',
            'waktu_memasak' => 'required|integer',
            'penulis' => 'required',
            'tingkat_kesulitan' => 'required',
        ]);

        Resep::create($validated);
        return redirect()->route('reseps.index')->with('success', 'Resep berhasil ditambahkan!');
    }

    public function edit(Resep $resep)
    {
        return view('reseps.edit', compact('resep'));
    }

    public function update(Request $request, Resep $resep)
    {
        $validated = $request->validate([
            'judul_resep' => 'required',
            'kategori' => 'required',
            'bahan' => 'required',
            'langkah_pembuatan' => 'required',
            'waktu_memasak' => 'required|integer',
            'penulis' => 'required',
            'tingkat_kesulitan' => 'required',
        ]);

        $resep->update($validated);
        return redirect()->route('reseps.index')->with('success', 'Resep berhasil diupdate!');
    }

    public function destroy(Resep $resep)
    {
        $resep->delete();
        return redirect()->route('reseps.index')->with('success', 'Resep berhasil dihapus!');
    }

    public function deleted()
    {
        $reseps = Resep::onlyTrashed()->paginate(8);
        return view('reseps.deleted', compact('reseps'));
    }

    public function restore($id)
    {
        $resep = Resep::onlyTrashed()->where('id', $id)->first();
        if ($resep) {
            $resep->restore();
            return redirect()->route('reseps.deleted')->with('success', 'Resep berhasil dipulihkan!');
        }
        return redirect()->route('reseps.deleted')->with('error', 'Resep tidak ditemukan!');
    }

    public function show($id)
    {
        $resep = Resep::findOrFail($id);
        return view('reseps.show', compact('resep'));
    }


}
?>