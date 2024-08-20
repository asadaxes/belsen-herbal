@extends("general_base")
@section("title") Belsen Herbal & Nutraceuticals | Contact Us @endsection
@section("style")
<style>
.text_c{
    color: #88c945;
}
.bg_c{
    background-color: #049f4c;
    color: #ffffff;
}
</style>
@endsection
@section("content")
<div class="container my-5">
<div class="row">
<div class="col-12">
<div class="card card-body px-0 pb-0">
<h2 class="text_c font-weight-bold text-center mb-2">Contact with us</h2>
<hr class="w-25 mx-auto mt-0">
<div class="row mb-3">
    <div class="col-md-6 text-center">
      <div class="contact-address">
        <i class="fa fa-map-marker fa-lg"></i>
        <h3 class="mb-2">Corporate Address</h3>
        <address>39, Dr. Qudrat-E-Khuda Road, Kazi Bhaban (4th Floor),<br>Dhanmondi, Dhaka-1205</address>
      </div>
    </div>
    <div class="col-md-6 text-center">
      <div class="contact-address">
        <i class="fa fa-map-marker fa-lg"></i>
        <h3 class="mb-2">Factory Address</h3>
        <address>South Kamalapur, Faridpur Sadar, Faridpur-7800</address>
      </div>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.1091735330112!2d90.38397636313498!3d23.739591927604483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b879017fa5%3A0x51ce0710291e7a63!2zS2F6aSBCaGFiYW4sIOCmqOCmv-CmiSDgpo_gprLgpr_gpqvgp43gpq_gpr7gpqjgp43gpp8g4Kaw4KeL4KahLCDgpqLgpr7gppXgpr4gMTIwNQ!5e0!3m2!1sbn!2sbd!4v1715090107323!5m2!1sbn!2sbd" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="card card-body border-top-0 pt-5">
<div class="form">
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('success') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
@elseif($errors->any() || session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @if(session('error'))
            {{ session('error') }}
        @else
            <ul class="my-0 mx-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
          <form action="{{ route('contact_form') }}" method="POST" role="form" class="contactForm">
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required />
              </div>
              <div class="form-group col-md-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required />
              </div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required />
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control" rows="5" data-rule="required" placeholder="Write your message here..." required></textarea>
            </div>
            <div class="text-center"><button type="submit" class="btn bg_c">Send Message</button></div>
          </form>
        </div>

      </div>
</div>
</div>
</div>
@endsection