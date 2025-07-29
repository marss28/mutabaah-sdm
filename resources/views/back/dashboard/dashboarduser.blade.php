@extends('template.belakang')

@section('konten')

<div class="container"> 
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4 mt-100" style="margin-top: 15px; margin-right: 1px"  >
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Grafik Tugas</h5>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                          <div class="d-flex flex-column align-items-center gap-1">
                            <!-- bisa tambahkan judul kalau mau -->
                          </div>
                          <div id="orderStatisticsChart" style="margin-left: 4px"></div>
                        </div>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4 pb-1" style="margin-left: 10px">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-primary" >
                             <i class="menu-icon tf-icons bx bx-calendar-check" style="margin-left: 8px"></i>
                            </span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Data Tugas Harian</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold"></small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3" style="margin-left: 10px">
                            <span class="avatar-initial rounded bg-label-success">
                            <i class="menu-icon tf-icons bx bx-calendar-week" style="margin-left: 8px"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Data Tugas Mingguan</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold"></small>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex mb-4 pb-1">
                          <div class="avatar flex-shrink-0 me-3" style="margin-left: 10px">
                            <span class="avatar-initial rounded bg-label-info">
                          <i class="menu-icon tf-icons bx bx-calendar-event"style="margin-left: 8px"></i></span>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Data Tugas Bulanan</h6>
                            </div>
                            <div class="user-progress">
                              <small class="fw-semibold"></small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>

            @endsection
