@extends('hospital.master')

@section('content')

<!-- Hero Section -->
    <section class="hero">
        <h2>Welcome To The Care Compass Hospitals</h2>
        <p>A Home For Your Health</p>
        <a href="appointment" class="button">Book an Appointment</a>
    </section>

    <!-- New Hospital Section -->
    <section class="hospital-info">
        <div class="hospital-container">
            <div class="hospital-image">

                <!-- Right Side Slideshow -->
                <div class="lab-slideshow">
                    <img src="{{asset('hospital/images/hospital1.jpg')}}" alt="Hospital Image 1" class="slide-img active">
                    <img src="{{asset('hospital/images/hospital2.jpg')}}" alt="Hospital Image 2" class="slide-img">
                    <img src="{{asset('hospital/images/hospital3.jpg')}}" alt="Hospital Image 3" class="slide-img">

                </div>

                <!-- JavaScript for Slideshow -->
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        let currentSlide = 0;
                        const slides = document.querySelectorAll(".slide-img");

                        function showSlide() {
                            slides.forEach(slide => slide.classList.remove("active"));
                            slides[currentSlide].classList.add("active");
                            currentSlide = (currentSlide + 1) % slides.length;
                        }

                        setInterval(showSlide, 4000);
                    });
                </script>

            </div>
            <div class="hospital-details">
                <h2>Care Compass Hospitals - Colombo | Kandy | Kurunegala</h2>
                <p>“Care Compass Hospitals” is a well-reputed private hospital network that was registered under the Ministry of Health (MoH). It has three main branches: Kandy, Colombo, and Kurunegala, respectively.</p>
                <ul>
                    <li>✔ 24hrs OPD Service</li>
                    <li>✔ 24hrs Pharmacy</li>
                    <li>✔ 24hrs VOG Service</li>
                    <li>✔ Operating Theatre</li>
                    <li>✔ Labour Room</li>
                    <li>✔ Well Women Clinic</li>
                </ul>
                <p class="hospital-contact"><strong>0116 334 567</strong></p>
                <p> Do You Have Any Questions?</p>
                <a href="about.html" class="button">Read More</a>
            </div>
        </div>
    </section>

    <!-- Highlights Section -->
    <section class="highlights">
        <div class="highlight">
            <h3>Main Services</h3>
            <p>Explore our range of medical services designed for your care.</p>
            <a href="services.html">Learn More</a>
        </div>
        <div class="highlight">
            <h3>Doctor Profiles</h3>
            <p>Meet our highly qualified doctors available for consultation.</p>
            <a href="doctors.html">View Doctors</a>
        </div>
        <div class="highlight">
            <h3>Our Locations</h3>
            <p>Find our hospital branches near you.</p>
            <a href="contactus.html">View Locations</a>
        </div>
    </section>

    <!-- Our Services Section -->

    <section class="services-container-paragraph">
        <p>State of the art Hospital with most reliable & caring service</p>
    </section>

    <section class="our-services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service-box">
                <img src="{{asset('hospital/images/consultation.jpg')}}" alt="Doctor Consultation">

                <h3>Doctor Consultation</h3>
            </div>
            <div class="service-box">
                <img src="{{asset('hospital/images/councelling.jpg')}}" alt="Counselling">
                <h3>Counselling</h3>
            </div>
            <div class="service-box">
                <img src="{{asset('hospital/images/payeasy.jpg')}}" alt="Easy Payments">
                <h3>Easy Payments</h3>
            </div>
            <div class="service-box">
                <img src="{{asset('hospital/images/pharmacy.png')}}" alt="Pharmacy">
                <h3>Pharmacy</h3>
            </div>

            <div class="service-box">
                <img src="{{asset('hospital/images/lab.jpg')}}" alt="Laboratories">
                <h3>Laboratories</h3>
            </div>
        </div>
    </section>

    <!-- Family Health Hub Section -->
    <section class="family-health-hub">
        <h2>Family Health Hub</h2>
        <h3>Caring for Every Generation</h3>
        <div class="services-grid">
            <div class="service">
                <img src="{{asset('hospital/images/maternity.jpg')}}" alt="Maternity Ward">
                <h4>Maternity Ward</h4>
                <p>Experience exceptional care and support during this transformative journey. Our Maternity Ward provides a nurturing environment, expert medical guidance, and personalized attention for a safe and comfortable childbirth experience.</p>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/baby.jpg')}}" alt="Baby Unit">
                <h4>Baby Unit</h4>
                <p>Dedicated to the tiniest patients, our Baby Unit offers care for newborns. With specialized medical attention, round-the-clock monitoring, and a compassionate team, your baby’s well-being is our priority.</p>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/ent.jpg')}}" alt="ENT Centre">
                <h4>ENT Centre</h4>
                <p>Addressing ear, nose, and throat concerns, our ENT Centre offers specialized diagnostics, treatments, and surgeries. Our experienced ENT specialists provide expert care for a range of conditions, ensuring your well-being.</p>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/dental.jpg')}}" alt="Dental Clinic">
                <h4>Dental Clinic</h4>
                <p>Your oral health matters, and our Dental Clinic is dedicated to maintaining your smile. Our skilled dentists provide a full range of dental services, from routine checkups to advanced treatments.</p>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/cardiac.jpg')}}" alt="Cardiac Care Centre">
                <h4>Cardiac Care Centre</h4>
                <p>Our Cardiac Care Unit specializes in delivering advanced medical care for heart-related conditions. Equipped with modern technology and expert cardiologists, we ensure the best possible treatment for your heart.</p>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/physiotherapy.jpg')}}" alt="Physiotherapy Center">
                <h4>Physiotherapy Center</h4>
                <p>Regain your mobility and well-being with our Physiotherapy Center. Our skilled therapists create personalized rehabilitation programs to help you recover and maintain an active lifestyle.</p>
            </div>
        </div>
    </section>

    <!-- Simple Process Section -->
    <section class="process-section">
        <h4 class="process-subtitle">Simple Process</h4>
        <h2 class="process-title">How it helps you stay strong</h2>

        <div class="process-container">
            <div class="process-step">
                <img src="{{asset('hospital/images/a2.jpg')}}" alt="Make Appointment">
                <h3>Make Appointment</h3>
                <p>Secure your appointment effortlessly, taking the first step towards better health.</p>
            </div>

            <div class="process-step">
                <img src="{{asset('hospital/images/specialist.jpg')}}" alt="Select Specialist">
                <h3>Select Specialist</h3>
                <p>Find the perfect match for your medical needs and gain expert guidance.</p>
            </div>

            <div class="process-step">
                <img src="{{asset('hospital/images/advice2.jpg')}}" alt="Expert Advice">
                <h3>Expert Advice</h3>
                <p>Get personalized consultation, ensuring you're on the path to recovery and relief.</p>
            </div>

            <div class="process-step">
                <img src="{{asset('hospital/images/cure.jpg')}}" alt="Get Cure & Relief">
                <h3>Get Cure & Relief</h3>
                <p>Access top-notch treatment, ensuring your journey to wellness is supported at every step.</p>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section">
        <div class="cta-container">
            <div class="cta-icon">
                <img src="{{asset('hospital/images/bookappointmenticon.jpg')}}" alt="Medical Icon">
            </div>
            <div class="cta-text">
                <p>
                    Seeking professional and trustworthy healthcare?<br>
                    Feel free to reach out to us without hesitation.
                </p>
            </div>
            <div class="cta-button">
                <a href="appointment.html" class="button">Make Appointment</a>

            </div>
        </div>
    </section>

@endsection
