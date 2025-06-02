@extends('hospital.master')

@section('content')
 <!--Hero section-->
    <section class="hero-contact">
        <div class="hero-content">
            <h1>Doctors Availability</h1>
        </div>
    </section>

    <!-- Container for the doctor channeling page -->
    <div class="doctor-page-container">

    </div>
        <!-- Search Bar -->
        <div class="search-container">
            <label for="doctorSearch">Search: </label>
            <input type="text" id="doctorSearch" placeholder="Search by Name or Specialty...">
        </div>
    </div>

    <!-- Table of Doctors -->
    <table id="doctorTable">
        <thead>
            <tr>
                <th>Doctor ID</th>
                <th>Name</th>
                <th>Specialty</th>
                <th>Location</th>
                <th>date</th>
                <th>From time</th>
                <th>To time</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->
            @foreach ($doctors as $doctor)

            <tr>
                <td>D{{$doctor->doctor_id}}</td>
                <td>{{$doctor->first_name}} {{$doctor->last_name}}</td>
                <td>{{$doctor->specialization}}</td>
                <td>{{$doctor->location}}</td>
                <td>{{$doctor->date}}</td>
                <td>{{$doctor->start_time}}</td>
                <td>{{$doctor->end_time}}</td>
            </tr>
            @endforeach

            <tr>
                <td>D000</td>
                <td>Mr. Chandana Seneviratne</td>
                <td>Neurology</td>
                <td>Kandy</td>
                <td>2025/3/16</td>
                <td>3.00 pm</td>
                <td>10.00 am</td>

            </tr>
            <!-- Add as many rows as needed for demonstration -->
        </tbody>
    </table>

    <script>
        // -- 1. SEARCH FUNCTIONALITY --
        const doctorSearchInput = document.getElementById("doctorSearch");
        const doctorTable = document.getElementById("doctorTable");
        const tableRows = doctorTable.getElementsByTagName("tbody")[0].getElementsByTagName("tr");

        doctorSearchInput.addEventListener("keyup", function () {
            const filter = doctorSearchInput.value.toUpperCase();
            for (let i = 0; i < tableRows.length; i++) {
                const row = tableRows[i];
                // We check the concatenated text in "Name" + "Specialty" columns
                const nameCell = row.getElementsByTagName("td")[1].innerText.toUpperCase();
                const specialtyCell = row.getElementsByTagName("td")[2].innerText.toUpperCase();
                if (nameCell.indexOf(filter) > -1 || specialtyCell.indexOf(filter) > -1) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            }
            // After searching, re-init pagination (optional)
            currentPage = 1;
            paginateTable();
        });

    </script>
@endsection
