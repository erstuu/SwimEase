@extends('layouts.admin')
@section('content')
    <div class="container mx-auto p-6 space-y-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">Detail Kelas Renang</h1>

        <div class="bg-white shadow-xl p-6 rounded-lg">
            <h2 class="text-xl font-bold text-gray-800 mb-6">Kelas Renang: {{ $swimmingClass->kelas }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div class="flex">
                        <p class="font-semibold w-40">Instruktur</p>
                        <p>: {{ $swimmingClass->instruktur }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-40">Kuota</p>
                        <p>: {{ $swimmingClass->kuota }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-40">Harga</p>
                        <p>: Rp. {{ number_format($swimmingClass->harga, 0, ',', '.') }}</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="flex">
                        <p class="font-semibold w-40">Status</p>
                        <p>: {{ ucfirst($swimmingClass->status) }}</p>
                    </div>
                    <div class="flex">
                        <p class="font-semibold w-40">Deskripsi</p>
                        <p>: {{ $swimmingClass->deskripsi }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <a href="{{ route('swimming.index') }}" class="bg-sky-900 text-white py-2 px-4 rounded-lg shadow hover:bg-sky-900 transition">
                Kembali
            </a>
        </div>
    </div>
@endsection