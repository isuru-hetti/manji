<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Care Compass Hospital</title>
    <link rel="stylesheet" href="{{ asset('hospital/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/doctors.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/appointment.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/signup.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/payment.css') }}">
    <link rel="stylesheet" href="{{ asset('hospital/css/contactus.css') }}">
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>



    <!-- Top Bar -->
    @include('hospital.layout.topbar')
    <!-- Header -->

    @include('hospital.layout.header')
    @include('hospital.layout.notification')
    @yield('content')

    <!-- Footer -->
    @include('hospital.layout.footer')

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
