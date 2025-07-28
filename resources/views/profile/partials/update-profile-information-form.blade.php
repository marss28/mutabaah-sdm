<section>
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Update</h4> --}}

    {{-- Form kirim verifikasi email --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <div class="card mb-4">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                {{-- Upload Foto --}}
                <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                       <img
                            src="{{ $user->profile_photo ? asset('storage/' . $user->profile_photo) : asset('template-admin/sneat-1.0.0/img/avatars/1.png') }}"
                            alt="user-avatar"
                            class="d-block rounded"
                            height="100"
                            width="100"
                            id="uploadedAvatar"
                            />

                        <div class="button-wrapper">
                          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                            <span class="d-none d-sm-block">Tambah Foto</span>
                            <i class="bx bx-upload d-block d-sm-none"></i>
                            <input
                              type="file"
                              id="upload"
                              class="account-file-input"
                              hidden
                              accept="image/png, image/jpeg"
                            />
                          </label>
                          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                            <i class="bx bx-reset d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Hapus</span>
                          </button>
                        </div>
                      </div>
                    </div>

                   

                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name', $user->name) }}"
                        required
                        autofocus
                        autocomplete="name"
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control @error('email') is-invalid @enderror"
                        value="{{ old('email', $user->email) }}"
                        required
                        autocomplete="username"
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    {{-- Verifikasi Email --}}
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-2">
                            <small class="text-warning">
                                Your email address is unverified.
                                <button form="send-verification" class="btn btn-link p-0 align-baseline">
                                    Click here to re-send the verification email.
                                </button>
                            </small>

                            @if (session('status') === 'verification-link-sent')
                                <div class="text-success mt-2">
                                    A new verification link has been sent to your email address.
                                </div>
                            @endif
                        </div>
                    @endif
                </div>

                {{-- Submit --}}
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    @if (session('status') === 'profile-updated')
                        <span class="text-success ms-3">Berhasil disimpan.</span>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
