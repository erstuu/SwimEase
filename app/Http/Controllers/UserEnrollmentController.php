<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enrollment;
use App\Models\Swimming_Class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserEnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Enrollment::with(['user', 'swimmingClass.jadwal'])->get();
        return view('pages.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = Swimming_Class::with('jadwal')->get();
        return view('pages.admin.users.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'no_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'class_id' => 'required|exists:swimming_class,id_class',
        ]);

        // Create User
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'no_telepon' => $validatedData['no_telepon'],
            'alamat' => $validatedData['alamat'],
            'tanggal_lahir' => $validatedData['tanggal_lahir'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'password' => Hash::make($validatedData['tanggal_lahir']),
        ]);

        // Create Enrollment
        Enrollment::create([
            'user_id' => $user->id,
            'class_id' => $validatedData['class_id'],
            'tanggal_daftar' => now(),
            'status_pembayaran' => 'belum lunas',
        ]);

        return redirect()->route('users.index')->with('success', 'User dan Enrollment berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function show(User $user)
    {
        $enrollments = $user->enrollments()->with(['swimmingClass.jadwal'])->get();
        return view('pages.admin.users.show', compact('user', 'enrollments'));
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $classes = Swimming_Class::all();
        return view('pages.admin.users.edit', compact('user', 'classes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'no_telepon' => 'nullable|string|max:15',
            'alamat' => 'nullable|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'class_id' => 'required|exists:swimming_class,id_class',
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        $user->enrollments()->updateOrCreate(
            ['user_id' => $id],
            [
                'class_id' => $validatedData['class_id'],
                'tanggal_daftar' => now(),
                'status_pembayaran' => 'belum lunas',
            ]
        );

        return redirect()->route('users.index')->with('success', 'User dan Enrollment berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus data enrollments terkait
        $user->enrollments()->delete();

        // Hapus data user
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User dan related data berhasil dihapus.');
    }
}
