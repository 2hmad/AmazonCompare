<!DOCTYPE html>
<html @if(LaravelLocalization::getCurrentLocale() == "ar") dir="rtl" @endif lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout/head')
        <title>Camazon</title>
    </head>
    <body>
        @include('layout/header')
        @include('layout/nav')
        <div class="page">
            <div class="container">
                <div class="home-page">

                    @include('components/slidercard')
                    <div class="multi-item-grid">
                        <div class="item">
                        @include('components/homecard')
                    </div>
                    <div class="item">
                        @include('components/homecard')
                    </div>
                    <div class="item">
                        @include('components/homecard')
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
