@extends('template.belakang')

@section('konten')

<div class="roe mt-3">
    <div class="card ">
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
                              <a class="dropdown-item" href="{{ route('edittugasmingguan', $items->id ) }}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <form action="{{ route('deletetugasmingguan', $items->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger">
                                    <i class="bx bx-trash me-1"></i> Delete
                                </button>
                            </form>
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
              </div>
@endsection