@extends('template.belakang')

@section('konten')
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Nama Tugas Bulanan</h4>
                    <a href="{{ route('formdatatugasbulanan') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
                    </div>


                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Nama Tugas Bulanan</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>

                          @php
                            $no = 1;
                          @endphp

                        @foreach($datatugasbulanan as $item)
                        
                        <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->tugas_bulanan }}</td>
                       <td class="position-relative">
                        <div class="dropdown dropdown-menu-end" >
                          <style>
                            .table-responsive {
                              overflow: initial; /* lebih aman daripada visible */
                            }

                            .dropdown-menu {
                              z-index: 9999 !important;
                            }

                            td.position-relative {
                              position: relative;
                            }
                          </style>

                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                          </button>
                          <ul class="dropdown-menu" style="z-index: 9999;">
                            <li>
                              <a class="dropdown-item" href="{{ route('editdatatugasbulanan', $item->id) }}">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </a>
                            </li>
                            <li>
                              <form action="{{ route('deletedatatugasbulanan', $item->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item text-danger">
                                  <i class="bx bx-trash me-1"></i> Delete
                                </button>
                              </form>
                            </li>
                          </ul>
                        </div>
                      </td>

                    </tr>
                    @endforeach
                     </tbody>
                    </table>


                    <div class="d-flex justify-content-center small-pagination mt-3" style="margin-right: 200px">
                    {{ $datatugasbulanan->links('pagination::bootstrap-5') }}

                   </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection