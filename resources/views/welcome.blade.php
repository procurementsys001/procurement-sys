<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href={{asset('css/materialize.min.css')}}>
    <link rel="stylesheet" href={{asset('css/custom.css')}}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>{{config('app.name', 'ContiTouch')}}</title>
</head>
<body class="blue-grey lighten-5">

<!-- Dropdown Structure -->
<!--nav bar (side and top) -->
<nav class="blue-grey darken-1">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">ContiTouch</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-nav">
    <li><a href="#">Login</a></li>
    <li><a href="/register">Register</a></li>
</ul>
<!--End Nav Bar -->

<!--Content of web page -->
<br />
<div class="container">
    <div class="row">  
        <div class="col s12 m12 l3"></div>
        <div class="col s12 m12 l6">
        <img src="img/logo/logo.png" alt="" class="responsive-img">
        <p class="flow-text center-align blue-grey-text darken-text-4">Procurement Management System</p>
        <!--Start login form-->       
    <div class="row">
        <form class="col s12">
        <div class="row">
        <div class="input-field col s12 m12 l12">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
        </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m12 l12">
                <input id="password" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="right-align">
            <a class="waves-effect waves-light btn-small"><i class="material-icons left">vpn_key</i>Login</a>
            <a class="waves-effect waves-light btn-small btn-flat"><i class="material-icons left">vpn_key</i>Register</a>
        </div>
        </form>
      </div>
        <!--End login form--->
        </div>
        <div class="col s12 m12 l3"></div>
    </div>
</div>
<!--End content of web page-->
 <!-- Compiled and minified JavaScript -->
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src={{asset('js/materialize.min.js')}}></script>

 <script>
     
     $(document).ready(function(){
        $('select').formSelect();
        $('.sidenav').sidenav();
     });
 </script>
</body>
</html>