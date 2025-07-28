@extends('template.belakang')

@section('konten')
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Data Tugas Bulanan</h4>

        <form action="{{ route('updatedatatugasbulanan', $datatugasbulanan->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="tugas_bulanan" class="form-label">Tugas Bulanan</label>
            <input type="text" name="tugas_bulanan" class="form-control" value="{{ $datatugasbulanan->tugas_bulanan }}" required>
            @error('tugas_bulanan')
                <small>{{ $message }}</small>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ route('datatugasbulanan') }}" class="btn btn-secondary">Kembali</a>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection
