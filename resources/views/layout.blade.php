<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta name="keywords" content="клінінгова компанія луцьк, генеральне прибирання, прибирання після ремонту, прибирання офісу, складських приміщень, миття вікон, миття вітрин, миття бруківки, миття дахів, хімчітка м'яких меблів, хімчітка килимів, ковроліну, обслуговування офісних приміщень, контрактне обслуговування будинків, квартир, чистка басейну, миття холодильників" />
	<link rel="shortcut icon" href="{{ URL::asset('img/logo.jpg') }}" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<meta name="format-detection" content="telephone=no">
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  @yield('slider_link')
</head>
<body>

  @include('components.header.header')
  @include('components.pages.main.modal')
  @include('components.pages.main.order')
<div class="container">
  @include('components.pages.main.service')
  @include('components.pages.main.video')
  @include('components.pages.main.slide')
  
  
</div>
@include('components.pages.main.advantages')
  @include('components.footer.footer')

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  @yield('slider_script')
  
</body>