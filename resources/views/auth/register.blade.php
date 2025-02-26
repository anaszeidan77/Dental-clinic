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
    <title>Register - Vexel</title>
</head>

<body class="app sidebar-mini ltr login-img">

    <!-- BACKGROUND-IMAGE -->
    <div class="">

        <!-- PAGE -->
        <div class="page">

            <!-- CONTAINER OPEN -->
            <div class="container-lg">
                <div class="row mt-4 justify-content-center mx-0">
                    <div class="col-xl-4 col-lg-6">
                        <div class="card shadow-none">
                            <div class="card-body p-sm-6">
                                <div class="text-center mb-4">
                                    <h4 class="mb-1">Sign Up</h4>
                                    <p>Sign up to your account to continue.</p>
                                </div>

                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Full Name<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control ms-0" type="text" name="name" :value="old('name')" required autofocus placeholder="Enter Full Name">
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>

                                    <!-- Email Address -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Email<span class="text-danger ms-1">*</span></label>
                                        <input class="form-control ms-0" type="email" name="email" :value="old('email')" required placeholder="Enter your Email">
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Create a Password<span class="text-danger ms-1">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="password" class="form-control ms-0 border-end-0" name="password" required placeholder="Create a Password" id="signup-password">
                                            <button class="btn btn-light" onclick="createpassword('signup-password',this)" type="button" id="button-addon2">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </button>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label class="mb-2 fw-500">Confirm Password<span class="text-danger ms-1">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="password" class="form-control ms-0 border-end-0" name="password_confirmation" required placeholder="Confirm your Password" id="signup-confirmpassword">
                                            <button class="btn btn-light" onclick="createpassword('signup-confirmpassword',this)" type="button" id="button-addon21">
                                                <i class="ri-eye-off-line align-middle"></i>
                                            </button>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Remember Me -->
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" name="remember" id="flexCheckChecked">
                                        <label class="form-check-label tx-15" for="flexCheckChecked">
                                            Remember me
                                        </label>
                                    </div>

                                    <!-- Register Button -->
                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary">Create an Account</button>
                                    </div>
                                </form>

                                <!-- Social Login Buttons -->
                                <div class="text-center">
                                    <p class="mb-0 tx-14">Already have an account?
                                        <a href="{{ route('login') }}" class="tx-primary ms-1 text-decoration-underline">Login</a>
                                    </p>
                                </div>

                                <p class="text-center mt-3 mb-2">Sign up with</p>
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

    <!-- Show Password JS -->
    <script src="../assets/js/show-password.js"></script>
</body>

</html>