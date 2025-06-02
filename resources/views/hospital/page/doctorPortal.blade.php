
@extends('hospital.master')
@section('content')

<br>
<br> <h4>My Patients</h4>
 <table id="doctorTable">
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>date</th>
                <th>time</th>
                <th>status</th>

            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->
            @foreach ($patients as $patient)

            <tr>
                <td>P{{$patient->appointment_id}}</td>
                <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                <td>{{$patient->location}}</td>
                <td>{{$patient->date}}</td>
                <td>{{$patient->time}}</td>
                <td> <div class="badge {{ $patient->status == 0 ? 'bg-danger' : 'bg-success' }}">{{ $patient->status == 0 ? 'Pending' : 'Completed' }}</div></td>

            </tr>
            @endforeach

            <tr>
                <td>D9</td>
                <td>Mr. Chandana Seneviratne</td>
                <td>kandy</td>
                <td>2025/3/16</td>
                <td>3.00 pm</td>
                <td><div class="badge bg-danger">pending </div></td>


            </tr>
            <!-- Add as many rows as needed for demonstration -->
        </tbody>
    </table>


@endsection


