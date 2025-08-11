@extends('template.belakang')

@section('konten')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $tugasharian }}</h4>
            <canvas id="taskBarChart"></canvas>
        </div>
    </div>
</div>

<!-- Tambahkan Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('taskBarChart').getContext('2d');

  const taskBarChart = new Chart(ctx, {
    type: 'bar', // grafik batang vertikal
    data: {
      labels: ['Tugas Harian', 'Tugas Mingguan', 'Tugas Bulanan'],
      datasets: [{
        label: 'Jumlah Tugas',
        // data: [
        //     {{ $tugasharian }},
        //     {{ $tugasmingguan}},
        //     {{ $tugasbulanan}},
        // ], 
        backgroundColor: [
            'rgba(255, 182, 193, 0.7)',
            'rgba(221, 160, 221, 0.7)',
            'rgba(135, 206, 235, 0.7)'
       ],
        borderRadius: 5,
        barPercentage: 0.6,
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
            stepSize: 1
          }
        }
      },
      plugins: {
        legend: {
          display: true
        }
      }
    }
  });
</script>
@endsection
