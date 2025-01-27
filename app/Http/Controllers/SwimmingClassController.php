<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Swimming_Class;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SwimmingClassController extends Controller
{
    public function index()
    {
        $classes = Swimming_Class::all();
        return view('pages.admin.swimming.index', compact('classes'));
    }

    public function create()
    {
        $jadwal = Jadwal::all();
        return view('pages.admin.swimming.create', compact('jadwal'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jadwal_id' => 'required|uuid|exists:jadwal,id_jadwal',
            'deskripsi' => 'nullable|string',
            'kelas' => 'required|in:Anak-anak,Dewasa,Professional',
            'instruktur' => 'required|string|max:255',
            'kuota' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'status' => 'required|in:buka,tutup',
        ]);

        $validated['id_class'] = Str::uuid();
        Swimming_Class::create($validated);

        return redirect()->route('swimming.index')->with('success', 'Kelas berhasil ditambahkan.');
    }

    public function show($id)
    {
        $swimmingClass = Swimming_Class::find($id);
        return view('pages.admin.swimming.show', compact('swimmingClass'));
    }

    public function edit($id)
    {
        $swimmingClass = Swimming_Class::find($id);
        $jadwal = Jadwal::all();
        return view('pages.admin.swimming.update', compact('swimmingClass', 'jadwal'));
    }


    public function update(Request $request, $id)
    {
        $swimmingClass = Swimming_Class::findOrFail($id);

        $validated = $request->validate([
            'jadwal_id' => 'required|uuid|exists:jadwal,id_jadwal',
            'deskripsi' => 'nullable|string',
            'kelas' => 'required|in:Anak-anak,Dewasa,Professional',
            'instruktur' => 'required|string|max:255',
            'kuota' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
            'status' => 'required|in:buka,tutup',
        ]);

        $swimmingClass->update($validated);

        return redirect()->route('swimming.index')->with('success', 'Kelas berhasil diperbarui.');
    }



    public function destroy($id)
    {
        $swimmingClass = Swimming_Class::findOrFail($id);

        // Hapus data enrollments terkait
        $swimmingClass->enrollments()->delete();

        // Hapus kelas renang
        $swimmingClass->delete();

        return redirect()->route('swimming.index')->with('success', 'Kelas dan data terkait berhasil dihapus.');
    }
}
