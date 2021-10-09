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
                <form method="POST" action="{{ route('register-acc') }}">
                    <h1>Register</h1>
                    <input type="text" name="name" placeholder="Your name">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="text" name="phone" placeholder="Mobile number">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="password" placeholder="Confirm Password">
                    <div>
                        <input type="checkbox" name="agree" id="agree-agrument">
                        <label for="agree-agrument">I agree</label>
                    </div>
                    <button type="submit">Sign up</button>
                </form>
                <div class="new">Already have an account?</div>
                <a href="/login"><button class="second">Login</button></a>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
