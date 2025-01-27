@extends('layouts.admin')
@section('content')
<div class="mt-6">
    <h1 class="font-bold text-sky-900 text-4xl">Kelas Renang</h1>
    <div class="mt-8 flex justify-between items-center">
        <a href="{{ route('swimming.create') }}"
            class="bg-primaryy text-white py-3 px-5 rounded-lg shadow hover:bg-sky-600 transition">
            <i class="fa-solid fa-plus mr-2"></i> Tambah Kelas
        </a>
    </div>
    @if (session('success'))
    <div class="mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
        {{ session('success') }}
    </div>
    @endif
    <div class="mt-10 overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="table-auto w-full text-left border-collapse">
            <thead>
                <tr class="bg-primary text-black">
                    <th class="py-3 px-6">No</th>
                    <th class="py-3 px-6">Deskripsi</th>
                    <th class="py-3 px-6">Kelas</th>
                    <th class="py-3 px-6">Pelatih</th>
                    <th class="py-3 px-6">Kuota</th>
                    <th class="py-3 px-6">Harga</th>
                    <th class="py-3 px-6">Status</th>
                    <th class="py-3 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-slate-50 text-md font-medium text-black">
                @foreach ($classes as $class)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-4 px-6">{{ $loop->iteration }}</td>
                    <td class="py-4 px-6">{{ $class->deskripsi }}</td>
                    <td class="py-4 px-6">{{ $class->kelas }}</td>
                    <td class="py-4 px-6">{{ $class->instruktur }}</td>
                    <td class="py-4 px-6">{{ $class->kuota }}</td>
                    <td class="py-4 px-6">Rp. {{ $class->harga }}</td>
                    <td class="py-4 px-6">{{ $class->status }}</td>
                    <td class="py-4 px-6 flex justify-center space-x-2">
                        <a href="{{ route('swimming.show', $class->id_class) }}"
                            class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 transition">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('swimming.edit', $class->id_class) }}"
                            class="bg-yellow-500 text-white px-3 py-2 rounded hover:bg-yellow-600 transition">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                        <form action="{{ route('swimming.destroy', $class->id_class) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">
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