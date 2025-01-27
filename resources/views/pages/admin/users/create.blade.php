@extends('layouts.admin')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800">Add User and Enrollment</h1>

        <!-- Error Messages -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mt-6 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Start -->
        <form action="{{ route('users.store') }}" method="POST" class="mt-6">
            @csrf

            <!-- Name Field -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('name') }}" required>
            </div>

            <!-- Email Field -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('email') }}" required>
            </div>

            <!-- Phone Number Field -->
            <div class="mb-4">
                <label for="no_telepon" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" name="no_telepon" id="no_telepon"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('no_telepon') }}">
            </div>

            <!-- Address Field -->
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Address</label>
                <textarea name="alamat" id="alamat"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('alamat') }}</textarea>
            </div>

            <!-- Date of Birth Field -->
            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="{{ old('tanggal_lahir') }}" required>
            </div>

            <!-- Gender Field -->
            <div class="mb-4">
                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Gender</label>
                <select name="jenis_kelamin" id="jenis_kelamin"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="L">Male</option>
                    <option value="P">Female</option>
                </select>
            </div>

            <!-- Swimming Class and Schedule Field -->
            <div class="mb-4">
                <label for="class_id" class="block text-sm font-medium text-gray-700">Swimming Class and Schedule</label>
                <select name="class_id" id="class_id"
                    class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
                    <option value="">-- Select Class --</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id_class }}">
                            {{ $class->kelas }} - {{ $class->deskripsi }} (Schedule: {{ $class->jadwal->hari ?? 'N/A' }})
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex space-x-4">
                <button type="submit"
                    class="px-6 py-3 bg-sky-900 text-white rounded-lg hover:bg-sky-900 focus:outline-none focus:ring-2 focus:bg-sky-900">Save</button>
                <a href="{{ route('users.index') }}"
                    class="px-6 py-3 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500">Cancel</a>
            </div>
        </form>
    </div>
@endsection
