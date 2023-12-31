<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Suplemen Fitness</title>
    <link rel="stylesheet" href="{{ url('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/pages/auth.css') }}">
    <link rel="shortcut icon" href="{{ url('images/icon2.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ url('images/icon2.svg') }}" type="image/png">
</head>

<body>
    @include('component.message')
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="/"><img src="{{ url('images/logo2.png') }}" alt="Logo" style="height: 66px; width: 180px;"></a>
                    </div>
                    <h2 class="auth-title">Log in.</h2>
                    <p class="auth-subtitle mb-5">Log in with your data that you entered.</p>

                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" class="form-control form-control-xl" placeholder="email" name="email" id="email">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password" id="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5" type="submit">Log in</button>
                    </form>
                    {{-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">Don't have an account? <a href="auth-register.html"
                                class="font-bold">Sign
                                up</a>.</p>
                        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                    <a href="/"><img src="https://e1.pxfuel.com/desktop-wallpaper/952/257/desktop-wallpaper-red-and-white-medication-pills-%C2%B7-stock-supplements.jpg" 
                        style="height: 1080px; width: 1080px" alt="Logo"></a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
