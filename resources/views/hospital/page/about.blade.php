@extends('hospital.master')

@section('content')
 <!--About section-->




    <section class="about-section">

        <div class="overlay"></div>

        <div class="content">

            <h1>About Us</h1>

            <h2>Welcome to Care Compass Hospital</h2>
            <p>
                Where compassion meets excellence in healthcare. Established with a vision to redefine medical care, we have been
                proudly serving our community since 2024. Our team comprises highly skilled and knowledgeable professionals
                dedicated to providing exceptional healthcare services tailored to meet the unique needs of every patient.
                Care Compass Hospital is a full-service healthcare institution located in the heart of Kandy, Kurunegala, and Colombo.
                Since our inception, we have been committed to delivering comprehensive, patient-centered care, ensuring
                the well-being of our community.
            </p>
        </div>
    </section>

    <!-- Updated Our Working Best Process Section -->
    <section class="working-process">
        <h2>Our Working Best Process</h2>
        <div class="process-steps">
            <div class="step">
                <img src="{{asset('hospital/images/expertise.png')}}" alt="Expertise">
                <h3>Accept Insurance</h3>
            </div>
            <div class="step">
                <img src="{{('hospital/images/technology.png')}}" alt="New Technology">
                <h3>New Technology</h3>
            </div>
            <div class="step">
                <img src="{{asset('hospital/images/advice.png')}}" alt="Medical Advices">
                <h3>Medical Advices</h3>
            </div>
            <div class="step">
                <img src="{{asset('hospital/images/treatment.png')}}" alt="Medical Treatment">
                <h3>Medical Treatment</h3>
            </div>
        </div>
    </section>

    <section class="vision-mission">
        <div class="vision">
            <h2>Our Vision</h2>
            <p>To be a beacon of hope and healing, setting new standards in healthcare excellence and innovation.</p>
        </div>
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To provide comprehensive, compassionate, and accessible healthcare services that improve the lives of our patients and communities.</p>
        </div>
    </section>

 @endsection
