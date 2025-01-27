@extends('layouts.admin')
@section('content')
    <div class="mt-6">
        <!-- Judul Halaman -->
        <h1 class="font-bold text-sky-900 text-4xl">Jadwal Kegiatan</h1>

        <!-- Tombol Tambah Jadwal -->
        <div class="mt-8 flex justify-between items-center">
            <a href="#" class="bg-primaryy text-white py-3 px-5 rounded-lg shadow hover:bg-sky-600 transition"
                onclick="my_modal_1.showModal()">
                <i class="fa-solid fa-plus mr-2"></i> Tambah Jadwal
            </a>
        </div>

        <!-- Modal Tambah Jadwal -->
        @include('pages.admin.jadwal.create')

        <!-- Pesan Sukses -->
        @if (session('success'))
            <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tabel Jadwal -->
        <div class="mt-10 overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="table-auto w-full text-left border-collapse">
                <!-- Kepala Tabel -->
                <thead>
                    <tr class="bg-primary text-black">
                        <th class="py-3 px-6">No</th>
                        <th class="py-3 px-6">Hari</th>
                        <th class="py-3 px-6">Waktu Mulai</th>
                        <th class="py-3 px-6">Waktu Selesai</th>
                        <th class="py-3 px-6 text-center">Aksi</th>
                    </tr>
                </thead>

                <!-- Isi Tabel -->
                <tbody class="bg-slate-50 text-md font-medium text-black">
                    @foreach ($jadwal as $item)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-4 px-6">{{ $loop->iteration }}</td>
                            <td class="py-4 px-6">{{ $item->hari }}</td>
                            <td class="py-4 px-6">{{ $item->waktu_mulai }}</td>
                            <td class="py-4 px-6">{{ $item->waktu_selesai }}</td>
                            <td class="py-4 px-6 flex justify-center space-x-2">
                                <a href="{{ route('jadwal.edit', $item->id_jadwal) }}"
                                    class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600 transition">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <form action="{{ route('jadwal.destroy', $item->id_jadwal) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
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
