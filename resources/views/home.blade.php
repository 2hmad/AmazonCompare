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
                    @include('components/homecard2')
                </div>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                      <div class="swiper-slide">
                        @include('components/homecardtest')
                      </div>
                      <div class="swiper-slide">
                        @include('components/homecardtest')
                    </div>
                      <div class="swiper-slide">
                        @include('components/homecardtest')
                    </div>
                    </div>
                    <!-- If we need pagination -->
                  
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                  
                  </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
</body>

</html>
