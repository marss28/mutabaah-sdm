@extends('template.belakang')

@section('konten')
<h4>Hasil Pencarian: "{{ $q }}"</h4>

@if($tugasHarian->count())
    <h5>Tugas Harian</h5>
    <ul>
        @foreach($tugasHarian as $item)
            <li>{{ $item->nama_tugas }}</li>
        @endforeach
    </ul>
@endif

@if($tugasMingguan->count())
    <h5>Tugas Mingguan</h5>
    <ul>
        @foreach($tugasMingguan as $item)
            <li>{{ $item->judul }}</li>
        @endforeach
    </ul>
@endif

@if($tugasBulanan->count())
    <h5>Tugas Bulanan</h5>
    <ul>
        @foreach($tugasBulanan as $item)
            <li>{{ $item->judul }}</li>
        @endforeach
    </ul>
@endif

@if($banners->count())
    <h5>Banner Info</h5>
    <ul>
        @foreach($banners as $item)
            <li>{{ $item->judul }}</li>
        @endforeach
    </ul>
@endif

@if($users->count())
    <h5>User</h5>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} ({{ $user->email }})</li>
        @endforeach
    </ul>
@endif

@if($tugasHarian->isEmpty() && $tugasMingguan->isEmpty() && $tugasBulanan->isEmpty() && $banners->isEmpty() && $users->isEmpty())
    <p>Tidak ada hasil ditemukan.</p>
@endif
@endsection
