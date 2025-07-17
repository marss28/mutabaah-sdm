@extends('template.belakang')

@section('konten')

<div class="row mt-2">
  <div class="col-8">
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="mb-0">Tambah Banner Info</h5>
        <form class="form-sample" id="form-banner" method="POST" action="{{ route('updatebanner', $bannerinfo->id) }}" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nama Banner</label>
            <input type="text" name="nama_banner" id="nama_banner" class="form-control" placeholder="Nama Banner..." value="{{ $bannerinfo->nama_banner }}" />
            @error('nama_banner')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Foto</label>
            <input type="file" name="foto" id="foto" class="form-control" />
            @error('foto')
              <div class="text-danger mb-1">{{ $message }}</div>
            @enderror
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

{{-- Script untuk mencegah submit jika tidak ada perubahan --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form-banner');
    const namaBannerInput = document.getElementById('nama_banner');
    const fotoInput = document.getElementById('foto');

    // Simpan nilai awal dari input teks
    const originalNamaBanner = namaBannerInput.value;

    // Flag untuk cek apakah file diubah
    let fotoDiubah = false;

    // Saat user memilih file baru
    fotoInput.addEventListener('change', function () {
        fotoDiubah = fotoInput.files.length > 0;
    });

    // Saat form disubmit
    form.addEventListener('submit', function (e) {
        const currentNamaBanner = namaBannerInput.value;
        const namaBerubah = originalNamaBanner !== currentNamaBanner;

        const adaPerubahan = namaBerubah || fotoDiubah;

        if (!adaPerubahan) {
            e.preventDefault();
            alert('Tidak ada perubahan yang dilakukan!');
        }
    });
});
</script>

@endsection
