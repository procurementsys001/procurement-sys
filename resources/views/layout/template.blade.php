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
<body>

<!-- Dropdown Structure -->
<!--nav bar (side and top) -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Dashboard</a></li>
    <li><a href="#!">Profile</a></li>
    <li><a href="#!">Logout</a></li>
</ul>
<nav class="blue-grey darken-1">
    <div class="container">
        <div class="nav-wrapper">
            <a href="#!" class="brand-logo">ContiTouch</a>
            <a href="#" class="sidenav-trigger" data-target="mobile-nav"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Reports</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">User<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </div>
    </div>
</nav>

<ul class="sidenav" id="mobile-nav">
    <li><a href="#">Reports</a></li>
    <li><a href="#">Logout</a></li>
</ul>
<!--End Nav Bar -->

<!--Content of web page -->
<br />
@yield('content')
 <!-- Compiled and minified JavaScript -->
 
 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 <script src={{asset('js/materialize.min.js')}}></script>

 <script>
     
     $(document).ready(function(){
        $(".dropdown-trigger").dropdown();
        $('.sidenav').sidenav();
     });
 </script>
</body>
</html>