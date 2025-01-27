@extends('layouts.admin') 

@section('content')
    <div class="container mx-auto p-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit User: {{ $user->name }}</h1>

        <!-- Menampilkan pesan sukses atau error -->
        @if (session('success'))
            <div class="alert alert-success bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger bg-red-500 text-white p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Edit User -->
        <form action="{{ route('users.update', $user->id) }}" method="POST"
            class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf
            @method('PUT')

            <!-- Input Nama -->
            <div class="form-group">
                <label for="name" class="block text-gray-700 font-semibold">Nama</label>
                <input type="text" id="name" name="name"
                    class="form-control w-full p-3 border border-gray-300 rounded-md" value="{{ old('name', $user->name) }}"
                    required>
            </div>

            <!-- Input Email -->
            <div class="form-group">
                <label for="email" class="block text-gray-700 font-semibold">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control w-full p-3 border border-gray-300 rounded-md"
                    value="{{ old('email', $user->email) }}" required>
            </div>

            <!-- Input Nomor Telepon -->
            <div class="form-group">
                <label for="no_telepon" class="block text-gray-700 font-semibold">Nomor Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon"
                    class="form-control w-full p-3 border border-gray-300 rounded-md"
                    value="{{ old('no_telepon', $user->no_telepon) }}">
            </div>

            <!-- Input Alamat -->
            <div class="form-group">
                <label for="alamat" class="block text-gray-700 font-semibold">Alamat</label>
                <textarea id="alamat" name="alamat" class="form-control w-full p-3 border border-gray-300 rounded-md">{{ old('alamat', $user->alamat) }}</textarea>
            </div>

            <!-- Input Tanggal Lahir -->
            <div class="form-group">
                <label for="tanggal_lahir" class="block text-gray-700 font-semibold">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                    class="form-control w-full p-3 border border-gray-300 rounded-md"
                    value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" required>
            </div>

            <!-- Input Jenis Kelamin -->
            <div class="form-group">
                <label for="jenis_kelamin" class="block text-gray-700 font-semibold">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin"
                    class="form-control w-full p-3 border border-gray-300 rounded-md" required>
                    <option value="L" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'L' ? 'selected' : '' }}>
                        Laki-laki</option>
                    <option value="P" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'P' ? 'selected' : '' }}>
                        Perempuan</option>
                </select>
            </div>

            <!-- Input Kelas yang Diikuti -->
            <div class="form-group">
                <label for="class_id" class="block text-gray-700 font-semibold">Kelas</label>
                <select name="class_id" id="class_id" class="form-control w-full p-3 border border-gray-300 rounded-md"
                    required>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id_class }}"
                            {{ old('class_id', $user->enrollments->first()->class_id) == $class->id_class ? 'selected' : '' }}>
                            {{ $class->kelas }} - {{ $class->instruktur }} ({{ $class->jadwal->hari }} -
                            {{ $class->jadwal->waktu_mulai }} to {{ $class->jadwal->waktu_selesai }})
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tombol Submit -->
            <div class="form-group">
                <button type="submit" class="bg-sky-900 text-white font-semibold p-3 rounded-md hover:bg-sky-900">Update
                    User</button>
            </div>
        </form>
    </div>
@endsection
