@extends('hospital.master')
@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Doctor
</button>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
@endsection
