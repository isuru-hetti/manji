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

        <form action="create-appointment" method="POST">
            @csrf

            <div class="form-group">
                <ion-icon name="person-outline"></ion-icon>
                <select id="doctor-select" name="doctor_id">
                    <option value="" disabled selected>Select a Doctor</option>
                    @if (!$doctors || $doctors->isEmpty())
                        <option value="" disabled>No doctors available</option>
                    @endif
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                    @endforeach

                </select>
                <ion-icon name="help-circle-outline" class="help-icon"></ion-icon>
            </div>

            {{-- <div class="form-group">
                <ion-icon name="medkit-outline"></ion-icon>
                <select>
                    <option selected disabled>Any Specialization</option>
                    <option>Cardiology</option>
                    <option>Neurology</option>
                    <option>Dermatology</option>
                    <option>Orthopedics</option>
                </select>
            </div> --}}

            <div class="form-group">
                <ion-icon name="business-outline"></ion-icon>
                <select id="location" name="location">
                    <option selected disabled>Select Hospital</option>
                    <option value="colombo">Care Compass Colombo</option>
                    <option value="kandy">Care Compass Kandy</option>
                    <option value="kurunegala">Care Compass Kurunegala</option>
                </select>
            </div>

            <!-- Date Picker -->
            <div class="form-group">
                <ion-icon name="calendar-outline"></ion-icon>
                <input type="date" id="appointment-date" name="date" required>

            </div>

            <!-- Time Picker (Visible after selecting a date) -->
            <div class="form-group" id="time-picker-group" style="display: none;">
                <ion-icon name="time-outline"></ion-icon>
                <input type="time" id="appointment-time" name="time" required>
            </div>

            <button type="submit" id="appointment-date" class="search-button">Sumbit</button>

        </form>
    </div>

    <!-- JavaScript to Show Time Picker After Selecting a Date -->
    <script>
        document.getElementById('appointment-date').addEventListener('change', function () {
            document.getElementById('time-picker-group').style.display = 'flex';
        });
    </script>
@endsection
