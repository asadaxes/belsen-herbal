<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <title>@yield("title")</title>
</head>
@yield("style")
<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info d-flex justify-content-end align-items-center">
        <a href="https://www.facebook.com/profile.php?id=61556388160794" class="facebook border-right mr-2 pr-2" target="_blank" ><i class="fa fa-facebook text-dark"></i></a>
        <i class="fa fa-envelope-o"></i> <a href="mailto:belsennatural@gmail.com">belsennatural@gmail.com</a>
      </div>
    </div>
  </section>
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        
        <!-- Uncomment below if you prefer to use an image logo -->
         <a href="{{ route('home') }}"><img src="{{ asset('assets/logo.png') }}" alt="logo" title="belsennatural" width="200px" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li {{ isset($active_page) && $active_page == "home" ? "class=menu-active" : "" }}><a href="{{ route('home') }}">Home</a></li>
          <li {{ isset($active_page) && $active_page == "about_us" ? "class=menu-active" : "" }}><a href="{{ route('about_us') }}">About Us</a></li>
          <li class="menu-has-children"><a href="#portfolio">Products</a>
            <ul>
                @foreach ($categories as $category)
                <li class="menu-has-children"><a href="#">{{ $category->name }}</a>
                    <ul>
                        @foreach ($category->products as $product)
                        <li><a href="{{ Storage::url($product->thumbnail) }}" class="portfolio-popup">{{ $product->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
          </li>
          <li {{ isset($active_page) && $active_page == "mission_vision" ? "class=menu-active" : "" }}><a href="{{ route('mission_vision') }}">Mission & Vision</a></li>
          <li {{ isset($active_page) && $active_page == "manufactor" ? "class=menu-active" : "" }}><a href="{{ route('manufactor') }}">Manufacturing</a></li>
          <li {{ isset($active_page) && $active_page == "contact_us" ? "class=menu-active" : "" }}><a href="{{ route('contact_us') }}">Contact us</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
<main id="main">
@yield("content")
</main>
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="pb-4">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <span id="currentYear"></span><strong style="color: #0c9d4a;"> Belsen Herbal & Nutraceuticals</strong>. All Rights Reserved
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/easing.min.js') }}"></script>
  <script src="{{ asset('js/hoverIntent.js') }}"></script>
  <script src="{{ asset('js/superfish.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/sticky.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="{{ asset('js/main.js') }}"></script>
<script>
let currentYear = new Date().getFullYear();
document.getElementById("currentYear").textContent = currentYear;
</script>
@yield("script")
</body>
</html>