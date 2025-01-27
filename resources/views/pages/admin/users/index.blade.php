@extends('layouts.admin')
@section('content')
    <div class="mt-6">
        <!-- Judul Halaman -->
        <h1 class="font-bold text-sky-900 text-4xl">Pendaftar Les Renang</h1>

        <!-- Tombol Tambah Data -->
        <div class="mt-8 flex justify-between items-center">
            <a href="{{ route('users.create') }}"
                class="bg-primaryy text-white py-3 px-5 rounded-lg shadow hover:bg-sky-600 transition">
                <i class="fa-solid fa-plus mr-2"></i> Tambah Pendaftar Les
            </a>
        </div>

        <!-- Pesan Sukses -->
        @if (session('success'))
            <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Data -->
        <div class="mt-10 overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="table-auto w-full text-left border-collapse">
                <!-- Kepala Tabel -->
                <thead>
                    <tr class="bg-primary">
                        <th class="py-3 px-6">No</th>
                        <th class="py-3 px-6">Nama</th>
                        <th class="py-3 px-6">Jenis Kelamin</th>
                        <th class="py-3 px-6">Status</th>
                        <th class="py-3 px-6">Alamat</th>
                        <th class="py-3 px-6">Kelas Renang</th>
                        <th class="py-3 px-6">Jadwal</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>

                <!-- Isi Tabel -->
                <tbody class="bg-slate-50 text-md font-medium text-black">
                    @foreach ($users as $data)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6">{{ $data->user->name }}</td>
                            <td class="py-4 px-6">{{ $data->user->jenis_kelamin }}</td>
                            <td class="py-4 px-6">{{ $data->user->status }}</td>
                            <td class="py-4 px-6">{{ $data->user->alamat }}</td>
                            <td class="py-4 px-6">{{ $data->swimmingClass->kelas }}</td>
                            <td class="py-4 px-6">{{ $data->swimmingClass->jadwal->hari }}</td>
                            <td class="py-4 px-6 flex justify-center space-x-2">
                                <a href="{{ route('users.show', $data->user->id) }}"
                                    class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('users.edit', $data->user->id) }}"
                                    class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600 transition">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <form action="{{ route('users.destroy', $data->user->id) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white px-3 py-2 rounded hover:bg-red-600 transition">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
