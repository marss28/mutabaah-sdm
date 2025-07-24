@extends('template.belakang')

@section('konten')
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Tugas Harian</h4>

        <form action="{{ route('storedatatugasharian') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="datatugasharian" class="form-label">Nama Tugas Harian</label>
            <input type="text" name="nama_tugas" class="form-control" placeholder="Masukkan Nama Tugas..." required>
            @error('datatugasharian')
                <small>{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('datatugasharian') }}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
