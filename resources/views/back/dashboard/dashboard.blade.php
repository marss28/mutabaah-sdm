@extends('template.belakang')


@section('konten')
@auth
    @if(Auth::user()->role === 'admin')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


<div class="row ">
  <div class="col-md-6">
  <div class="card h-100">
    <div class="card-body text-center md-5">
        <h5 class="card-title">Grafik Tugas</h5>
        <center>
        <canvas id="donutChart" style="width: 250px; height: 300px;"></canvas>
        </center>
    </div>
  </div>
</div>

<div class="col-md-6" style="margin-top: 5px;">
  <div class="row g-3">
  <!-- Total Users -->
  <div class="col-md-6 col-sm-9 mb-6">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Total Users</div>
            <div class="fs-3 fw-bold"> {{ $totalUser }} </div>
          </div>
          <div class="bg-primary text-white rounded-circle p-2">
            <i class="bx bx-user fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-primary" role="progressbar" >{{ $totalUser }}</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Harian -->
  <div class="col-md-6 col-sm-9 mb-6">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Harian</div>
            <div class="fs-3 fw-bold">{{ $tugasharian }}</div>
          </div>
          <div class="bg-info text-white rounded-circle p-2">
            <i class="bx bx-calendar-check fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-info" role="progressbar">{{ $tugasharian }}</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Mingguan -->
  <div class="col-md-6 col-sm-9 mb-6" style="margin-top: 20px">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Mingguan</div>
            <div class="fs-3 fw-bold">{{ $tugasmingguan }}</div>
          </div>
          <div class="bg-success text-white rounded-circle p-2">
            <i class="bx bx-calendar-week fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-success" role="progressbar">{{ $tugasmingguan }}</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Bulanan -->
  <div class="col-md-6 col-sm-9 mb-6" style="margin-top:20px">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Bulanan</div>
            <div class="fs-3 fw-bold">{{ $tugasbulanan }}</div>
          </div>
          <div class="bg-danger text-white rounded-circle p-2">
            <i class="bx bx-calendar-event fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-danger" role="progressbar" >{{ $tugasbulanan }}</div>
        </div>
      </div>
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
            <a href="{{ route('tugas.export') }}" class="btn btn-success">Export Excel</a>
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





<script>
const ctx = document.getElementById('donutChart').getContext('2d');
const donutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Tugas Harian', 'Tugas Mingguan', 'Tugas Bulanan'],
        datasets: [{
            label: 'Jumlah Tugas',
            data: [
              {{ $tugasharian }},
              {{ $tugasmingguan }},
              {{ $tugasbulanan }},
            ],
            backgroundColor: [
                'rgba(255, 182, 193, 0.7)',
                'rgba(221, 160, 221, 0.7)',
                'rgba(135, 206, 235, 0.7)'
            ],
            borderColor: [
                'rgba(54, 162, 235, 1)',
                'rgba(56, 172, 200, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
        plugins: {
            legend: {
                position: 'bottom',
            }
        }
    }
});
</script>

 @endif
@endauth



@endsection