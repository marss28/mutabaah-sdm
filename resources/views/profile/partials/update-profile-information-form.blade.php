<section>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Update</h4>

    {{-- Form kirim verifikasi email --}}
    <form id="send-verification" method="post" action="{{ route('verification.send') }}" class="d-none">
        @csrf
    </form>

    <div class="card mb-4">
        <h5 class="card-header">Profile Information</h5>
        <div class="card-body">
            <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                {{-- Upload Foto --}}
                <div class="mb-3">
                    <label for="photo" class="form-label">Profile Photo</label>
                    <input
                        type="file"
                        name="photo"
                        id="photo"
                        class="form-control @error('photo') is-invalid @enderror"
                        accept="image/*"
                    >
                    @error('photo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    {{-- Tampilkan foto saat ini --}}
                    @if ($user->profile_photo_path)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $user->profile_photo_path) }}" alt="Profile Photo" width="100" class="rounded">
                        </div>
                    @endif
                </div>

                {{-- Name --}}
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
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
                    <button type="submit" class="btn btn-primary">Save</button>

                    @if (session('status') === 'profile-updated')
                        <span class="text-success ms-3">Saved.</span>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
