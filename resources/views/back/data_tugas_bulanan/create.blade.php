@extends('template.belakang')

@section('konten')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card body">
                <div class="card-tittle">Tambah Data Tugas Bulanan</div>

                <form action="{{ route('storedatatugasbulanan') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="datatugasbulanan" class="form-label"> data tugas bulanan</label>
                        <input type="text" name="datatugasbulanan" class="form-control" placeholder="data tugas bulanan" required>
                        @error('datatugasbulanan')
                            <small {{ $message }}></small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary"> simpan </button>
                    <a href="{{ route('datatugasbulanan') }}" class="btn btn-secondary">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>