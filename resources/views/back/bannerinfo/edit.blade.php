@extends('template.belakang')

@section('konten')

<div class="row mt-2">
  <div class="col-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="mb-0">Tambah Banner Info</h5>
        <form class="form-sample" method="POST" action="{{ route('updatebanner', $bannerinfo->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama Banner</label>
            @error('nama_banner')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
            <input type="text" name="nama_banner" class="form-control" placeholder="Nama Banner..." value="{{ $bannerinfo->nama_banner }}" />
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Foto</label>
            @error('foto')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
            <input type="file" name="foto" class="form-control"  value="{{ $bannerinfo->foto }}"/>
            @if ($bannerinfo->foto)
    <img src="{{ asset('storage/' . $bannerinfo->foto) }}" width="150" alt="Foto Banner Lama">
@endif



          </div>

          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
