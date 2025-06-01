@extends('hospital.master')
@section('content')

 <!-- Hero Section -->
<section class="hero-contact">
    <div class="hero-content">
        <h1>Contact Us</h1>
    </div>
</section>

<!-- Contact Info -->
<section class="contact-info">
    <div class="container">
        <div class="box">
            <div class="icon"><img src="{{('hospital/images/location.jpg')}}" alt="Location"></div>
            <h2>Kandy</h2>
            <p>No 123, Peradeniya Road, Kandy, Sri Lanka.</p>
            <p>011 6334567</p>
            <p>info@carecompasshospitals.lk</p>
        </div>
        <div class="box">
            <div class="icon"><img src="{{asset('hospital/images/location.jpg')}}" alt="Location"></div>
            <h2>Colombo</h2>
            <p>No 45, Galle Road, Colombo 03, Sri Lanka.</p>
            <p>081 3223 524</p>
            <p>info@carecompasshospitals.lk</p>
        </div>
        <div class="box">
            <div class="icon"><img src="{{asset('hospital/images/location.jpg')}}" alt="Location"></div>
            <h2>Kurunegala</h2>
            <p>No 223, Dambulla Road, Kurunegala, Sri Lanka.</p>
            <p>037 7390 356</p>
            <p>info@carecompasshospitals.lk</p>
        </div>
    </div>
</section>

<!-- Map and Contact Form -->
<section class="map-queries">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?..." width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="contact-form">
        <h2>Get In Touch With Us</h2>
        <form action="contactus.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter Your Email" required>
            </div>
            <div class="form-group">
                <input type="text" name="phone" placeholder="Enter Your Phone Number" required>
                <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <textarea name="message" placeholder="Write Your Message" required></textarea>
            <button type="submit" name="submit">Send Message</button>
        </form>
    </div>
</section>

  @endsection
