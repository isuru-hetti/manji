@extends('hospital.master')

@section('content')

    <div class="login-container">
    <div class="login-box">
        <div class="login-header">
            <img src="{{asset('hospital/images/login1.jpg')}}" alt="User Icon">
            <h2>User Login</h2>
        </div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group-login">
                <label for="username">Email</label> <br> <br>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group-login">
                <label for="password">Password</label> <br> <br>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn-login">Log in</button>
        </form>

        <div class="extra-links">
            <a href="forgot-password.php" class="forgot-password">Forgot Password?</a>
            <p class="register-text">Don't have an account? <a href="signup.php" class="register-link">Register Here</a></p>
        </div>
    </div>
</div>
@endsection
