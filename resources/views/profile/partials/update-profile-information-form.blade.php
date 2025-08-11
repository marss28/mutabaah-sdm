<section>
    {{-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Update</h4> --}}

    {{-- Form kirim verifikasi email --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <div class="card mb-3">
        <h5 class="card-header">Profil</h5>
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                {{-- Upload Foto --}}
                <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                      <input type="file" name="profile_photo">
                          <img
                        src="{{ asset('storage/profile_photos/' . $user->profile_photo) }}"

                       class="d-block rounded" 
                       height="100" width="100"
                    />

                        </div>
                      </div>
            
                
                   

                {{-- Name --}}
                <div class="mb-3" style="margin-left: 10px">
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
                <div class="mb-3" style="margin-left: 10px">
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
                <div class="mt-4" style="margin-left: 10px">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    @if (session('status') === 'profile-updated')
                        <span class="text-success ms-3">Berhasil disimpan.</span>
                    @endif
                </div>
            </form>
        
    </div>
</section>
