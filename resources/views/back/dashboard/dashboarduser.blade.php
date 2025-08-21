@extends('template.belakang')

@section('konten')
<div class="row">
  <!-- Grafik -->
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card h-100">
      <div class="card-body">
        <h4 class="card-title">Grafik Tugas</h4>
        <canvas id="taskBarChart"></canvas>
      </div>
    </div>
  </div>

  <!-- Carousel Banner -->
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card h-100">
      <div class="card-body p-0">
        <h4 class="card-title" style="margin-left: 10px; margin-top: 10px">Banner Info</h4>
        <div id="carouselBanner" class="carousel slide h-100" data-bs-ride="carousel">
          <div class="carousel-inner rounded h-100">
            @foreach($bannerinfo as $items)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ asset('storage/' . $items->foto) }}" 
                     class="d-block w-100 h-100 object-fit-cover" 
                     alt="Banner">

                @if($items->title)
                  <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $items->title }}</h5>
                  </div>
                @endif
              </div>
            @endforeach
          </div>

          <!-- Navigasi -->
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <div class="col-md-12">
    <div class="card h-100">
        <div class="d-flex justify-content-between align-items-center me-4">
            <h5 class="card-header">Data Tugas</h5>
            
        </div>

        <div class="table-responsive text-nowrap mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tugas Harian</th>
                        <th>Tugas Mingguan</th>
                        <th>Tugas Bulanan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                  
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $tugasharian }}</td>
                        <td>{{ $tugasmingguan }}</td>
                        <td>{{ $tugasbulanan }}</td>

                    </tr>
                        
                  
                </tbody>
            </table>
      </div>
</div>

<!-- Tambahkan Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('taskBarChart').getContext('2d');

  const taskBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Tugas Harian', 'Tugas Mingguan', 'Tugas Bulanan'],
      datasets: [{
        label: 'Jumlah Tugas',
        data: [
          {{ $tugasharian }},
          {{ $tugasmingguan }},
          {{ $tugasbulanan }}
        ],
        backgroundColor: [
          'rgba(255, 182, 193, 0.7)',
          'rgba(221, 160, 221, 0.7)',
          'rgba(135, 206, 235, 0.7)'
        ],
        borderRadius: 5,
        barPercentage: 0.4,
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
          display: false
        }
      }
    }
  });
</script>
@endsection
