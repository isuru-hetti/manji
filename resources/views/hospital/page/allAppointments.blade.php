
@extends('hospital.master')
@section('content')

<br>
<br> <h4>Appointments</h4>

</div>
        <!-- Search Bar -->
        <div class="search-container">
            <label for="doctorSearch">Search: </label>
            <input type="text" id="doctorSearch" placeholder="Search by Name or Specialty...">
        </div>
    </div>

 <table id="doctorTable">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>date</th>
                <th>time</th>
                <th>status</th>
                <th>Receipt</th>
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->
            @foreach ($appointments as $appointment)

            <tr>
                <td>P{{$appointment->appointment_id}}</td>
                <td>{{$appointment->patient_first_name}} {{$appointment->patient_last_name}}</td>
                <td>{{$appointment->hospital_location}}</td>
                <td>{{$appointment->appointment_date}}</td>
                <td>{{$appointment->appointment_time}}</td>

                <td> <div class="badge {{ $appointment->status == 0 ? 'bg-danger' : 'bg-success' }}">{{ $appointment->status == 0 ? 'Pending' : 'Completed' }}</div></td>
                <td>
                    <a href="/print-receipt-{{$appointment->appointment_id}}" class="btn btn-primary btn-sm" target="_blank">
                        Print PDF
                    </a>
                </td>
              <td>
                <a href="/delete-appointment-{{$appointment->appointment_id}}" class="btn btn-danger btn-sm w-100 mb-1">Delete</a>
                <form action="update-appointment-status-{{$appointment->appointment_id}}" method="POST">
                 @csrf
                    <button type="submit" class="btn btn-success btn-sm w-100">Checked</button>
                </form>
          </td>
            </tr>
            @endforeach


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


