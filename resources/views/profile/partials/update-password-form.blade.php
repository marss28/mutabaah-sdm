<section>
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Update Password</h4>

    <div class="card mb-4">
        <h5 class="card-header">Update Password</h5>
        <div class="card-body">
            <p class="mb-3">Ensure your account is using a long, random password to stay secure.</p>

            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')

                {{-- Current Password --}}
                <div class="mb-3">
                    <label for="current_password" class="form-label">Current Password</label>
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
                    <label for="password" class="form-label">New Password</label>
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
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
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
                    <button type="submit" class="btn btn-primary">Save</button>

                    @if (session('status') === 'password-updated')
                        <span class="text-success ms-3">Saved.</span>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
