@extends('hospital.master')
@section('content')
<!-- Payment Section -->
<section class="hero-contact">
        <div class="hero-content">
            <h1>Payment Portal</h1>
        </div>
    </section>

    <div class="payment-form-container">
        <div class="payment-container">
            <h2>Payment Information</h2>
            <form action="payment.php" method="POST">
                <div class="form-group">
                    <select name="hospital" required>
                        <option disabled selected>Select the Hospital</option>
                        <option>Colombo Main Branch</option>
                        <option>Kandy Branch</option>
                        <option>Kurunegala Branch</option>
                    </select>
                    <select name="payment_category" required>
                        <option disabled selected>Select the Payment Category</option>
                        <option>Consultation</option>
                        <option>Laboratory Tests</option>
                        <option>Hospitalization</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" name="invoice_no" placeholder="Invoice No." required>
                    <input type="text" name="patient_name" placeholder="Patient Name" required>
                </div>

                <div class="form-group">
                    <input type="number" name="amount" placeholder="Amount" required>
                </div>
        </div>

        <div class="payer-container">
            <h2>Payer Information</h2>
            <input type="text" name="payer_name" placeholder="Payer Name" required>
            <div class="form-group">
                <input type="text" name="nic_passport" placeholder="NIC or Passport No." required>
                <input type="text" name="contact_no" placeholder="Contact No." required>
            </div>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="address" placeholder="Address" required>

            <label class="payment-label">Payment Type</label>
            <div class="payment-options">
                <label class="payment-option">
                    <input type="radio" name="payment" value="visa_mastercard" checked>
                    <img src="visa_mastercard.png" alt="Visa & Mastercard">
                </label>
                <label class="payment-option">
                    <input type="radio" name="payment" value="discover">
                    <img src="discover.png" alt="Discover">
                </label>
            </div>

            <div class="terms">
                <input type="checkbox" required>
                <label>I Agree <a href="#">Terms of Use</a></label>
            </div>

            <div class="captcha">
                <img src="captcha_placeholder.png" alt="Captcha">
            </div>

            <button type="submit" class="pay-btn">PAY NOW</button>
        </form>
    </div>
    </div>

@endsection

