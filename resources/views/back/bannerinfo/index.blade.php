@extends('template.belakang')

@section('konten')

<div class="row mt-3">
    <div class="card">
                <div class="d-flex justify-content-between align-items-center me-4">
                <h5 class="card-header">Banner Info</h5>
                <a href="{{ route('formbannerinfo') }}" class="btn btn-primary btn-rounded">+ Tambah Data</a>
                
                </div>
                
                <div class="table-responsive text-nowrap mt-3">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> No </th>
                        <th> Nama Banner Info </th>
                        <th> Foto </th>
                        <th> Aksi </th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                       @php
                            $no = 1;

                       @endphp

                      @foreach ($bannerinfo as $items)
                      <tr>
                        <td> {{ $no++ }} </td>
                        <td> {{ $items->nama_banner }} </td>
                        <td>
                          <img src="{{ asset('storage/' . $items->foto) }}" alt="{{ $items->nama_banner }}" width="200">
                        </td>
                       <td>
                      <div class="position-relative">
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded fs-5"></i>
                          </button>

                          <div class="dropdown-menu" style="z-index: 1050;">
                            {{-- Tombol Edit --}}
                            <a class="dropdown-item" href="{{ route('editbanner', $items->id) }}">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                            </a>

                            {{-- Tombol Delete --}}
                            <form action="{{ route('deletebanner', $items->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item text-danger">
                                <i class="bx bx-trash me-1"></i> Delete
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </td>   

                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                    <div class="d-flex justify-content-center small-pagination">
                    {{ $bannerinfo->links('pagination::bootstrap-5') }}

                   </div>
              

                </div>
            </div>
        </div>
@endsection