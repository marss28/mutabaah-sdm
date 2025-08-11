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
                <div class="row ps-2"> {{-- padding start agar nempel kiri --}}
                    @foreach ($tugasbulanan as $item)
                    <div class="col-md-4 mb-2"> {{-- Ubah col-md-* sesuai banyaknya kolom --}}
                        <div class="form-check d-flex align-items-center">
                        <input 
                            class="form-check-input me-2" 
                            type="checkbox" 
                            name="tugas_bulanan_id[]" 
                            value="{{ $item->id }}" 
                            id="checkbox_{{ $item->id }}">
                        <label class="form-check-label" for="checkbox_{{ $item->id }}">
                            {{ $item->tugas_bulanan }}
                        </label>
                        </div>
                    </div>
                    @endforeach
                </div>
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
