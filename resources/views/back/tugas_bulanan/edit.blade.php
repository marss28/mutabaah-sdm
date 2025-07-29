@extends('template.belakang')

@section('konten')
<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
        <h5 class="card-header">Edit Data</h5>
        <div class="card-body">
            <form method="POST" action="{{ route('updatetugasbulanan', $tugasbulanan->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                            <label>Nama Tugas Bulanan</label>
                            <select name="datatugasbulanan_id" id="nama_tugas" class="form-control">
                              <option value="">-- Pilih Nama Tugas -- </option>
                              @foreach ($tugasbulanan as $item)
                                <option value="{{ $item->id }}">{{ $item->tugas_bulanan }}</option>
                              @endforeach
                            </select>
                            @error('tugas_bulanan_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                <div class="mb-3">
                    <label>Waktu Tugas</label>
                    <input type="time" name="waktu_tugas" class="form-control" value="{{ $tugasbulanan->waktu_tugas }}">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $tugasbulanan->deskripsi }}">
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
