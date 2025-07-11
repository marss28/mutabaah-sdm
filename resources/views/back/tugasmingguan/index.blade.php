@extends('template.belakang')

@section('konten')

<div class="container mt-3">
    <div class="card">
                <div class="d-flex justify-content-between align-items-center me-4">
                <h5 class="card-header">Tugas Mingguan</h5>
                <a href="{{ route('formtugasmingguan') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
                
                </div>
                
                <div class="table-responsive text-nowrap mt-3">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Data Tugas Mingguan </th>
                        <th> Waktu Tugas </th>
                        <th> Deskripsi </th>
                        <th> Aksi </th>
                      </tr>
                    </thead>
                    {{-- <tbody class="table-border-bottom-0">
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody> --}}

                    @php

                    $no =1;
                    @endphp

                    @foreach ( $tugasmingguan as $items)
 
                    <tr>
                      <td> {{ $no++}} </td>
                      <td> {{ $items->data_tugas_mingguan}}</td>
                      <td> {{ $items->waktu_tugas}}</td>
                      <td> {{ $items->deskripsi}}</td>
                      <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                      </td>

                    </tr>
                    @endforeach

                  </table>

                  <div class="d-flex justify-content-center">
                        {{ $tugasmingguan->links() }}
                      </div>
                </div>
              </div>
              </div>
@endsection