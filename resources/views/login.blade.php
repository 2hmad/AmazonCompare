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
               <div class="auth-page">
                   <form action="">
                       <h1>Sign in</h1>
                       <input type="text" name="username" placeholder="Username">
                       <input type="password" name="password" placeholder="Password">
                       <button type="submit">Login</button>
                   </form>
                   <div class="new">New to Camazon?</div>
                   <button class="second"><a href="/register">Create Camazon account</a></button>
               </div>
            </div>
        </div>
        @include('layout/footer')
    </body>
</html>
