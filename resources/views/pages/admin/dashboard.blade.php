@extends('layouts.admin')
@section('content')
    <div class="mt-6 px-6">
        <!-- Judul Dashboard -->
        <h1 class="font-bold text-sky-900 text-4xl">Dashboard Admin SwimEase</h1>
        <p class="mt-2 text-sky-700 font-light">Selamat Datang di Pengelolaan Data SwimEase</p>

        <!-- Analytics Overview -->
        <h1 class="mt-8 text-sky-900 font-semibold text-2xl">Analytics Overview</h1>
        <div class="grid sm:grid-cols-4 grid-cols-1 gap-6 mt-4 text-center">
            <div class="card bg-sky-100 p-5 rounded-lg shadow-md">
                <h1 class="text-sky-900 font-bold text-3xl">{{ $user }}</h1>
                <h1 class="text-sky-800 font-semibold text-lg">JUMLAH PENDAFTAR</h1>
            </div>
            <div class="card bg-sky-100 p-5 rounded-lg shadow-md">
                <h1 class="text-sky-900 font-bold text-3xl">{{ $jumlahKelasProfesional }}</h1>
                <h1 class="text-sky-800 font-semibold text-lg">PROFESIONAL</h1>
            </div>
            <div class="card bg-sky-100 p-5 rounded-lg shadow-md">
                <h1 class="text-sky-900 font-bold text-3xl">{{ $jumlahKelasAnak }}</h1>
                <h1 class="text-sky-800 font-semibold text-lg">ANAK - ANAK</h1>
            </div>
            <div class="card bg-sky-100 p-5 rounded-lg shadow-md">
                <h1 class="text-sky-900 font-bold text-3xl">{{ $jumlahKelasDewasa }}</h1>
                <h1 class="text-sky-800 font-semibold text-lg">DEWASA</h1>
            </div>
        </div>

        <!-- Statistik -->
        <div class="mt-8">
            <h1 class="text-sky-900 font-semibold text-2xl mb-4">Statistik</h1>
            <div class="p-6 shadow-md card bg-sky-50">
                <canvas id="statisticChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('statisticChart').getContext('2d');

            // Data from the controller
            const labels = @json($labels); // ['Anak-anak', 'Professional', 'Dewasa']
            const data = @json($data);     // [Anak-anak count, Professional count, Dewasa count]

            const config = {
                type: 'bar', // Chart type (bar, line, pie, etc.)
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Swimming Classes by Type',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)', // Anak-anak
                            'rgba(255, 200, 124, 1)', // Professional
                            'rgba(75, 192, 192, 0.2)'  // Dewasa
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)', // Anak-anak
                            'rgba(255, 200, 124, 1)', // Professional
                            'rgba(75, 192, 192, 1)'  // Dewasa
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        title: {
                            display: true,
                            text: 'Swimming Classes by Type'
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                // Format y-axis labels as whole numbers
                                callback: function(value) {
                                    if (value % 1 === 0) { // Check if the value is a whole number
                                        return value;
                                    }
                                }
                            }
                        }
                    }
                }
            };

            const chart = new Chart(ctx, config);
        });
    </script>
@endsection


