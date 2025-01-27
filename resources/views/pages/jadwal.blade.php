@extends('layouts.index')

@section('content')
    <div class="p-36">
        <!-- Judul -->
        <h1 class="text-black font-bold text-3xl text-center mb-8">Jadwal Kegiatan Les di SwimEase</h1>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse rounded-lg overflow-hidden shadow-lg">
                <!-- Head -->
                <thead class="bg-primaryy text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">No</th>
                        <th class="py-3 px-4 text-left">Nama Kelas</th>
                        <th class="py-3 px-4 text-left">Hari</th>
                        <th class="py-3 px-4 text-left">Waktu</th>
                        <th class="py-3 px-4 text-left">Pelatih</th>
                        <th class="py-3 px-4 text-left">Kuota</th>
                        <th class="py-3 px-4 text-center">Harga</th>
                    </tr>
                </thead>
                <!-- Body -->
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse ($swimm as $item)
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="py-3 px-4">{{ $loop->iteration }}</td>
                            <td class="py-3 px-4">{{ $item->kelas }}</td>
                            <td class="py-3 px-4">{{ $item->jadwal->hari }}</td>
                            <td class="py-3 px-4">{{ $item->jadwal->waktu_mulai }} - {{ $item->jadwal->waktu_selesai }}</td>
                            <td class="py-3 px-4">{{ $item->instruktur }}</td>
                            <td class="py-3 px-4">{{ $item->kuota }}</td>
                            <td class="py-3 px-4 text-center">
                                <span class="bg-sky-200 text-sky-800 px-3 py-1 rounded-full font-bold text-sm">
                                    Rp{{ number_format($item->harga, 0, ',', '.') }}
                                </span>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-6 text-center text-gray-500 text-lg">
                                Tidak Ada Les Yang Tersedia
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
