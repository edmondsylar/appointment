<?php include_once "includes/head.php" ?>
<div class="comps">
	<?php
		if(isset($_GET['credits'])){
			echo $_GET['credits'];

		}
	 ?>
</div>
<?php
	include_once "back/config.php";
	$cur = new Config();

	$districts = $cur->get_districts();
	if(isset($_GET['d'])){
		$dist = $_GET['d'];
		$Specialty = $cur->get_specs($dist);
		// echo gettype($Specialty);
	}
 ?>

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
					<div class="step" id="mydiv">
						<form action="back/book.php" method="POST">
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
									<label for="service">Appointment Date</label>
									<input type="date" id="date" name="date" class="form-control">

								</div>
							</div>
							<div class="col-md-12 col-sm-6">
								<div class="form-group">
									<label for="notes">Notes</label>
									<textarea name="description" class="form-control" placeholder="Enter notes about your bookings" rows="8" cols="90"></textarea>
								</div>
							</div>
						</div>
						<!-- space for stored data -->
					</div>
					<hr>
					<input type="submit" class="btn_1 full-width" value="Confirm Details">
				</div>
				</form>
				</div>

				<!-- /col -->
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>

	<script type="text/javascript">
		function district(){
			var selected = document.getElementById('dist').value;

			alert(selected);
		}
	</script>
</body>
</html>
