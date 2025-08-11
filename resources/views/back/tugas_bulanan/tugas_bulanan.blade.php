@extends('template.belakang')

@section('konten')

<div class="row mt-2">
    <div class="card">
        <div class="d-flex justify-content-between align-items-center me-4">
            <h5 class="card-header">Tugas Bulanan</h5>
            <a href="{{ route('formtugasbulanan') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
        </div>

        <div class="table-responsive text-nowrap mt-3">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Data Tugas Bulanan</th>
                        <th>Waktu Tugas</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @foreach ($tugasbulanan as $items)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $items->tugasbulanan->datatugasbulanan ?? '-' }}</td>
                        <td>{{ $items->waktu_tugas }}</td>
                        <td>{{ $items->deskripsi }}</td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('edittugasbulanan', $items->id) }}">
                                        <i class="bx bx-edit-alt me-1"></i> Edit
                                    </a>
                                    <form action="{{ route('deletetugasbulanan', $items->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
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