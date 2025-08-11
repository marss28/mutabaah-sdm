<section>
    {{-- <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Profil /</span> Perbarui Kata Sandi
    </h4> --}}

    <div class="card mb-3"> {{-- ubah dari mb-3 jadi mb-4 --}}
        {{-- <h5 class="card-header">Perbarui Kata Sandi</h5> --}}
        <div class="card-body">
            <p class="mb-4">Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.</p>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                {{-- Current Password --}}
                <div class="mb-3">
                    <label for="current_password" class="form-label">Kata Sandi Saat Ini</label>
                    <input
                        type="password"
                        name="current_password"
                        id="current_password"
                        class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
                        autocomplete="current-password"
                    >
                    @error('current_password', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- New Password --}}
                <div class="mb-3">
                    <label for="password" class="form-label">Kata Sandi Baru</label>
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="form-control @error('password', 'updatePassword') is-invalid @enderror"
                        autocomplete="new-password"
                    >
                    @error('password', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Confirm Password --}}
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
                        autocomplete="new-password"
                    >
                    @error('password_confirmation', 'updatePassword')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Save Button --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    @if (session('status') === 'password-updated')
                        <span class="text-success ms-3">Berhasil disimpan.</span>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
