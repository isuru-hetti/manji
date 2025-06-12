@extends('hospital.master')
@section('content')
<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary nav-link-animate" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Doctor
</button>
{{-- update doctor profile --}}
<button type="button" class="btn btn-primary nav-link-animate" data-bs-toggle="modal" data-bs-target="#updateDoctorModal">
  Update Doctor Profile
</button>
{{-- add doctor timetable --}}
<button type="button" class="btn btn-primary nav-link-animate" data-bs-toggle="modal" data-bs-target="#doctorTimeModal">
  Add New Schedule For Doctor
</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

     <a href="appointment-admin" class="btn btn-success nav-link-animate">
      <i class="fa fa-home"></i> View Appointments
     </a>

<br>
<br> <h4>Doctors Availability Time Table</h4>
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
                <th>Delete</th>
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
                <td><a href="/delete-doctor-schedule-{{$doctor->schedule_id}}"><i class="btn btn-danger btn-sm">Delete </i></a></td>
            </tr>
            @endforeach

            <tr>
                <td>D9</td>
                <td>Dr. Mano Dulmini</td>
                <td>Neurology</td>
                <td>kandy</td>
                <td>2025/3/16</td>
                <td>07.00 am</td>
                <td>10.00 am</td>
                <td><a href=""><i class="btn btn-danger btn-sm">Delete </i></a></td>

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
                <th>Delete</th>

            </tr>
        </thead>
        <tbody>
            <!-- Rows of doctors (static or dynamically generated) -->

                @if ($messages->isEmpty() || !$messages)
                   <h4>No Any Messages Available</h4>

                @endif

            @foreach ($messages as $message)

            <tr>
                <td>D{{$message->id}}</td>
                <td>{{$message->name}} </td>
                <td>{{$message->email}}</td>
                <td>{{$message->phone}}</td>
                <td>{{$message->subject}}</td>
                <td>{{$message->message}}</td>
                <td><a href="/delete-message-{{$message->id}}"><i class="btn btn-danger btn-sm">Delete </i></a></td>


            </tr>
            @endforeach


            <!-- Add as many rows as needed for demonstration -->
        </tbody>
    </table>
<br>
<div class="d-flex justify-content-center my-3">
  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#adminModal">
    Create Admin Role and Set Default User
  </button>
</div>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create New Doctor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <br>
      <p><strong>before update user role to doctor, first should be registered as a user <br>
      enter correct user email here</strong></p>
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

{{-- Create admin --}}
<div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Admin Role and Remove</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="create-admin" method="POST">
      @csrf
      <div class="modal-body">
         <div class="form-group">
                     <select id="role" name="name" type="text" class="form-control" placeholder="" required>
                        <option class="has-arrow waves-effect" value="" disabled selected>--Select User-- </option>
                        @foreach ($allUsers as $user )
                        <option value="{{ $user->id }}">{{ $user->first_name }} {{ $user->last_name }} </option>

                        @endforeach

                    </select>
                     <select id="role" name="role" type="text" class="form-control" placeholder="" required>
                        <option class="has-arrow waves-effect" value="" disabled selected>--Select Doctor Role-- </option>
                        <option value="user">User</option>
                        <option value="admin">Hospital Admin</option>
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



@endsection
