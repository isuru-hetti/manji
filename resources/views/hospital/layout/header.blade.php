<header>
    <div class="logo">
        <h1>Care Compass Hospitals</h1>
    </div>
    <nav>
        <ul>
            <li><a href="">Home</a></li>

            <li><a href="about">About Us</a></li>

            <li><a href="services">Services</a></li>




            <li><a href="doctors">Doctors</a></li>

            <li><a href="contactus">Contact Us</a></li>


            {{-- <li><a href="laboratory.html">Laboratory</a></li> --}}
@auth


            <li><a href="appointment">Appointments</a></li>

            <li><a href="payment">Payment Portal</a></li>

            @if (Auth::check() && Auth::user()->role === 'doctor')
            <li><a href="payment">Doctor Portal</a></li>
              @endif
            <li><a href="admin-portal">Admin Portal</a></li>
@endauth
            @guest
            <li><a href="sign-in" class="button signin">Sign In</a></li>

            <li><a href="sign-up" class="button signup">Sign Up</a></li>

            @endauth

            @auth

            <li class="dropdown" style="position: relative;">
                <a href="#" class="dropbtn"
                    onclick="event.preventDefault(); this.parentElement.classList.toggle('open');"
                    style="display: inline-block;">
                    {{ Auth::user()->first_name ?? 'User' }} {{ Auth::user()->last_name ?? 'Name' }}

                    <span style="margin-left: 5px; cursor: pointer;">&#9660;</span>
                </a>
                <ul class="dropdown-content"
                    style="display: none; position: absolute; left: 0; top: 100%; min-width: 120px; background: #0055ff; box-shadow: 0 2px 8px rgba(0,0,0,0.15); z-index: 100; padding: 0;">
                    <li style="list-style: none;">
                        <a href="faq"
                            style="display: block; padding: 8px 16px; color: #fff; text-decoration: none; position: relative;">
                            My Profile
                        </a>
                    </li>
                    <li style="list-style: none;">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                style="display: block; padding: 8px 16px; color: #fff; background: none; border: none; text-align: left; cursor: pointer; text-decoration: none; position: relative;">
                                 &nbsp; &nbsp;Log Out
                    </button>
                    </form>


            </li>
        </ul>
        </li>
         @endauth
        <style>
            .dropdown-content li a:hover {
                background: none;
            }

            .dropdown-content li a:hover::after {
                content: "";
                display: block;
                position: absolute;
                left: 16px;
                right: 16px;
                bottom: 4px;
                height: 2px;
                background: #fff;
                border-radius: 1px;
            }

        </style>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.dropdown .dropbtn').forEach(function(btn) {
                    btn.addEventListener('click', function(e) {
                        e.preventDefault();
                        var dropdown = this.parentElement;
                        var content = dropdown.querySelector('.dropdown-content');
                        if (content.style.display === 'block') {
                            content.style.display = 'none';
                        } else {
                            content.style.display = 'block';
                        }
                    });
                });
                // Optional: Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    document.querySelectorAll('.dropdown .dropdown-content').forEach(function(content) {
                        if (!content.parentElement.contains(e.target)) {
                            content.style.display = 'none';
                        }
                    });
                });
            });
        </script>
        </ul>
    </nav>
</header>
