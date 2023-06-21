<!-- welcome.blade.php -->

@extends('layouts.app')

@section('content')
  <section id="hero">
    <div class="container">
      <div class="hero-content">
        <h1>Welcome to our Logistics Services</h1>
        <p>Efficient and reliable logistics solutions for your business</p>
        <a class="cta-button" href="#contact">Contact Us</a>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="container">
      <h2>Our Services</h2>
      <div class="service-card">
        <img src="{{ asset('images/warehouse.jpeg') }}" alt="Warehousing">
        <h3>Warehousing</h3>
        <p>Secure storage and distribution of your goods</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/rider.jpeg') }}" alt="Transportation">
        <h3>Transportation</h3>
        <p>Efficient transportation solutions for timely deliveries</p>
      </div>
      <div class="service-card">
        <img src="{{ asset('images/tracking.jpeg') }}" alt="Tracking">
        <h3>Tracking</h3>
        <p>Real-time tracking and visibility of your shipments</p>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Get in touch with our logistics experts for a customized solution</p>
      <a class="cta-button" href="mailto:info@logistics.com">Email Us</a>
    </div>
  </section>
@endsection
