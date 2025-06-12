<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
           max-width: 800px;
            margin: 20 auto;
            padding: 20px;
            background-color: #f9f9f9;

        }
        .header, .footer {
            text-align: center;
        }
        .header h2 {
            margin-bottom: 0;
        }
        .header p {
            margin: 2px 0;
        }
        .section {
            margin-top: 20px;
        }
        .section-title {
            font-weight: bold;
            text-decoration: underline;
            margin-bottom: 8px;
        }
        table {
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
            margin-top: 8px;
        }
        td {
            padding: 6px;
            vertical-align: top;
        }
        .content-box {
            min-height: 100px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 6px;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        <h2>Manjikki Hospital</h2>
        <p>No.123, Rose Street, Kandy</p>
        <p>Hotline: +94 76 373 3737</p>
        <p><em>"Caring Hands, Healing Hearts"</em></p>
        <p><strong><u>MEDICAL RECEIPT</u></strong></p>
        <hr>
    </div>

    <!-- Appointment & Patient Info -->
    <div class="section">
        <div class="section-title">Appointment Details</div>
        <table>
            <tr>

                <td><strong>Appointment No:</strong> {{$appointment->appointment_id}}</td>
                <td><strong>Date & Time:</strong> {{$appointment->appointment_date}} , {{$appointment->appointment_time}}</td>
            </tr>
            <tr>
                <td><strong>Patient Name:</strong> {{$appointment->patient_first_name}} {{$appointment->patient_last_name}}</td>
            <td><strong>Age:</strong> {{$patientAge}}</td>
            </tr>
            <tr>
                <td><strong>Contact No:</strong>{{$appointment->patient_contact_no}}</td>

            </tr>
            <tr>
                <td><strong>Location:</strong> {{$appointment->hospital_location}} </td>
                <td><strong>Doctor:</strong> {{$doctor->first_name}} {{$doctor->last_name}} </td>
            </tr>

        </table>
        <hr>
    </div>

    <!-- Description -->
    <div class="section">
        <div class="section-title">Description of Sick/Injury</div>
        <div class="content-box">

        </div>
    </div>

    <!-- Treatments -->
    <div class="section">
        <div class="section-title">Treatments</div>
        <div class="content-box">

        </div>
    </div>

    <!-- Drugs -->
    <div class="section">
        <div class="section-title">Drugs</div>
        <div class="content-box">

        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <hr>
        <p>Thank you for visiting Manjikki Hospital</p>
        <p>We wish you a speedy recovery!..</p>
    </div>

</body>
</html>
