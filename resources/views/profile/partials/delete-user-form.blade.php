<section>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profil /</span> Hapus Akun</h4>

    <div class="card mb-4">
        <h5 class="card-header text-danger">Hapus Akun</h5>
        <div class="card-body">
            <p class="mb-3">
                Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.
                Sebelum menghapus akun Anda, harap unduh data atau informasi apa pun yang ingin Anda simpan.
            </p>

            <!-- Trigger Button -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
                Hapus Akun
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('profile.destroy') }}" class="modal-content">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="deleteAccountModalLabel">Konfirmasi Penghapusan Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <p>
                       Setelah akun Anda dihapus, semua sumber daya dan datanya akan dihapus secara permanen.
                        Masukkan kata sandi Anda untuk mengonfirmasi.
                    </p>

                    <div class="mb-3">
                        <label for="delete_password" class="form-label">Kata Sandi</label>
                        <input
                            type="password"
                            id="delete_password"
                            name="password"
                            class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                            placeholder="Password"
                            required
                        >
                        @error('password', 'userDeletion')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button type="submit" class="btn btn-danger">
                        Hapus Akun
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
