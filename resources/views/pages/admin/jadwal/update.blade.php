@extends('layouts.admin')
@section('content')
<div class="flex justify-center mt-32">
    <div class="w-10/12 bg-slate-50 p-6 rounded-xl shadow-lg">
        <h1 class="text-center text-xl text-black font-semibold">Edit Jadwal</h1>
        <form action="{{ route('jadwal.update', $jadwal->id_jadwal) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label class="text-lg font-bold">Hari</label>
                <select name="hari" class="form-control bg-slate-100 py-2 w-full mt-2">
                    <option value="">Pilih Hari</option>
                    @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                    <option value="{{ $hari }}" {{ $jadwal->hari == $hari ? 'selected' : '' }}>{{ $hari }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid grid-cols-2 mt-3 text-lg font-bold">
                <div class="form-group mt-2">
                    <label>Waktu Mulai</label>
                    <input type="time" name="waktu_mulai" class="form-control" value="{{ $jadwal->waktu_mulai }}">
                </div>
                <div class="form-group mt-2">
                    <label>Waktu Selesai</label>
                    <input type="time" name="waktu_selesai" class="form-control" value="{{ $jadwal->waktu_selesai }}">
                </div>
            </div>
            <div class="flex justify-end space-x-3 mt-6">
                <button type="submit" class="py-2 px-5 rounded-xl text-white font-bold bg-primaryy">Simpan</button>
            </div>
        </form>
    </div>

</div>

@endsection