<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') dir="rtl" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout/head')
    <title>Camazon - Login</title>
</head>

<body>
    @include('layout/header')

    <div class="page">
        <div class="container">
            <div class="auth-page">
                <form method="POST" action="{{ route('login-account') }}">
                    @csrf
                    <h1>Sign in</h1>
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Password">
                    <div><input type="checkbox" name="remember" id="remember"><label for="remember"> Remember me</label>
                    </div>
                    <button type="submit" style="margin-top: 5%">Login</button>
                    @error('email')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    @error('password')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                    @if (Session::has('fail-email'))
                        <div class="error-message">
                            {{ Session::get('fail-email') }}</div>
                    @endif
                    @if (Session::has('fail-password'))
                        <div class="error-message">
                            {{ Session::get('fail-password') }}</div>
                    @endif
                    <a href="#" class="social-button" id="facebook-connect"> <span>Connect with Facebook</span></a>
                    <a href="#" class="social-button" id="google-connect"> <span>Connect with Google</span></a>
                </form>
                <div class="new">New to Camazon?</div>
                <a href="/register"><button class="second">Create Camazon account</button></a>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
