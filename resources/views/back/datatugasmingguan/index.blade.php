@extends ('template.belakang')

@section('konten')
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">

        <div class="d-flex justify-content-between align-items-center">
          <h4 class="card-title">Nama Tugas Mingguan</h4>
          <a href="{{ route('formdatatugasmingguan') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Tugas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datatugasmingguan as $index => $tugas)
              <tr>
                <td>{{ $datatugasmingguan->firstItem() + $index }}</td>
                <td>{{ $tugas->nama_tugas }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('editdatatugasmingguan', $tugas->id) }}">
                        <i class="bx bx-edit-alt me-1"></i> Edit
                      </a>
                      <form action="{{ route('deletedatatugasmingguan', $tugas->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
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

        <div class="d-flex justify-content-center small-pagination mt-3"style="margin-right: 150px">
                    {{ $datatugasmingguan->links('pagination::bootstrap-5') }}

                   </div>

      </div>
    </div>
  </div>
</div>
@endsection
