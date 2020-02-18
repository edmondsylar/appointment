<?php include_once "includes/head.php"; ?>
<?php
  $email = $_GET['email'];

 ?>
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
          <h3><strong>2</strong>Payment Information</h3>
          <p>
            Enter credit card details to complete the booking
          </p>
        </div>
        <form action="back/payments.php" method="POST">
        <div class="step">
          <div class="form-group">
            <label>Name on card</label>
            <input type="text" class="form-control" id="name_card_booking" name="card_names" placeholder="John doe">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="hidden" name="email" value="<?php echo $email; ?>">
                <label>Card number</label>
                <input type="text" id="card_number" name="card_number" class="form-control" placeholder="xxxx - xxxx - xxxx - xxxx">
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <img src="img/payments.png" alt="Cards" class="cards">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>Expiration date</label>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="MM">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="Year">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Security code</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                    </div>
                  </div>
                  <div class="col-md-8">
                    <img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>CVV number</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End row -->


        </div>
        <hr>

        <div id="policy">
          <h4>Cancellation policy</h4>
          <div class="form-group">
            <label>
              <input type="checkbox" name="policy_terms" id="policy_terms"> I accept terms and conditions and general policy.
            </label>
          </div>
        </div>
      </div>
      </div>
      <!-- /col -->
      <aside class="col-xl-4 col-lg-4" id="sidebar">
        <div class="box_general_3 booking">
            <div class="title">
              <h3>Comfirm Payments</h3>
            </div>
            <div class="summary">
              <ul>
                <li>Date: <strong class="float-right">11/12/2017</strong></li>
                <li>Time: <strong class="float-right">10.30 am</strong></li>
                <li>Dr. Name: <strong class="float-right">Dr. julia Jhones</strong></li>
              </ul>
            </div>
            <ul class="treatments checkout clearfix">
              <li>
                Back Pain visit <strong class="float-right">$55</strong>
              </li>
              <li>
                Cardiovascular screen <strong class="float-right">$55</strong>
              </li>
              <li class="total">
                Total <strong class="float-right">$110</strong>
              </li>
            </ul>
            <hr>
            <input type="submit" class="btn_1 full-width" value="Confirm and pay">

          </form>
        </div>
        <!-- /box_general -->
      </aside>
      <!-- /asdide -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</main>
