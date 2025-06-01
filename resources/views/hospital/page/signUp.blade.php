@extends('hospital.master')

@section('content')
<!--Register form -->

    <div class="form-container">
        <h2>Register </h2>
        <form method="POST" action="{{ route('register') }}">
@csrf
            <div class="row">
                <select name="title" id="title" class="form-select">
                <option value="" disabled selected>Select Title</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss.">Miss</option>
                <option value="Dr.">Dr.</option>
                <option value="Other.">Other.</option>

                </select>

            </div>

            <div class="row">
                <input id="first_name" name="first_name" type="text" placeholder="First Name">

            </div>

            <div class="row">
                <input id="last_name" name="last_name" type="text" placeholder="Last Name">

            </div>

            <div class="row">
                <input id="date_of_birth" name="date_of_birth" type="date" placeholder="Date of Birth">
            </div>

             <div class="row">
                <input id="address" name="address" type="text" placeholder="Address">
            </div>

            <div class="row">
                <input id="contact_no" name="contact_no" type="text" placeholder="Contact No (Mobile)">

            </div>

            <div class="row">
                <input id="email" name="email" type="email" placeholder="Email">

            </div>

            <div class="row">
                <input id="password" type="password" name="password" placeholder="Password">
            </div>


            <div class="row">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password">
            </div>

            <button type="submit" class="register-btn">Register Now</button>
        </form>
    </div>
    @endsection

