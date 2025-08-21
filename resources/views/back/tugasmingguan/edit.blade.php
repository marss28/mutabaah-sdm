@extends('template.belakang')

@section('konten')
<div class="row mt-2">
    <div class="col-8">
        <div class="card mb-4">
        <h5 class="card-header">Edit Data</h5>
        <div class="card-body">
            
           <form id="form-edit" method="POST" action="{{ route('updatetugasmingguan', $target->id) }}">
    @csrf
    @method('PUT')



                       <div class="form-group">
    <label style="margin-bottom: 20px;">Nama Tugas Mingguan</label>
    <div class="row" style="margin-bottom:10px">
        @foreach ($datatugasmingguan as $item)
        <div class="col-md-4">
            <div class="form-check d-flex align-items-center">
                <input 
                    class="form-check-input me-2" 
                    type="checkbox" 
                    name="datatugasmingguan_id[]" 
                    value="{{ $item->id }}" 
                    id="checkbox_{{ $item->id }}"
                    {{ in_array($item->id, old('datatugasmingguan_id', $selected ?? [])) ? 'checked' : '' }}>
                <label class="form-check-label" for="checkbox_{{ $item->id }}">
                    {{ $item->nama_tugas }}
                </label>
            </div>
        </div>
        @endforeach
    </div>
</div>


                <div class="mb-3">
                    <label>Waktu Tugas</label>
                    <input type="time" name="waktu_tugas" class="form-control" value="{{ $target->waktu_tugas }}">

                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" value="{{ $target->deskripsi }}">
                </div>

                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            </div>
        </div>
    </div>
</div>
{{-- <script>
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
</script> --}}

@endsection
