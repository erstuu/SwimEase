@extends('layouts.admin')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Update Kelas Renang</h1>
    <form action="{{ route('swimming.update', $swimmingClass->id_class) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="jadwal_id" class="block text-gray-700 font-medium mb-2">Jadwal</label>
            <select name="jadwal_id" id="jadwal_id" class="w-full p-2 border rounded-lg" required>
                <option value="" disabled>Pilih Jadwal</option>
                @foreach ($jadwal as $item)
                <option value="{{ $item->id_jadwal }}"
                    {{ $swimmingClass->jadwal_id == $item->id_jadwal ? 'selected' : '' }}>
                    {{ $item->hari }} ({{ $item->waktu_mulai }} - {{ $item->waktu_selesai }})
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border rounded-lg" placeholder="Masukkan deskripsi kelas">{{ $swimmingClass->deskripsi }}</textarea>
        </div>
        <div>
            <label for="kelas" class="block text-gray-700 font-medium mb-2">Kelas</label>
            <select name="kelas" id="kelas" class="w-full p-2 border rounded-lg" required>
                <option value="Anak-anak" {{ $swimmingClass->kelas == 'Anak-anak' ? 'selected' : '' }}>Anak-anak
                </option>
                <option value="Dewasa" {{ $swimmingClass->kelas == 'Dewasa' ? 'selected' : '' }}>Dewasa</option>
                <option value="Professional" {{ $swimmingClass->kelas == 'Professional' ? 'selected' : '' }}>
                    Professional</option>
            </select>
        </div>
        <div>
            <label for="instruktur" class="block text-gray-700 font-medium mb-2">Instruktur</label>
            <input type="text" name="instruktur" id="instruktur" class="w-full p-2 border rounded-lg"
                value="{{ $swimmingClass->instruktur }}" placeholder="Masukkan nama instruktur" required>
        </div>
        <div>
            <label for="kuota" class="block text-gray-700 font-medium mb-2">Kuota</label>
            <input type="number" name="kuota" id="kuota" class="w-full p-2 border rounded-lg"
                value="{{ $swimmingClass->kuota }}" min="1" placeholder="Masukkan kuota peserta" required>
        </div>
        <div>
            <label for="harga" class="block text-gray-700 font-medium mb-2">Harga</label>
            <input type="number" step="0.01" name="harga" id="harga" class="w-full p-2 border rounded-lg"
                value="{{ $swimmingClass->harga }}" placeholder="Masukkan harga kelas" required>
        </div>
        <div>
            <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
            <select name="status" id="status" class="w-full p-2 border rounded-lg" required>
                <option value="buka" {{ $swimmingClass->status == 'buka' ? 'selected' : '' }}>Buka</option>
                <option value="tutup" {{ $swimmingClass->status == 'tutup' ? 'selected' : '' }}>Tutup</option>
            </select>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-sky-900 text-white py-2 px-4 rounded-lg shadow hover:bg-sky-900">Update</button>
            <a href="{{ route('swimming.index') }}"
                class="bg-gray-500 text-white py-2 px-4 rounded-lg shadow hover:bg-gray-600 transition">Cancel</a>
        </div>
    </form>
</div>
@endsection