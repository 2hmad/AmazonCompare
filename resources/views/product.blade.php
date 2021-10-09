<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layout/head')
    <title>GoAmaz - Login</title>
</head>

<body>
    @include('layout/header')
    @include('layout/nav')
    <div class="page" style="background: white">
        <div class="container">
            <div class="product-page">
                <div class="product">
                    <div class="image-selector">
                        <img src="{{ $request['image'] }}" alt="A1">
                        <img src="/images/1.jpg" alt="A1">
                        <img src="/images/3.jpg" alt="A1">
                    </div>
                    <div class="image">
                        <img src="{{ $request['image'] }}" alt="A1">
                    </div>
                    <div class="details">
                        <div class="top-details">

                            <h1 class="title">{{ $request['title'] }}
                                <span><img src="/images/eg.webp" /></span>
                            </h1>

                            <button>Add to favourite</button>
                        </div>
                        <div class="stars">
                            <img src="/icons/star.svg" />
                            <img src="/icons/star.svg" />
                            <img src="/icons/star.svg" />
                            <img src="/icons/star.svg" />
                            <img src="/icons/star_half.svg" />
                            <span>{{ $request['rating']['rate'] }}</span>
                        </div>
                        <div class="price">
                            <div>{{ $request['price'] }}</div>
                            <span>EGP</span>
                        </div>
                        <div class="prices">
                            <div class="l-price">
                                <div>Lowest price</div>
                                <span
                                    style="display: flex;align-items: center;justify-content: center;flex-wrap: nowrap;">
                                    <img src="/icons/trending_up.svg" style="max-width: 30px">535.00
                                </span>
                            </div>
                            <div class="h-price">
                                <div>Highest price</div>
                                <span
                                    style="display: flex;align-items: center;justify-content: center;flex-wrap: nowrap;">
                                    <img src="/icons/trending_down.svg" style="max-width: 30px">1500
                                </span>
                            </div>
                            <div class="r-price">
                                <div>Latest down</div>
                                -12.8%
                            </div>
                        </div>

                        <div class="p-details">
                            <h3>Details</h3>
                            <ul>
                                <li>Color: Black</li>
                                <li>Awesome Shoe</li>
                                <li>Unbreakable</li>
                                <li>Ass Best</li>
                                <li>Great</li>
                            </ul>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="advertise">
                            <img src="https://via.placeholder.com/250">
                        </div>
                        <div class="watch">
                            <h4>Amazon price watches</h4>
                            <form method="POST" style="display: flex;flex-direction: column;gap: 9px;">
                                @include('components/currencies')
                                <div style="display: flex;align-items: center;gap: 10px;">
                                    <input type="checkbox" name="send-email"> <label>Send an email</label>
                                </div>
                                <input type="email" name="send-email" placeholder="Send an email">
                                <div style="display: flex;align-items: center;gap: 10px;">
                                    <input type="checkbox" name="send-phone"> <label>Send an message</label>
                                </div>
                                <input type="phone" name="send-phone" placeholder="Send an message">
                                <input type="submit" name="watch-price" value="Subscribe">
                            </form>
                            <div style="margin-top: 5%">
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_email"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="a2a_button_pinterest"></a>
                                    <a class="a2a_button_facebook_messenger"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                                <!-- AddToAny END -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-desc">
                    <h1>Product details</h1>
                    <ul>
                        <li><b>Date First Available</b> ‏ : ‎ 1 August 2021</li>
                        <li><b>ASIN</b> ‏ : ‎B09BM4S4LJ</li>
                    </ul>
                </div>
                <div class="other">
                    @include('components/othercard')
                    @include('components/othercard')
                    @include('components/othercard')
                    @include('components/othercard')
                </div>
                <div class="reviews-container">
                    <div class="stats">
                        <h2>Customer review</h2>
                        <div class="stars-container">

                            <div class="stars">
                                <img src="/icons/star.svg" />
                                <img src="/icons/star.svg" />
                                <img src="/icons/star.svg" />
                                <img src="/icons/star.svg" />
                                <img src="/icons/star_half.svg" />
                            </div>
                            <div class="rate">4.5 out of 5</div>
                        </div>
                        <h5>2 customer ratings</h5>
                        <div class="all-progress">

                            <div class="progress">
                                <div>5 stars</div>
                                <div class="progress-bar">
                                    <div class="inner" style="width: 50%"></div>
                                </div>
                                <div>50%</div>
                            </div>

                            <div class="progress">
                                <div>4 stars</div>
                                <div class="progress-bar">
                                    <div class="inner" style="width: 50%"></div>
                                </div>
                                <div>50%</div>
                            </div>

                            <div class="progress">
                                <div>3 stars</div>
                                <div class="progress-bar">
                                    <div class="inner" style="width: 0%"></div>
                                </div>
                                <div>0%</div>
                            </div>

                            <div class="progress">
                                <div>2 stars</div>
                                <div class="progress-bar">
                                    <div class="inner" style="width: 0%"></div>
                                </div>
                                <div>0%</div>
                            </div>

                            <div class="progress">
                                <div>1 stars</div>
                                <div class="progress-bar">
                                    <div class="inner" style="width: 0%"></div>
                                </div>
                                <div>0%</div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews-content">

                        <div class="reviews">
                            @include('components/review')
                            @include('components/review')
                            @include('components/review')
                            @include('components/review')
                            @include('components/review')
                            @include('components/review')
                            <a href="/">See more</a>
                        </div>
                        <form class="review-input">
                            <div class="stars">
                                <img src="/icons/star_outline.svg" />
                                <img src="/icons/star_outline.svg" />
                                <img src="/icons/star_outline.svg" />
                                <img src="/icons/star_outline.svg" />
                                <img src="/icons/star_outline.svg" />
                            </div>
                            <div class="first-row">
                                <div class="input-wrapper">

                                    <textarea name="review" rows="20" placeholder="What do you think"></textarea>
                                </div>

                                <button>Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout/footer')
    <script src="/js/product.js"></script>
</body>

</html>
