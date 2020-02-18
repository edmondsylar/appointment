<?php include_once "includes/head.php" ?>
<?php include_once "back/config.php"; ?>
<?php
  $id = $_GET['id'];
  $cur = new Config();

  if(isset($_GET['']))
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

					<div class="form_title">
						<h3><strong>1</strong>Select Location</h3>
						<p>
							Select your Location to help us match you to a the nearest doctor.
						</p>
					</div>
          <div class="step" id="mydiv">
						<form action="back/book.php" method="POST">
							<!-- form beginnings -->
              <?php if (isset($_GET['start'])): ?>

                <?php
                  $d = $cur->get_districts();
                 ?>
                <div class="row">
    							<div class="col-md-6 col-sm-6">
    								<div class="form-group">
    									<label>Location</label>
    									<select class="form-control" name="location">
                        <option value="" selected=true>Select Location</option>
                        <?php if (!empty($d)): ?>
                          <?php foreach ($d as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>" onclick="next('<?php echo $id ?>','<?php echo $value['name'] ?>')"><?php echo $value['name'] ?></option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function next(id, ne){
                          var location = window.location;
                          var newloca = location +'&location='+ne
                          // location.replace(newloca)
                          window.location.href="district.php?id="+id+'&location='+ne;
                          // alert(newloca)
                        }
                      </script>
    								</div>
    							</div>
    						</div>
              <?php endif; ?>

              <?php if (isset($_GET['location'])): ?>

                <?php
                  $d = $cur->get_specs($_GET['location']);
                 ?>
                <div class="row">
    							<div class="col-md-6 col-sm-6">
    								<div class="form-group">
    									<label>Service</label>
    									<select class="form-control" name="location">
                        <option value="" selected=true>Select Service</option>
                        <?php if (!empty($d)): ?>
                          <?php foreach ($d as $key => $value): ?>
                            <option value="<?php echo $value['specialty'] ?>"
                              onclick="next_two('<?php echo $_GET['id']; ?>','<?php echo $_GET['location'] ?>','<?php echo $value['specialty'] ?>')">
                              <?php echo $value['specialty'] ?>
                            </option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function next_two(id, loc, spec){
                          window.location.href="district.php?id="+id+'&loc='+loc+'&spec='+spec;
                          alert(id + " " + loc + " " + spec)
                        }
                      </script>
    								</div>
    							</div>
    						</div>
              <?php endif; ?>


              <?php if (isset($_GET['spec'])): ?>

                <?php
                  $Doc = $cur->get_pro($_GET['loc'], $_GET['spec']);
                  // echo $_GET['location'] . " " . $_GET['spec'];
                  // echo gettype($Doc);
                 ?>
                <div class="row">
    							<div class="col-md-6 col-sm-6">
    								<div class="form-group">
    									<label>Doctor</label>
    									<select class="form-control" name="location">
                        <option value="" selected=true>Select Doctor</option>
                        <?php if (!empty($Doc)): ?>
                          <?php foreach ($Doc as $key => $value): ?>
                            <option value="<?php echo $value['fullname'] ?>"
                              onclick="finale('<?php echo $_GET['id']; ?>','<?php echo $_GET['loc'] ?>','<?php echo $_GET['spec'] ?>','<?php echo $value['fullname'] ?>')">
                              <?php echo $value['fullname'] ?>
                            </option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function finale(id, loc, spec, doc){
                          window.location.href="back/complete_book.php?id="+id+'&loc='+loc+'&spec='+spec+'&doc='+doc;
                          // alert(id + " " + loc + " " + spec)
                        }
                      </script>
    								</div>
    							</div>
    						</div>
              <?php endif; ?>



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

	<script type="text/javascript">
		function district(){
			var selected = document.getElementById('dist').value;

			alert(selected);
		}
	</script>
</body>
</html>
