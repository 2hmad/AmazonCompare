<!DOCTYPE html>
<html @if (LaravelLocalization::getCurrentLocale() == 'ar') dir="rtl" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout/head')
    <title>GoAmaz</title>
</head>

<body>
    @include('layout/header')
    @include('layout/nav')
    <div class="page">
        <div class="container">
            <div class="home-page">
                <div class="multi-item-grid">
                    @include('components/homecard')
                    @include('components/homecard')
                    @include('components/homecard')
                    @include('components/homecard')
                    @include('components/homecard')
                    @include('components/homecard')
                </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
