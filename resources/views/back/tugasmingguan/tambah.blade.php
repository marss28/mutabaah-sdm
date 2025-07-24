@extends('template.belakang')

@section('konten')

<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Data</h5>
            </div>

            {{-- FORM dimulai di sini --}}
            <form method="POST" action="{{ route('storetugasmingguan') }}">
                @csrf
                <div class="card-body">

                    <div class="form-group mb-3">
                        <label>Nama Tugas Mingguan</label>
                        <select name="data_tugas_mingguan" id="nama_tugas" class="form-control">
                            <option value="" selected disabled>-- Pilih Tugas --</option>
                            @foreach ($datatugasmingguan as $item)
                                <option value="{{ $item->id }}" {{ old('data_tugas_mingguan') == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama_tugas }}
                                </option>
                            @endforeach
                        </select>
                        @error('data_tugas_mingguan')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Waktu Tugas</label>
                        <input type="time" name="waktu_tugas" class="form-control" value="{{ old('waktu_tugas') }}">
                        @error('waktu_tugas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
            {{-- FORM ditutup di sini --}}
        </div>
    </div>
</div>

@endsection
