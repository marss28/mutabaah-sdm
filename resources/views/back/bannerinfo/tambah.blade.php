@extends('template.belakang')

@section('konten')

<div class="row mt-2">
  <div class="col-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="mb-0">Tambah Banner Info</h5>
        <form class="form-sample" method="POST" action="{{ route('storebanner') }}" enctype="multipart/form-data">
          @csrf
          
          <div class="mb-3">
            <label class="form-label mt-3" for="basic-default-fullname">Nama Banner</label>
            
            <input type="text" name="nama_banner" class="form-control" id="basic-default-fullname" placeholder="Nama Banner..." value="{{ old('nama_banner') }}" />

            @error('nama_banner')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Foto</label>
           
            <input type="file" name="foto" class="form-control" id="basic-default-company" />
             @error('foto')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
