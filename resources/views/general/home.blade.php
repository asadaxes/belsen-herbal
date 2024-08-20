@extends("general_base")
@section("title") Belsen Herbal & Nutraceuticals @endsection
@section("content")
<section>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
     </ol>
     <div class="container">
       <div class="row">
         <div class="col-sm-12">
               <div class="carousel-inner" role="listbox">
                 <div class="carousel-item active">
                   <img class="d-block img-fluid mx-auto" src="{{ asset('assets/sliders/1.png') }}" style="height: 500px">
                 </div>
                 <div class="carousel-item">
                   <img class="d-block img-fluid mx-auto" src="{{ asset('assets/sliders/2.png') }}" style="height: 500px">
                 </div>
               </div>
           </div>
     </div>
   
     </div>
     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div>
   </section>
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="{{ asset('assets/about_img.jpg') }}">
          </div>

          <div class="col-lg-6 content">
            <h2>Belsen Herbal & Nutraceuticals</h2>
            <h4>A sister concern of Belsen Pharmaceuticals Ltd.</h4>
            <h3>Belsen Herbal & Nutraceuticals is a leading Bangladesh-based company involved in manufacturing, marketing and distribution of Neutracuticals and skincare products.</h3>
            <ul>
              <li>We commit to deliver our products in the highest quality available.</li>
              <li>We manufacturing best quality pharmacuticals & nutraceutical products for men women and kids</li>
              <li>Our Strong portfolio of businesses, geographies and wide range of Products including our most popular product of Nutrational give us the strategic benefits of integration that allow us to perform better in an increasingly competitive marketplace.</li>
            </ul>

          </div>
        </div>

      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Services</h2>
          <p>Our vision and our mission are to put emphasis on the quality of products, process and services leading to growth of the company imbibed with good governance.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="#">Innovative Solutions</a></h4>
              <p class="description">Innovative solutions for reliable product supply with fully licensed importing and packaging capabilities in various dosage forms. Complete quality delivered with unparalleled requlatory complicance.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="#">Operational Excellence</a></h4>
              <p class="description">Product delivery and quality assurance are business critical functions that Norwich performs in compliance with industry and regulatory requirements.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="#">Management</a></h4>
              <p class="description">Strong management team with diverse pharmaceutical, chemical and biotechnology backgrounds and customer service orientation. Extensive experience in managing complex and technically challenging projects.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="#">Our Products</a></h4>
              <p class="description">Belsen Herbal & Nutraceuticals sells a wide range of products in the local market. We are committed to introduce more technologically advanced quality products at an affordable price in the future.</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!--==========================
      Clients Section
    ============================-->
   

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Our Products</h2>
          <p></p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
@foreach ($products as $product)
<div class="col-lg-3 col-md-4 mx-auto">
  <div class="portfolio-item wow fadeInUp">
    <a href="{{ Storage::url($product->thumbnail) }}" class="portfolio-popup">
      <img src="{{ Storage::url($product->thumbnail) }}">
      <div class="portfolio-overlay">
        <div class="portfolio-info"><h2 class="wow fadeInUp"></h2></div>
      </div>
    </a>
  </div>
</div>    
@endforeach

        </div>

      </div>
    </section><!-- #portfolio -->
   

    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Get in Touch</h2>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="fa fa-map-marker"></i>
              <h3>Corporate Address</h3>
              <address>39, Dr. Qudrat-E-Khuda Road, Kazi Bhaban (4th Floor), Dhanmondi, Dhaka-1205</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-address">
              <i class="fa fa-map-marker"></i>
              <h3>Factory Address</h3>
              <address>South Kamalapur, Faridpur Sadar, Faridpur-7800</address>
            </div>
          </div>

        <div class="col-md-4">
            <div class="contact-email">
              <i class="fa fa-phone"></i>
              <h3>Contact</h3>
              <p><a href="tel:+8801971951126">+8801971951126</a></p>
              <p><a href="mailto:belsennatural@gmail.com">belsennatural@gmail.com</a></p>
            </div>
        </div>

        </div>
      </div>
  </section>
@endsection