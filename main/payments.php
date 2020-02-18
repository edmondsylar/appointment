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
          <input type="submit" class="btn_1 full-width" value="Confirm Payment">
          </form> 
        </div>
      </div>
      
      </div>
      <!-- /col -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</main>
