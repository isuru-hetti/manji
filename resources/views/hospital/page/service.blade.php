@extends('hospital.master')

@section('content')

<!--Hero section-->

    <section class="hero-services">
        <h2>Our Services</h2>
        <div class="services-container">
            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="OPD Icon" class="service-icon">
                <h3>24hrs OPD Service</h3>
            </div>
            <div class="service highlighted">
                <img src="{{asset('hospital/images/services.png')}}" alt="Pharmacy Icon" class="service-icon">
                <h3>24hrs Pharmacy</h3>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="VOG Icon" class="service-icon">
                <h3>24hrs VOG Service</h3>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="X-Ray Icon" class="service-icon">
                <h3>X-Ray & ECG</h3>
            </div>
            <div class="service highlighted">
                <img src="{{asset('hospital/images/services.png')}}" alt="Labour room Icon" class="service-icon">
                <h3>Labour Room</h3>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="Baby Vaccine Icon" class="service-icon">
                <h3>Baby Vaccine</h3>
            </div>
            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="Operating theater Icon" class="service-icon">
                <h3>Operating Thearter</h3>
            </div>

            <div class="service">
                <img src="{{asset('hospital/images/services.png')}}" alt="Ambulance Icon" class="service-icon">
                <h3>24hrs Ambulance Service</h3>
            </div>

        </div>
    </section>

    <!-- Facilities Section -->
    <section class="facilities">
        <h2>What Facilities We Provided</h2>
        <div class="facility-container">

            <div class="facility-card">
                <div class="facility-image">
                    <img src="{{('hospital/images/eye.jpg')}}" alt="Eye Care Services">
                </div>
                <div class="facility-info">
                    <h4>MEDICAL SURGERY</h4>
                    <h3>Eye Care Services</h3>
                    <i class="fas fa-hospital"></i>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-image">
                    <img src="{{('hospital/images/cardiology.jpg')}}" alt="Cardiology Services">
                </div>
                <div class="facility-info">
                    <h4>MEDICAL THERAPY</h4>
                    <h3>Cardiology Services</h3>
                    <i class="fas fa-user-md"></i>
                </div>
            </div>

            <div class="facility-card">
                <div class="facility-image">
                    <img src="{{('hospital/images/dental2.jpg')}}" alt="Dental Services">
                </div>
                <div class="facility-info">
                    <h4>MEDICAL PEDIATRICS</h4>
                    <h3>Dental Services</h3>
                    <i class="fas fa-notes-medical"></i>
                </div>
            </div>

        </div>
    </section>im

@endsection
