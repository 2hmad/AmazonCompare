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
            <div class="profile-page">
                <form action="">
                    <div class="profile-image">
                        <img src="/images/2.jpg" alt="Yousef">
                    </div>
                    <input type="text" name="username" placeholder="Username" value="yousefelgoharyx">
                    <input type="text" name="phone" placeholder="Phone" value="01225371649">
                    <input type="password" name="password" placeholder="Password" value="*******">
                    <input type="password" name="password" placeholder="Confirm password" value="*******">
                    <input type="text" name="country" placeholder="Country" value="Egypt">
                    <input type="text" name="city" placeholder="City" value="Alexandria">
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
