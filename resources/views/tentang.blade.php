@extends('layouts.index')
@section('content')
<div class="bg-white py-10">
    <div class="text-center mb-10">
        <h1 class="font-bold text-4xl mb-4 text-black">Tentang Kami</h1>
        <p class="font-light text-gray-700 max-w-3xl mx-auto">“Les Berenang” berdiri dengan misi untuk membantu setiap
            individu
            menguasai keterampilan berenang dengan percaya diri. Kami percaya bahwa berenang bukan hanya olahraga,
            tetapi juga keterampilan hidup yang penting untuk keamanan dan kesehatan.</p>
    </div>
    <div class="lg:px-28 px-5 space-y-8">
        <div class="bg-gray-100 rounded-lg shadow-md p-6">
            <h2 class="font-bold text-2xl text-black mb-4 text-center">Tentang Kami</h2>
            <p class="text-gray-700">Kami adalah pusat pelatihan berenang yang menawarkan kelas untuk semua usia dan
                tingkat keahlian.
                Dengan tim pelatih bersertifikasi dan fasilitas berstandar tinggi, kami memastikan pengalaman belajar
                yang aman,
                menyenangkan, dan efektif.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div class="bg-gray-100 rounded-lg shadow-md p-6">
                <h2 class="font-bold text-2xl text-black mb-4 text-center">Visi Kami</h2>
                <p class="text-gray-700">Menciptakan generasi yang percaya diri di dalam dan di luar air.</p>
            </div>
            <div class="bg-gray-100 rounded-lg shadow-md p-6">
                <h2 class="font-bold text-2xl text-black mb-4 text-center">Misi Kami</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li>Menyediakan pelatihan berenang berkualitas tinggi untuk semua kalangan.</li>
                    <li>Mendorong kebugaran dan gaya hidup sehat melalui olahraga berenang.</li>
                    <li>Membantu mengatasi rasa takut terhadap air dengan metode belajar yang aman dan ramah.</li>
                </ul>
            </div>
        </div>
        <div class="bg-gray-100 rounded-lg shadow-md p-6">
            <h2 class="font-bold text-2xl text-black mb-4 text-center">Keunggulan Kami</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li>Pelatih profesional dengan sertifikasi nasional dan internasional.</li>
                <li>Program yang disesuaikan untuk kebutuhan peserta, mulai dari pemula hingga atlet.</li>
                <li>Lingkungan belajar yang bersih, aman, dan mendukung.</li>
            </ul>
        </div>
        <div class="bg-gray-100 rounded-lg shadow-md p-6">
            <h2 class="font-bold text-2xl text-black mb-4 text-center">Kenapa Memilih Kami?</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li><span class="font-bold">Metode Modern:</span> Teknik pengajaran berbasis penelitian terbaru.</li>
                <li><span class="font-bold">Fleksibilitas:</span> Jadwal kelas yang dapat disesuaikan.</li>
                <li><span class="font-bold">Komunitas:</span> Lingkungan positif untuk belajar dan bertumbuh bersama.
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection