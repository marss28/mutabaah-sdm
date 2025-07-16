@extends('template.belakang')

@section('konten')

<div class="container mt-3">
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
                          @if($items->foto && file_exists(public_path('images/' . $items->foto)))
  <img src="{{ asset('images/' . $items->foto) }}" alt="{{ $items->nama_banner }}" width="200">
@else
  <span>Tidak ada gambar</span>
@endif

                        </td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{ route('editbanner', $items->id) }}">
                                <i class="bx bx-edit-alt me-1"></i> Edit
                              </a>
                              <a class="dropdown-item" href="{{ route('deletebanner', $items->id) }}">
                                <i class="bx bx-trash me-1"></i> Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      @endforeach

                    </tbody>
                  </table>
                  <div class="d-flex justify-content-center">
                        {{ $bannerinfo->links() }}
                      </div>

                </div>
              </div>
              </div>
@endsection