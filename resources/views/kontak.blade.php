@extends('layouts.index')
@section('content')
<div class="bg-white py-10">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-bold text-sky-950">Kami Siap Membantu Anda!</h2>
            <p class="text-lg text-gray-700 mt-4">Jangan ragu untuk menghubungi kami melalui salah satu saluran di bawah
                ini untuk informasi lebih lanjut atau pendaftaran.</p>
        </div>
        <div class="bg-gray-100 rounded-lg shadow-lg p-8">
            <div class="grid lg:grid-cols-2 grid-cols-1 items-center gap-6">
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="text-sky-950 text-3xl">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Lokasi</h3>
                            <p>Jl. Cigunung No.10, Sukabumi</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-sky-950 text-3xl">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Jam Operasional</h3>
                            <p>Senin - Jumat: 08.00 - 17.00</p>
                            <p>Sabtu - Minggu: 07.00 - 18.00</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-sky-950 text-3xl">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Telepon</h3>
                            <p>+62 8137399363</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="text-sky-950 text-3xl">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold">Email</h3>
                            <p>swimease@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="relative h-96 w-full">
                    <iframe class="absolute inset-0 w-full h-full rounded-lg"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17107.172084833488!2d106.94163967274726!3d-6.92208838428589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e683633fcd15215%3A0x261f558445241e0c!2sUniversitas%20Muhammadiyah%20Sukabumi!5e0!3m2!1sid!2sid!4v1737885281362!5m2!1sid!2"
                        style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection