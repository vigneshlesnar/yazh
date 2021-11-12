@extends('layouts.layout2')

@section('content')




<section class="inner-banner-area">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="inner-banner-content">
<h1 class="inner-banner-title">Get in Touch</h1>
<ul class="breadcumbs list-inline">
<li><a href="{{url('/')}}">Home</a></li>
<li>Contact</li>
</ul>
<span class="border-divider style-white"></span>
</div>
</div>
</div>
</div>
<div class="banner-image" style="background-image:url('assets/images/backgrounds/background-1.jpg')"></div>
</section>


<section class="xs-section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 mx-auto">
<div class="xs-heading text-center style4">
<h2 class="section-title">Get in Touch</h2>
<span class="line"></span>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 mx-auto">
<div class="contact-info-wraper">
<div class="row">
<div class="col-lg-4 col-md-6">
<div class="single-contact-info">
<div class="round-icon">
<i class="icon icon-map-marker2"></i>
</div>
<a href="https://goo.gl/maps/opbrFMvUMssbD3ND8" target="_blank" class="info-content">58,1ST floor, Vinayaka complex, Bangalore road, Hosur-635109. Tamil Nadu -India</a>
</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-contact-info">
<div class="round-icon">
<i class="icon icon-phone-call3"></i>
</div>
<a href="tel:9677571110" class="info-content">+91 96775 71110</a>

</div>
</div>
<div class="col-lg-4 col-md-6">
<div class="single-contact-info">
<div class="round-icon">
<i class="icon icon-envelope4"></i>
</div>
<a href="mailto:info@yazhdigital.com" class="info-content">info@yazhdigital.com</a>
<a href="mailto:sales@yazhdigital.com" class="info-content">sales@yazhdigital.com</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


{{-- <div class="map-area">
<div class="container">
<div class="xs-map map" id="map-1"></div> --}}
{{-- <div class="map-area"> --}}
</div>
</div>

<section class="xs-section-padding">
<div class="container">
<div class="row">
<div class="col-lg-5 col-md-8 mx-auto">
<div class="xs-heading text-center style4">
<h3 class="section-title">Drop us a Line</h3>
<span class="line"></span>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-10 mx-auto">
<div class="contact-from-wraper wow fadeIn">
<form action="https://formsubmit.co/gvr2706@gmail.com" class="xs-from" method="post" id="xs-contact-form">
<input type="hidden" name="_next" value="https://yourdomain.co/thanks.html">
<input type="hidden" name="_subject" value="New Mail from Website!">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="name" id="xs_contact_name" class="form-control" placeholder="Name *">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" name="email" id="xs_contact_email" class="form-control" placeholder="Mail *">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="number" name="phone" id="xs_contact_phone" class="form-control" placeholder="Phone *">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="subject" id="xs_contact_subject" class="form-control" placeholder="Subject">
</div>
</div>
</div>
<div class="form-group">
<textarea name="massage" id="x_contact_massage" class="form-control" placeholder="Your Message *" cols="30" rows="10"></textarea>
</div>
<div class="text-center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary style2" id="xs_contact_submit">
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1636.2039275439681!2d77.81971150348225!3d12.741405120690796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae7148edf59e13%3A0xec1eef4cc2b02254!2sYazh%20Digital%20Solutions!5e0!3m2!1sen!2sin!4v1636531137158!5m2!1sen!2sin" style="border:0; height:450px" allowfullscreen="" loading="lazy"></iframe> 

</div>
<section class="call-to-action-area">
<div class="container">
<div class="row">
<div class="col-lg-5">
<div class="call-to-action-content">
<h2>Interested To Get Our Featured Service</h2>
</div>
</div>
<div class="col-lg-7">
<div class="btn-wraper">
<a href="contact.html" class="btn btn-info icon-right"><i class="icon icon-arrow-right"></i>Get Started Now</a>
</div>
</div>
</div>
</div>
</section>



@endsection