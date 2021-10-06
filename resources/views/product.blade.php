<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('layout/head')
        <title>Camazon - Login</title>
    </head>
    <body>
        @include('layout/header')
        <div class="page">
            <div class="container">
               <div class="product-page">
                   <div class="product">
                       <div class="image">
                           <img src="/" alt="a">
                       </div>
                       <div class="details">
                           <div class="top-details">

                               <h1 class="title">Face mask 350ml <span>Amazon EG</span></h1>
                               <button>Add to cart</button>
                            </div>
                           <div class="price">
                               <div>650.00</div>
                               <span>EGP</span>
                           </div>
                           <div class="prices">
                               <div class="l-price">
                                   <div>Lowest price</div>
                                   535.00
                               </div>
                               <div class="h-price">
                                   <div>Highest price</div>
                                   1,500
                               </div>
                               <div class="r-price">
                                   <div>Latest down</div>
                                   -12.8%
                               </div>
                           </div>
                           <div class="p-details">
                            <h3>Details</h3>
                            <ul>
                                <li>Awesome Shoe</li>
                                <li>Unbreakable</li>
                                <li>Ass Best</li>
                                <li>Great</li>
                            </ul>
                        </div>
                       </div>
                       
                   </div>
                   <div class="other">
                       @include('components/othercard')
                       @include('components/othercard')
                       @include('components/othercard')
                       @include('components/othercard')
                   </div>
               </div>
            </div>
        </div>
    </body>
</html>
