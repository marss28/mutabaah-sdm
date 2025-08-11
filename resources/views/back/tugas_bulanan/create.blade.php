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
                <label style="margin-bottom: 20px;">Nama Tugas Bulanan</label>
                <div class="row" style="margin-bottom:10px">
                    @foreach ($datatugasbulanan as $item)
                    <div class="col-md-4"> {{-- kamu bisa ubah ke col-md-6 atau col-12 sesuai lebar yang diinginkan --}}
                        <div class="form-check d-flex align-items-center">
                        <input 
                            class="form-check-input me-2" 
                            type="checkbox" 
                            name="datatugasbulanan_id[]" 
                            value="{{ $item->id }}" 
                            id="checkbox_{{ $item->id }}">
                        <label class="form-check-label" for="checkbox_{{ $item->id }}">
                            {{ $item->tugas_bulanan }}
                        </label>
                        </div>
                    </div>
                    @endforeach
                </div>
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
