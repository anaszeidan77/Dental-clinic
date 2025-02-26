<!doctype html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Vexel – Bootstrap 5 Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet">

    <!-- TITLE -->
    <title>Login - Vexel</title>
</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- PAGE -->
        <div class="page">

            <!-- CONTAINER OPEN -->
            <div class="container-lg">
                <div class="row justify-content-center mt-4 mx-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-body p-sm-6">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Sign In</h4>
                                    <p>Sign in to your account to continue.</p>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control ms-0" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Password<span class="text-danger ms-1">*</span></label>
                                        <input type="password" class="form-control" name="password" required autocomplete="current-password" placeholder="Password">
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="d-flex mb-3">
                                        <div class="form-check d-flex align-items-center">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
                                            <label class="form-check-label tx-15" for="remember_me">
                                                Remember me
                                            </label>
                                        </div>
                                        <div class="ms-auto">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="tx-primary ms-1 tx-13">Forgot Password?</a>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Login Button -->
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>

                                <!-- Social Login Buttons -->
                                <div class="text-center">
                                    <p class="mb-0 tx-14">Don't have an account yet?
                                        <a href="{{ route('register') }}" class="tx-primary ms-1 text-decoration-underline">Sign Up</a>
                                    </p>
                                </div>

                                <p class="text-center mt-3 mb-2">Sign in with</p>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-list">
                                        <a href="{{ route('auth.google') }}" class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <span class="btn-inner--icon"><i class="fa fa-google"></i></span>
                                        </a>
                                        <a href="{{ route('auth.facebook') }}" class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <span class="btn-inner--icon"><i class="fa fa-facebook-f"></i></span>
                                        </a>
                                        <a href="{{ route('auth.whatsapp') }}" class="btn btn-icon bg-primary-transparent rounded-pill border-0">
                                            <span class="btn-inner--icon"><i class="fa fa-whatsapp"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
        <!-- End PAGE -->
    </div>

    <!-- Custom-Switcher JS -->
    <script src="../assets/js/custom-switcher.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Main Theme JS -->
    <script src="../assets/js/authentication-main.js"></script>
</body>

</html>