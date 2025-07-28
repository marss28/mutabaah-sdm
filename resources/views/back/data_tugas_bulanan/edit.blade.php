@extends('template.belakang')

@section('konten')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="card-tittle"> Edit Data Tugas Bulanan</div>

                <form action="{{ route('updatetugasbulanan', $datatugasbulanan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="datatugasbulanan" class="form-label"> Data Tugas Bulanan </label>
                        <input type="text" name="datatugasbulanan" class="form-control" value="{{ $datatugasbulanan->datatugasbulanan }}" required>
                        @error('datatugasbulanan')
                            <small>{{ $message }}</small>
                        @enderror

                        <button type="submit" class="btn btn-success">Update</button>
                        <a href="{{ route(datatugasbulanan) }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection