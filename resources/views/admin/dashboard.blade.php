@extends('layouts.admin.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
        <h2 class="mb-4">Grafik Pengunjung per Bulan ({{ $year }})</h2>

        <!-- Filter Tahun -->
        <form method="GET" action="{{ route('admin.dashboard') }}" class="mb-4">
            <div class="form-group">
                <label for="year">Pilih Tahun:</label>
                <select name="year" id="year" class="form-control w-auto d-inline-block" onchange="this.form.submit()">
                    @for ($y = date('Y'); $y >= date('Y') - 5; $y--)
                        <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>{{ $y }}</option>
                    @endfor
                </select>
            </div>
        </form>

        @if(count($labels) > 0)
            <canvas id="barChart" height="100"></canvas>
        @else
            <p class="text-muted">Tidak ada data pengunjung untuk tahun {{ $year }}.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const labels = {!! json_encode($labels) !!};
            const data = {!! json_encode($data) !!};

            if (labels.length > 0) {
                const ctx = document.getElementById('barChart').getContext('2d');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Jumlah Pengunjung per Bulan',
                            data: data,
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1
                                }
                            }
                        },
                        plugins: {
                            legend: { display: false }
                        }
                    }
                });
            }
        });
    </script>
@endsection
