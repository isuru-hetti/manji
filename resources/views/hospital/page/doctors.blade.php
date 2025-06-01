@extends('hospital.master')

@section('content')
 <!--Hero section-->
    <section class="hero-contact">
        <div class="hero-content">
            <h1>Doctor Profiles</h1>
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
                <th>date</th>
                <th>time</th>
            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->
            <tr>
                <td>DS175</td>
                <td>DR. ATHULA WARANASINGHE</td>
                <td>Cardiology</td>
                <td>2025/3/14</td>
                <td>10.00 am</td>
            </tr>
            <tr>
                <td>DY129</td>
                <td>Dr. Jane Smith</td>
                <td>Neurology</td>
                <td>2025/3/20</td>
                <td>1.00 pm</td>
            </tr>
            <tr>
                <td>D0666</td>
                <td>Dr. Michael Lee</td>
                <td>Dermatology</td>
                <td>2025/3/22</td>
                <td>5.30 pm</td>
            </tr>
            <tr>
                <td>D7777</td>
                <td>Dr. Emily Davis</td>
                <td>Orthopedics</td>
                <td>2025/3/27</td>
                <td>6.30 am</td>
            </tr>
            <tr>
                <td>D2013</td>
                <td>DR. CHANDRA WEERASINGHE</td>
                <td>Neurology</td>
                <td>2025/3/16</td>
                <td>3.00 pm</td>
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
