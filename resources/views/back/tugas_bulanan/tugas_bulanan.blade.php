@extends('template.belakang')

@section('konten')

<div class="container mt-3">
    <div class="card">
        <div class="d-flex justify-content-between align-items-center me-4">
            <h5 class="card-header">Tugas Bulanan</h5>
            <a href="{{ route('formtugasbulanan') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
        </div>

        <div class="table-responsive text-nowrap mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Data Tugas Bulanan</th>
                        <th>Waktu Tugas</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tugasbulanan as $data)
                        <tr>
                            <td>{{ $data->data_tugas_bulanans }}</td>
                            <td>
                                @if($data->waktu_tugas)
                                    {{ \Carbon\Carbon::createFromFormat('H:i:s', $data->waktu_tugas)->format('H:i') }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada data.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

                  <div class="d-flex justify-content-center">
                        {{ $tugasbulanan->links() }}
                      </div>
                </div>
                </div>
              </div>
              </div>
@endsection