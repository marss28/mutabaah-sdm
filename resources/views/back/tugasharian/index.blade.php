@extends('template.belakang')

@section('konten')

<div class="row mt-3">
    <div class="card">
        <!-- Header Card -->
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Tugas Harian</h5>
            <a href="{{ route('formtugasharian') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
        </div>

        <!-- Tabel -->
        <div class="table-responsive text-nowrap mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Tugas Harian</th>
                        <th>Waktu Tugas</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($tugasharian as $items)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td> @php
                        // pecah string id jadi array
                        $ids = explode(',', $items->datatugasharian_id);
                        // ambil semua nama_tugas dari tabel datatugasharian
                        $names = \App\Models\Datatugasharian::whereIn('id', $ids)->pluck('nama_tugas')->toArray();
                    @endphp
                    {{ implode(', ', $names) }}</td>
                        <td>{{ $items->waktu_tugas }}</td>
                        <td>{{ $items->deskripsi }}</td>
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
                              <a class="dropdown-item" href="{{ route('edittugasharian', $items->id) }}">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </a>
                            </li>
                            <li>
                              <form action="{{ route('deletetugasharian', $items->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
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

            <!-- Pagination -->
            <div class="d-flex justify-content-center small-pagination mt-3" style="margin-right: 200px">
                    {{ $tugasharian->links('pagination::bootstrap-5') }}

                </div>
        </div>
    </div>
</div>

@endsection
