@extends('template.belakang') {{-- atau sesuai layout Sneat-mu --}}

@section('konten')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Profil</h4>

    {{-- Update Profile --}}
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Perbarui Profil</h5>
        </div>
        <div class="card-body">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    {{-- Update Password --}}
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0">Perbarui Kata Sandi</h5>
        </div>
        <div class="card-body">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    {{-- Delete User --}}
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="mb-0 text-danger">Hapus Akun</h5>
        </div>
        <div class="card-body">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
