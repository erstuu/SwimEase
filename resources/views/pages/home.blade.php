@extends('layouts.index')
@section('content')
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('img/swim.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-20 flex justify-center items-center">
            <div class="text-center text-white px-6 md:px-12 animate_animated animate_fadeIn">
                <h1 class="text-5xl lg:text-6xl font-extrabold mb-4">AYO BERGABUNG </h1>
                <h1 class="text-5xl lg:text-6xl font-extrabold mb-4">DI LES BERENANG SWIMEASE</h1>
                <p class="text-lg lg:text-xl mb-8">Bersama Coach Terbaik dan Berpengalaman.</p>
                <a href="#" data-scroll-nav="1"
                    class="px-8 text-md py-4 border-0 shadow-lg bg-sky-700 text-white rounded-full transition duration-300 ease-in-out">
                    Mulai Menjelajah
                </a>
            </div>
        </div>
    </div>
    <div class="bg-white p-10">
        <div class="text-center mb-8">
            <h1 class="font-bold text-4xl mb-2 text-black "> PROGRAM KAMI</h1>
            <p class="font-light text-black">Kami menawarkan berbagai program berenang yang dirancang khusus untuk memenuhi
                <br>
                kebutuhan setiap peserta, dari pemula hingga tingkat lanjut.
                Apakah Anda ingin belajar berenang untuk <br> pertama kalinya, meningkatkan teknik, atau mempersiapkan diri
                untuk
                kompetisi, kami memiliki program yang sesuai untuk Anda.
            </p>
        </div>
        <div class="flex justify-center items-center">
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-5">
                <div class="card rounded-lg p-4 bg-gray-100 shadow-lg lg:w-96">
                    <img src="{{ asset('img/1.png') }}" alt="" class="rounded-lg">
                    <h1 class="mt-3 text-black font-bold text-xl"> Kelas Anak-Anak</h1>
                    <p class="text-gray-700 mt-2">Fun swimming dengan metode belajar yang menyenangkan. Anak-anak akan
                        diajarkan
                        dasar-dasar berenang seperti mengapung, tendangan, dan teknik pernapasan dalam suasana yang ceria
                        dan
                        interaktif.</p>
                </div>
                <div class="card rounded-lg p-4 bg-gray-100 shadow-lg lg:w-96">
                    <img src="{{ asset('img/2.png') }}" alt="" class="rounded-lg">
                    <h1 class="mt-3 text-black font-bold text-xl"> Kelas Dewasa</h1>
                    <p class="text-gray-700 mt-2">Fokus pada teknik, stamina, dan kebugaran. Program ini dirancang untuk
                        pemula
                        yang ingin mengatasi rasa takut air atau untuk mereka yang ingin meningkatkan teknik berenang.
                    </p>
                </div>
                <div class="card rounded-lg p-4 bg-gray-100 shadow-lg lg:w-96">
                    <img src="{{ asset('img/3.png') }}" alt="" class="rounded-lg">
                    <h1 class="mt-3 text-black font-bold text-xl"> Kursus Kompetisi</h1>
                    <p class="text-gray-700 mt-2">Pelatihan intensif untuk calon atlet. Sesi ini mencakup pengembangan
                        teknik,
                        strategi balap, dan peningkatan kecepatan serta kekuatan fisik untuk kompetisi profesional.</p>
                </div>
            </div>
        </div>

        <div class="lg:p-10 pt-10">
            <div class="grid lg:grid-cols-2 grid-cols-1 lg:gap-20 gap-3">
                <div class="mt-10">
                    <img src="{{ asset('img/jadwal.png') }}" alt="" class="rounded-lg">
                </div>
                <div class="lg:mt-7 mt-1">
                    <h1 class="font-bold text-3xl text-sky-950"> KENAPA BELAJAR DI SWIMEASE ?</h1>
                    <div class="flex lg:flex-row flex-col lg:justify-start justify-center items-center space-x-5 mt-7">
                        <div class="bg-primaryy rounded-full w-16 h-16 flex justify-center">
                            <i class="fa-solid fa-1 text-white text-3xl pt-3"></i>
                        </div>
                        <div class="lg:text-start lg:mt-0 mt-3 text-center">
                            <h1 class="font-bold text-xl text-black"> Pelatih Profesional </h1>
                            <p class="text-gray-600 font-medium text-lg">Tim pelatih kami memiliki sertifikasi nasional dan
                                internasional.
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col lg:justify-start justify-center items-center space-x-5 mt-7">
                        <div class="bg-primaryy rounded-full w-16 h-16 flex justify-center">
                            <i class="fa-solid fa-2 text-white text-3xl pt-3"></i>
                        </div>
                        <div class="lg:text-start lg:mt-0 mt-3 text-center">
                            <h1 class="font-bold text-xl text-black"> Program untuk Semua </h1>
                            <p class="text-gray-600 font-medium text-lg">Kami menyediakan kelas untuk anak-anak, remaja,
                                hingga dewasa.
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col lg:justify-start justify-center items-center space-x-5 mt-7">
                        <div class="bg-primaryy rounded-full w-16 h-16 flex justify-center">
                            <i class="fa-solid fa-3 text-white text-3xl pt-3"></i>
                        </div>
                        <div class="lg:text-start lg:mt-0 mt-3 text-center">
                            <h1 class="font-bold text-xl text-black"> Lingkungan Aman </h1>
                            <p class="text-gray-600 font-medium text-lg">Kolam renang dengan standar kebersihan dan keamanan
                                tinggi.
                        </div>
                    </div>
                    <div class="flex lg:flex-row flex-col lg:justify-start justify-center items-center space-x-5 mt-7">
                        <div class="bg-primaryy rounded-full w-16 h-16 flex justify-center">
                            <i class="fa-solid fa-4 text-white text-3xl pt-3"></i>
                        </div>
                        <div class="lg:text-start lg:mt-0 mt-3 text-center">
                            <h1 class="font-bold text-xl text-black"> Jadwal Fleksibel </h1>
                            <p class="text-gray-600 font-medium text-lg">Sesi yang dapat disesuaikan dengan kebutuhan Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:pr-28 lg:pl-28  mt-10">
            <div class="bg-slate-100 rounded-3xl shadow-md p-10">
                <div class="text-center">
                    <h1 class="font-extrabold lg:text-3xl text-lg text-black"> Temukan Program Yang Tepat Untuk Anda ! </h1>
                    <p class="font-light text-gray-700 mt-5"> Dengan berbagai pilihan kelas mulai dari anak-anak hingga dewasa, kami memiliki program yang sesuai  </p>
                    <a href="">
                        <div class="flex justify-center mt-5">
                            <div class="bg-primaryy w-60 py-4 text-white rounded-3xl font-semibold">
                                <h1> Lihat Semua Program <i class="fa-solid fa-arrow-right"></i></h1>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
@endsection
