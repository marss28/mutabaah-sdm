@extends('template.belakang')

@section('konten')
<div class="row">
  <div class="col-8 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tambah Data Tugas Bulanan</h4>

        <form action="{{ route('storedatatugasbulanan') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label for="storedatatugasBulanan" class="form-label">Data Tugas Bulanan</label>
            <input type="text" name="tugas_bulanan" class="form-control" placeholder="Data Tugas Bulanan..." required>
            @error('tugas_bulanan')
                <small>{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
          <a href="{{ route('datatugasbulanan') }}" class="btn btn-secondary">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
