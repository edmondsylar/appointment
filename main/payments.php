<?php include_once "includes/head.php"; ?>
<main>
  <div id="breadcrumb">
    <div class="container">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="index.php">Bookings</a></li>
        <li>Payments</li>
      </ul>
    </div>
  </div>
  <!-- /breadcrumb -->

  <div class="container margin_60">
    <div class="row">
      <div class="col-xl-8 col-lg-8">
        <div class="box_general_3 cart">

          <div class="form_title">
            <h3><strong>2</strong>Pay To Complete Booking</h3>
            <p>Make payments to complete the Booking process</p>
          </div>
          <p class="step" id="mydiv">
            Click the button below to complete the booking. <br>
            A charge of 5000 will be deducted from your account <br> And an appointment will be scheduled with the doctor you selected. previously
          </p>
          <div align="center" class="step">
            <form method="post" style="margin:0px" action="https://payments.yo.co.ug/webexpress/" target="_blank">
              <input type="image" name="submit" src="https://payments.yo.co.ug/webexpress/images/paybutton.png" />
              <input type="hidden" name="bid" value="217" />
              <input type="hidden" name="currency" value="UGX" />
              <input type="hidden" name="amount" value="5000" />
              <input type="hidden" name="narrative" value="appointment" />
              <input type="hidden" name="reference" value="appointmentRef" />
              <input type="hidden" name="provider_reference_text" value="Appointment With Doctor set" />
              <input type="hidden" name="account" value="100712303477" />
              <input type="hidden" name="return" value="https://hsvug.com/appoint/main/?unique_transaction_id=0&transaction_reference=0" />
              <input type="hidden" name="prefilled_payer_email_address" value="" />
              <input type="hidden" name="prefilled_payer_mobile_payment_msisdn" value="" />
              <input type="hidden" name="prefilled_payer_names" value="" />
              <input type="hidden" name="abort_payment_url" value="" />
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /col -->
  </div>
  <!-- /row -->
  </div>
  <!-- /container -->
</main>