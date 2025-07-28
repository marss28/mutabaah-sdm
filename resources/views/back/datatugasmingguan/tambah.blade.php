@extends('template.belakang')

@section('konten')
<div class="card">
    <div class="card-body">
        <h4>Tambah Data Tugas Mingguan</h4>

        <form action="{{ route('storedatatugasmingguan') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_tugas" class="form-label">Nama Tugas Mingguan</label>
                <input type="text" name="nama_tugas" class="form-control" placeholder="Masukkan Nama Data...">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('datatugasmingguan') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
