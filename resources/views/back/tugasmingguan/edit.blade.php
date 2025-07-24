@extends('template.belakang')

@section('konten')
<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
        <h5 class="card-header">Edit Data</h5>
        <div class="card-body">
            <form method="POST" action="{{ route('updatetugasmingguan', $data->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label>Data Tugas Mingguan</label>
                    <input type="text" name="data_tugas_mingguan" class="form-control" value="{{ $data->data_tugas_mingguan }}">
                </div>

                <div class="mb-3">
                    <label>Waktu Tugas</label>
                    <input type="time" name="waktu_tugas" class="form-control" value="{{ $data->waktu_tugas }}">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $data->deskripsi }}">
                </div>

                <div class="form-group">
                <label for="kategori_id">Nama Tugas Mingguan</label>
                <select name="data_tugas_mingguan" class="form-control">
                    @foreach ($datatugasmingguan as $item)
                        <option value="{{ $item->id }}" {{ $data->data_tugas_mingguan == $item->id ? 'selected' : '' }}>
                            {{ $item->nama_tugas }}
                        </option>
                    @endforeach
                </select>
                </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('tugasmingguan') }}" class="btn btn-dark">Cancel</a>


            </div>
        </div>
    </div>
</div>
@endsection
