<!DOCTYPE html>
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('template-admin/sneat-1.0.0') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    <title>Register - Sneat Laravel</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts and CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/css/demo.css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers and Config -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/js/config.js"></script>
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">

          <!-- Register Card -->
          <div class="card">
            <div class="card-body">

              <!-- Centered Logo and Brand -->
              <div class="d-flex justify-content-center mb-3">
                <a href="#" class="d-flex flex-column align-items-center text-decoration-none">
                  <div class="mb-1">
                    <!-- Your SVG Logo -->
                   
                  </div>
                  <span class="fw-bold text-body fs-4">Mutaba'ah kqc</span>
                </a>
              </div>

              <!-- Title and Description -->
              <h4 class="mb-2 text-center">Solusi mudah untuk mengatur amalan 🚀</h4>
              <p class="mb-4 text-center"> Aplikasi pendamping ibadah harianmu</p>

              <!-- Registration Form -->
              <form method="POST" action="{{ route('register') }}" class="mb-3">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                  <label for="name" class="form-label">Nama</label>
                  <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                         name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                  @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                         name="email" value="{{ old('email') }}" required autocomplete="username" />
                  @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Password -->
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="new-password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @error('password')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Confirm Password</label>
                  <input type="password" id="password_confirmation"
                         class="form-control @error('password_confirmation') is-invalid @enderror"
                         name="password_confirmation" required autocomplete="new-password" />
                  @error('password_confirmation')
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary d-grid w-100">Register</button>
              </form>

              <!-- Link to login -->
              <p class="text-center">
                <span>Apakah kamu memiliki akun?</span>
                <a href="{{ route('login') }}">
                  <span>Masuk Sekarang</span>
                </a>
              </p>

            </div>
          </div>
          <!-- /Register Card -->

        </div>
      </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/vendor/js/menu.js"></script>
    <script src="{{ asset('template-admin/sneat-1.0.0') }}/assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
