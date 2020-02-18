<?php include_once "includes/head.php" ?>
<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Book Appointment</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="message">
						<p>Admin? &nbsp; <a href="../login.php">Login instead.</a></p>
					</div>
					<div class="form_title">
						<h3><strong>1</strong>Your Details</h3>
						<p>
							Enter Details for your booking
						</p>
					</div>
					<div class="step">
						<form class="" action="back/book.php" method="POST">
							<!-- form beginnings -->
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Full Name</label>
									<input type="text" name="names" class="form-control" id="firstname_booking" placeholder="Jhon">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Email Address</label>
									<input type="text" class="form-control" id="lastname_booking" name="email" placeholder="Doe">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" id="telephone" name="phone" class="form-control" placeholder="jhon@doe.com">
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="service">District</label>
									<select class="form-control" name="district" id="country">
										<option value="">Select your District</option>
										<option value="Europe">Europe</option>
										<option value="United states">United states</option>
										<option value="Asia">Asia</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="service">Service</label>
									<select class="form-control" name="service" id="country">
										<option value="">Select your Service</option>
										<option value="Europe">Europe</option>
										<option value="United states">United states</option>
										<option value="Asia">Asia</option>
									</select>
								</div>
							</div>

							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="service">Prvover</label>
									<select class="form-control" name="provider" id="country">
										<option value="">Select your Provider</option>
										<option value="Europe">Europe</option>
										<option value="United states">United states</option>
										<option value="Asia">Asia</option>
									</select>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<div class="form-group">
									<label for="notes"></label>
									<textarea name="description" class="form-control" placeholder="Enter notes about your bookings" rows="8" cols="90"></textarea>
								</div>
							</div>
						</div>
					</div>
					<hr>
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
						<form>
							<div class="title">
								<h3>Booking Details</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Name: <strong class="float-right">11/12/2017</strong></li>
									<li>Time: <strong class="float-right">10.30 am</strong></li>
									<li>Dr. Name: <strong class="float-right">Dr. julia Jhones</strong></li>
								</ul>
							</div>
							<ul class="treatments checkout clearfix">
								<li>
									Service <strong class="float-right">$55</strong>
								</li>
							</ul>
							<hr>
							<input type="submit" class="btn_1 full-width" value="Confirm Details">
							<!-- <a href="payments.php" class="btn_1 full-width">Confirm Details</a> -->
						</form>
					</div>
					</form>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
</body>
</html>
