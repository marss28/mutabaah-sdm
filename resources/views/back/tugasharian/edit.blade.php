@extends('template.belakang')

@section('konten')

<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
            <h5 class="card-header">Edit Data</h5>
            <div class="card-body">
                <form id="form-edit" method="POST" action="{{ route('updatetugasharian', $data->id) }}">
                    @csrf
                    @method('PUT')

                   <div class="form-group">
                            <label>Nama Tugas Harian</label>
                            <select name="datatugasharian_id" id="nama_tugas" class="form-control">
                              <option value="">-- Pilih Nama Tugas -- </option>
                              @foreach ($datatugasharian as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_tugas }}</option>
                              @endforeach
                            </select>
                            @error('nama_tugas_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        
                    <div class="mb-3">
                        <label>Waktu Tugas</label>
                        <input type="time" name="waktu_tugas" class="form-control" 
                               value="{{ $data->waktu_tugas }}" 
                               data-original="{{ $data->waktu_tugas }}">
                    </div>

                    <div class="mb-3">
                        <label>Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" 
                               value="{{ $data->deskripsi }}" 
                               data-original="{{ $data->deskripsi }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Script untuk deteksi perubahan tanpa SweetAlert --}}
<script>
    document.getElementById('form-edit').addEventListener('submit', function(e) {
        let isChanged = false;

        this.querySelectorAll('[data-original]').forEach(function(input) {
            if (input.value !== input.getAttribute('data-original')) {
                isChanged = true;
            }
        });

        if (!isChanged) {
            e.preventDefault(); // Cegah submit
            alert('Tidak ada perubahan yang dilakukan!');
        }
    });
</script>

@endsection
