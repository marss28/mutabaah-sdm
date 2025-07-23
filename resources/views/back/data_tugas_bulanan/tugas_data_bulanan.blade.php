@extends('template.belakang')

@section('konten')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">

                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-tittle"> Data tugas Bulanan</h4>
                    <a href="{{ route('formdatatugasbulanan') }}" class="btn btn-primary btn-rounded"> + Tambah Data</a>
                </div>

                <div class="table-responsiv">
                    <table class="table">
                        <thead>
                            <tr> No </tr>
                            <tr> Data Tugas Bulanan</tr>
                            <tr> Waktu Tugas</tr>
                            <tr> Deskripsi</tr>
                            <tr> Aksi</tr>
                        </thead>
                    <tbody>
                            @foreach ($datatugasbulanan as $index => $datatugasbulanan)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $datatugasbulanan->datatugasbulanan }}</td>
                                    <td>
                                        <a href="{{ route('editdatatugasbulanan', $datatugasbulanan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                        <form action="{{ route('deletedatatugasbulanan'), $datatugasbulanan->id }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $datatugasbulanan->links() }}
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>