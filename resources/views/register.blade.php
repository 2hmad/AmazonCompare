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
               <div class="login-page">
                   <form action="">
                       <h1>Register</h1>
                       <input type="text" name="name" placeholder="Your name">
                       <input type="text" name="phone" placeholder="Mobile number">
                       <input type="password" name="password" placeholder="Password">
                       <input type="password" name="password" placeholder="re-enter Password">
                       <button type="submit">Sign up</button>
                   </form>
                   <div class="new">Already have an account?</div>
                   <button class="second"><a href="/login">Login</a></button>
               </div>
            </div>
        </div>
    </body>
</html>
