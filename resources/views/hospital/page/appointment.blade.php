@extends('hospital.master')

@section('content')
<!--Hero section-->
    <section class="hero-contact">
        <div class="hero-content">
            <h1>Book An Appointment</h1>
        </div>
    </section>

    <!-- Appointment form section -->
    <div class="appointment-container">
        
        <form action="#" method="POST">

            <div class="form-group">
                <ion-icon name="person-outline"></ion-icon>
                <select id="doctor-select">
                    <option value="" disabled selected>Select a Doctor</option>
                    <option value="dr-athula warnasinghe">DR. ATHULA WARANASINGHE</option>
                    <option value="dr-jane-smith">Dr. Jane Smith</option>
                    <option value="dr-michael-lee">Dr. Michael Lee</option>
                    <option value="dr-emily-davis">Dr. Emily Davis</option>
                    <option value="dr-chandra weerasinghe">DR. CHANDRA WEERASINGHE</option>

                </select>
                <ion-icon name="help-circle-outline" class="help-icon"></ion-icon>
            </div>

            <div class="form-group">
                <ion-icon name="medkit-outline"></ion-icon>
                <select>
                    <option selected disabled>Any Specialization</option>
                    <option>Cardiology</option>
                    <option>Neurology</option>
                    <option>Dermatology</option>
                    <option>Orthopedics</option>
                </select>
            </div>

            <div class="form-group">
                <ion-icon name="business-outline"></ion-icon>
                <select>
                    <option selected disabled>Any Hospital</option>
                    <option>Care Compass Colombo</option>
                    <option>Care Compass Kandy</option>
                    <option>Care Compass Kurunegala</option>
                </select>
            </div>

            <!-- Date Picker -->
            <div class="form-group">
                <ion-icon name="calendar-outline"></ion-icon>
                <input type="date" id="appointment-date" required>
            </div>

            <!-- Time Picker (Visible after selecting a date) -->
            <div class="form-group" id="time-picker-group" style="display: none;">
                <ion-icon name="time-outline"></ion-icon>
                <input type="time" id="appointment-time" required>
            </div>

            <button type="button" class="search-button" onclick="window.location">Search</button>

        </form>
    </div>

    <!-- JavaScript to Show Time Picker After Selecting a Date -->
    <script>
        document.getElementById('appointment-date').addEventListener('change', function () {
            document.getElementById('time-picker-group').style.display = 'flex';
        });
    </script>
@endsection
