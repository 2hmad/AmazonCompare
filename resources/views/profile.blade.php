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
                        @if ($profile->pic == '')
                            <img src="/images/profile-placeholder.png" alt="User">
                        @else
                            <img src="{{ $profile->pic }}" alt="{{ $profile->name }} picture">
                        @endif
                    </div>
                    <input type="text" name="username" placeholder="Username" value="{{ $profile->name }}">
                    <input type="text" name="phone" placeholder="Phone" value="{{ $profile->phone }}">
                    <input type="text" name="country" placeholder="Country" value="{{ $profile->country }}">
                    <input type="text" name="city" placeholder="City" value="{{ $profile->city }}">
                    <button type="submit">Save Changes</button>
                </form>
                <hr style="width: 100%;margin-top: 5%;margin-bottom: 3%;border: 1px solid #e1e1e1;" />
                <div style="width: 100%">
                    <form method="POST" action="">
                        <input type="password" name="password" placeholder="New Password">
                        <input type="password" name="password" placeholder="Confirm new password">
                        <button type="submit">Change password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
