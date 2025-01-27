@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6 space-y-8">
        <!-- Title -->
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Detail User {{ $user->name }}</h1>
        </div>

        <!-- User Information and Enrollments in a single card -->
        <div class="bg-white p-6 shadow-xl">
            <!-- Informasi Pengguna -->
            <div class="mb-6">
                <h1 class="text-2xl font-semibold text-gray-800 mb-6">Informasi Pengguna</h1>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex">
                        <p class="font-semibold w-32">Nama</p>
                        <p>: {{ $user->name }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-32">Email</p>
                        <p>: {{ $user->email }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-32">Telepon</p>
                        <p>: {{ $user->no_telepon }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-32">Alamat</p>
                        <p>: {{ $user->alamat }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-32">Tanggal Lahir</p>
                        <p>: {{ $user->tanggal_lahir }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-32">Jenis Kelamin</p>
                        <p>: {{ $user->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                    </div>
                </div>
            </div>

            <!-- Garis Pemisah -->
            {{-- <hr class="my-6 border-t border-gray-300"> --}}

            <!-- Enrollments Section -->
            <div>
                <h1 class="text-2xl font-semibold text-gray-800 mb-6 mt-11">Enrollments</h1>
                @forelse ($enrollments as $enrollment)
                    <div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Kelas : {{ $enrollment->swimmingClass->kelas }}</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Kiri: Isian Kelas -->
                            <div class="space-y-4">
                                <div class="flex">
                                    <p class="font-semibold w-40">Kelas</p>
                                    <p>: {{ $enrollment->swimmingClass->kelas }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Instruktur</p>
                                    <p>: {{ $enrollment->swimmingClass->instruktur }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Harga</p>
                                    <p>: Rp. {{ number_format($enrollment->swimmingClass->harga, 0, ',', '.') }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Status Pembayaran</p>
                                    <p>: {{ ucfirst($enrollment->status_pembayaran) }}</p>
                                </div>
                            </div>

                            <!-- Kanan: Isian Jadwal Kelas -->
                            <div class="space-y-4">
                                <div class="flex">
                                    <p class="font-semibold w-40">Hari</p>
                                    <p>: {{ $enrollment->swimmingClass->jadwal->hari }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Waktu</p>
                                    <p>: {{ $enrollment->swimmingClass->jadwal->waktu_mulai }} - {{ $enrollment->swimmingClass->jadwal->waktu_selesai }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Status Kelas</p>
                                    <p>: {{ ucfirst($enrollment->swimmingClass->status) }}</p>
                                </div>
                                <div class="flex">
                                    <p class="font-semibold w-40">Deskripsi</p>
                                    <p>: {{ $enrollment->swimmingClass->deskripsi }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-md text-gray-600">Belum ada enrollment untuk user ini.</p>
                @endforelse
            </div>
        </div>

        <!-- Back Button -->
        <div class="flex justify-end">
            <a href="{{ route('users.index') }}" class="bg-sky-900 text-white py-2 px-4 rounded-lg shadow hover:bg-sky-900 transition">
                Kembali
            </a>
        </div>
    </div>
@endsection