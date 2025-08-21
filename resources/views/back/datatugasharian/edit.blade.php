@extends('template.belakang')

@section('konten')
<div class="row">
  <div class="col-8 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Tugas Harian</h4>

        <form action="{{ route('updatedatatugasharian', $datatugasharian->id) }}" method="POST">
          @method('PUT')
          @csrf

          <div class="mb-3">
            <label for="datatugasharian" class="form-label">Nama Tugas Harian</label>
            <input value="{{ $datatugasharian->nama_tugas }}" type="text" name="nama_tugas" class="form-control" placeholder="Masukkan Nama Tugas Harian..." required>
            @error('nama_tugas')
                <small>{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('datatugasharian') }}" class="btn btn-secondary">Batal</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
