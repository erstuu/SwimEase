@extends('layouts.index')
@section('content')
    <div class="flex justify-center items-center text-black mt-10 mb-20">
        <div class="w-full max-w-4xl">
            <h1 class="text-3xl font-semibold mb-6 text-center">Les Renang Saya</h1>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200 p-8 mx-auto">
                @foreach ($users as $class)
                    {{-- Identitas --}}
                    <div>
                        <h2 class="text-xl font-semibold mb-4">Identitas</h2>
                        <div class="grid grid-cols-2 gap-x-6 gap-y-2">
                            <p class="text-sm text-gray-600"><strong>Nama:</strong> {{ $class->user->name }}</p>
                            <p class="text-sm text-gray-600 pl-9"><strong>Email:</strong> {{ $class->user->email }}</p>
                            <p class="text-sm text-gray-600"><strong>No. Telepon:</strong> {{ $class->user->no_telepon }}</p>
                            <p class="text-sm text-gray-600 pl-9"><strong>Alamat:</strong> {{ $class->user->alamat }}</p>
                        </div>
                    </div>

                    {{-- Jadwal Les --}}
                    <div class="mt-6">
                        <h2 class="text-xl font-semibold mb-4">Jadwal Les-Ku</h2>
                        <table class="w-full border-collapse border border-gray-300 text-sm text-left">
                            <thead>
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">Detail</th>
                                    <th class="border border-gray-300 px-4 py-2">Informasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Kelas</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $class->swimmingClass->kelas }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Hari</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $class->swimmingClass->jadwal->hari }}</td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">Waktu</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        {{ $class->swimmingClass->jadwal->waktu_mulai }} - {{ $class->swimmingClass->jadwal->waktu_selesai }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection