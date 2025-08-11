
@extends('template.belakang')

@section('konten')
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Tugas Mingguan</h4>

        <form action="{{ route('updatedatatugasmingguan', $datatugasmingguan->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="nama_tugas" class="form-label">Nama Tugas</label>
        <input type="text" name="nama_tugas" class="form-control" value="{{ $datatugasmingguan->nama_tugas }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('datatugasmingguan') }}" class="btn btn-secondary">Batal</a>
</form>

      </div>
    </div>
  </div>
</div>
@endsection
