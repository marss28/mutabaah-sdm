@extends('template.belakang')

@section('konten')

<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Tambah Data</h5>
            </div>

            {{-- FORM dimulai di sini --}}
            <form method="POST" action="{{ route('storetugasbulanan') }}">
                @csrf
                <div class="card-body">

                    {{-- Error Global --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                     <div class="form-group">
                            <label>Nama Tugas Bulanan</label>
                            <select name="datatugasbulanan_id" id="tugas_bulanan" class="form-control">
                              <option value="">-- Pilih Nama Tugas -- </option>
                              @foreach ($datatugasbulanan as $item)
                                <option value="{{ $item->id }}">{{ $item->tugas_bulanan }}</option>
                              @endforeach
                            </select>
                            @error('datatugasbulanan_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                    <div class="mb-3">
                        <label class="form-label">Waktu Tugas</label>
                        <input type="time" name="waktu_tugas" class="form-control" value="{{ old('waktu_tugas') }}">
                        @error('waktu_tugas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi..." value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form> {{-- FORM ditutup di sini --}}
        </div>
    </div>
</div>

@endsection
