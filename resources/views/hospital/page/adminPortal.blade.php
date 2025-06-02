@extends('hospital.master')
@section('content')
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Doctor
</button>
{{-- update doctor profile --}}
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateDoctorModal">
  Update Doctor Profile
</button>
{{-- add doctor timetable --}}
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#doctorTimeModal">
  Add New Schedule For Doctor
</button>
<br>
<br> <h4>Doctors Availability Table</h4>
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
            @foreach ($doctorsAvailablility as $doctor)

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
                <td>Dr. Chandana Seneviratne</td>
                <td>Neurology</td>
                <td>2025/3/16</td>
                <td>3.00 pm</td>
                <td>10.00 am</td>
                <td>10.00 am</td>

            </tr>
            <!-- Add as many rows as needed for demonstration -->
        </tbody>
    </table>

<br>
<br> <h4>Messages</h4>
<table id="doctorTable">
        <thead>
            <tr>
                <th> ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Subject</th>
                <th>Message</th>

            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->
            @foreach ($messages as $message)

            <tr>
                <td>D{{$message->id}}</td>
                <td>{{$message->name}} </td>
                <td>{{$message->email}}</td>
                <td>{{$message->phone}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>

            </tr>
            @endforeach

            <tr>
                <td>D000</td>
                <td>Dr. Chandana Seneviratne</td>
                <td>Neurology</td>
                <td>2025/3/16</td>
                <td>3.00 pm</td>
                <td>10.00 am</td>
                <td>10.00 am</td>

            </tr>
            <!-- Add as many rows as needed for demonstration -->
        </tbody>
    </table>







<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="create-doctor" method="POST">
      @csrf
      <div class="modal-body">
         <div class="form-group">
                    <input type="text" name="email" placeholder="Enter email" required>
                     <select id="role" name="role" type="text" class="form-control" placeholder="" required>
                        <option class="has-arrow waves-effect" value="" disabled selected>--Select Doctor Role-- </option>
                        <option value="user">User</option>
                        <option value="doctor">Doctor</option>
                    </select>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

{{-- add doctor timetable --}}

<div class="modal fade" id="doctorTimeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Time and Date for Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="doctor-schedule-create" method="POST">
      @csrf
      <div class="modal-body">

                    <select class="form-group" name="name" required>
                    <option selected disabled>Select Doctor</option>
                    @if (!$doctors || $doctors->isEmpty())
                        <option value="" disabled>No doctors available</option>

                    @endif

                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                    @endforeach

                </select>

                    <select id="location" name="location" class="form-group">
                    <option selected disabled>Select Hospital</option>
                    <option value="colombo">Care Compass Colombo</option>
                    <option value="kandy">Care Compass Kandy</option>
                    <option value="kurunegala">Care Compass Kurunegala</option>
                </select>
                    <input class="form-group" type="date" name="date" placeholder="Enter Date" required>
                    <input class="form-group" type="time" name="start_time" placeholder="Enter Out Time" required>
                    <input class="form-group" type="time" name="end_time" placeholder="Enter Out Time" required>

                </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

{{-- update doctor profile --}}
<div class="modal fade" id="updateDoctorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Time and Date for Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="update-doctor" method="POST">
      @csrf
      <div class="modal-body">

        <select class="form-group" name="name" required>
                    <option selected disabled>Select Doctor</option>
                    @if (!$doctors || $doctors->isEmpty())
                        <option value="" disabled>No doctors available</option>

                    @endif

                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->id }}">{{ $doctor->first_name }} {{ $doctor->last_name }}</option>
                    @endforeach


                </select>
                    <input class="form-group" type="text" name="specialization" placeholder="Enter specialization" required>
                    <input class="form-group" type="text" name="description" placeholder="description" required>


                </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection
