@extends('template.belakang')

@section('konten')

<div class="row">
  <!-- Total Users -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Total Users</div>
            <div class="fs-3 fw-bold"></div>
          </div>
          <div class="bg-primary text-white rounded-circle p-2">
            <i class="bx bx-user fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Harian -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Harian</div>
            <div class="fs-3 fw-bold"></div>
          </div>
          <div class="bg-info text-white rounded-circle p-2">
            <i class="bx bx-check-square fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-info" role="progressbar"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Mingguan -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Mingguan</div>
            <div class="fs-3 fw-bold"></div>
          </div>
          <div class="bg-success text-white rounded-circle p-2">
            <i class="bx bx-calendar fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-success" role="progressbar"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tugas Bulanan -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-2">
          <div>
            <div class="text-muted small">Tugas Bulanan</div>
            <div class="fs-3 fw-bold"></div>
          </div>
          <div class="bg-danger text-white rounded-circle p-2">
            <i class="bx bx-line-chart fs-4"></i>
          </div>
        </div>
        <div class="progress" style="height: 6px;">
          <div class="progress-bar bg-danger" role="progressbar" ></div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <!-- Total Users -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card text-center shadow-sm rounded-3">
      <div class="card-body">
        <div class="fs-6 text-muted">Total Users</div>
        <div class="fs-3 fw-bold">125</div>
      </div>
    </div>
  </div>

  <!-- Tugas Harian -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card text-center shadow-sm rounded-3">
      <div class="card-body">
        <div class="fs-6 text-muted">Tugas Harian</div>
        <div class="fs-3 fw-bold text-primary">80</div>
      </div>
    </div>
  </div>

  <!-- Tugas Mingguan -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card text-center shadow-sm rounded-3">
      <div class="card-body">
        <div class="fs-6 text-muted">Tugas Mingguan</div>
        <div class="fs-3 fw-bold text-success">40</div>
      </div>
    </div>
  </div>

  <!-- Tugas Bulanan -->
  <div class="col-md-3 col-sm-6 mb-4">
    <div class="card text-center shadow-sm rounded-3">
      <div class="card-body">
        <div class="fs-6 text-muted">Tugas Bulanan</div>
        <div class="fs-3 fw-bold text-danger">20</div>
      </div>
    </div>
  </div>
</div>



@endsection