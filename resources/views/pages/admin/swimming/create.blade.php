@extends('layouts.admin')
@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Tambah Kelas Renang</h1>
    <form action="{{ route('swimming.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="jadwal_id" class="block text-gray-700 font-medium mb-2">Jadwal</label>
            <select name="jadwal_id" id="jadwal_id" class="w-full p-2 border rounded-lg" required>
                @foreach ($jadwal as $item)
                <option value="{{ $item->id_jadwal }}">{{ $item->hari }} ({{ $item->waktu_mulai }} -
                    {{ $item->waktu_selesai }})
                </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="deskripsi" class="block text-gray-700 font-medium mb-2">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border rounded-lg" placeholder="Masukkan deskripsi kelas">{{ old('deskripsi') }}</textarea>
        </div>
        <div>
            <label for="kelas" class="block text-gray-700 font-medium mb-2">Kelas</label>
            <select name="kelas" id="kelas" class="w-full p-2 border rounded-lg" required>
                <option value="">-- Pilih Kelas --</option>
                <option value="Anak-anak">Anak-anak</option>
                <option value="Dewasa">Dewasa</option>
                <option value="Professional">Professional</option>
            </select>
        </div>
        <div>
            <label for="instruktur" class="block text-gray-700 font-medium mb-2">Instruktur</label>
            <input type="text" name="instruktur" id="instruktur" class="w-full p-2 border rounded-lg"
                value="{{ old('instruktur') }}" placeholder="Masukkan nama instruktur" required>
        </div>
        <div>
            <label for="kuota" class="block text-gray-700 font-medium mb-2">Kuota</label>
            <input type="number" name="kuota" id="kuota" class="w-full p-2 border rounded-lg"
                value="{{ old('kuota', 10) }}" min="1" placeholder="Masukkan kuota peserta" required>
        </div>
        <div>
            <label for="harga" class="block text-gray-700 font-medium mb-2">Harga</label>
            <input type="number" step="0.01" name="harga" id="harga" class="w-full p-2 border rounded-lg"
                value="{{ old('harga') }}" placeholder="Masukkan harga kelas" required>
        </div>
        <div>
            <label for="status" class="block text-gray-700 font-medium mb-2">Status</label>
            <select name="status" id="status" class="w-full p-2 border rounded-lg" required>
                <option value="buka">Buka</option>
                <option value="tutup">Tutup</option>
            </select>
        </div>
        <div class="mt-6 flex space-x-4">
            <button type="submit"
                class="px-6 py-3 bg-sky-900 text-white rounded-lg hover:bg-sky-900 focus:outline-none focus:ring-2 focus:bg-sky-900">Save</button>
            <a href="{{ route('swimming.index') }}"
                class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</a>
        </div>
    </form>
</div>
@endsection