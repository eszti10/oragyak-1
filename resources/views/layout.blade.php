<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pastel by MLPdesign</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" lang="en" content="open source html and css template">
<meta name="author" content="mlp design">
<meta name="robots" content="index, follow">
<link rel="stylesheet" href="{{ asset('css/pastel.css') }}">
</head>
<body>
<!-- Menu Items -->
<nav>
 <input type="checkbox" id="show-menu" role="button">
 <label for="show-menu" class="open"><span class="fa fa-bars"></span></label>
 <label for="show-menu" class="close"><span class="fa fa-times"></label>
 <ul id="menu">
  <li><a class="{{Request::path() === '/' ? 'active' : ''}}" href="/">Kezdő oldal</a></li>
  <li><a class="{{Request::path() === '/Dalos_Donat' ? 'active' : ''}}" href="/Dalos_Donat">Órai feladat</a></li>
  <li><a class="{{Request::path() === '/legitarsasag' ? 'active' : ''}}" href="/legitarsasag">Légitársaság</a></li>
<<<<<<< HEAD
  <li><a class="{{Request::path() === '/legitarsasag/create' ? 'active' : ''}}" href="/legitarsasag/create">Légitársaság</a></li>

</ul>
=======
  <li><a class="{{Request::path() === '/legitarsasag/create' ? 'active' : ''}}" href="/legitarsasag/create">Új Légitársaság</a></li>
 </ul>
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
</nav>
<!-- // -->
<!-- Banner -->
<div id="banner">
 <div id="header">
  <h1>Szoftver minősig biz.</h1>
  <p class="sub">Gyakorlat</p>
 </div>
</div>
<!-- // -->
<div id="content">
    @yield("content")
</div>
<!-- Footer Items -->
<div id="footer">
 <p>&copy; Copyright Your Name</p>
 <!--Credits below must be kept under CC-NC 3.0 License-->
 <p><a href="http://www.mlpdesign.net">HTML and CSS</a> by MLPdesign.net</p>
</div>
<!-- // -->
</body>
</html>
