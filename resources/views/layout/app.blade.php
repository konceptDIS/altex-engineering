<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Altex Engineering</title>
      <meta name="robots" content="noindex, follow">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon -->
      <link rel="shortcut icon" type="image/x-icon" href="favicons/5253-images-fevicon.png">
      <!-- CSS
         ============================================ -->
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/css/css-bootstrap.min.css">
      <!-- Fontawesome -->
      <link rel="stylesheet" href="/css/css-font-awesome.css">
      <!-- Flaticon -->
      <link rel="stylesheet" href="/css/css-flaticon.css">
      <!-- Base Icons -->
      <link rel="stylesheet" href="/css/css-pbminfotech-base-icons.css">
      <!-- Swiper -->
      <link rel="stylesheet" href="/css/css-swiper.min.css">
      <!-- Magnific -->
      <link rel="stylesheet" href="/css/css-magnific-popup.css">
      <!-- Shortcode CSS -->
      <link rel="stylesheet" href="/css/css-shortcode.css">
      <!-- Base CSS -->
      <link rel="stylesheet" href="/css/css-base.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="/css/css-style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/css/css-responsive.css">
      <!-- REVOLUTION STYLE SHEETS -->
      <link rel="stylesheet" type="text/css" href="/css/revolution-rs6.css">
   </head>
   <body>

	<!-- page wrapper -->
	<div class="page-wrapper">

		@include('partials.header')

		@yield('content')

		@include('partials.footer')
	</div>
	<!-- page wrapper End -->

    @include('partials.scripts')
</body>
</html>
