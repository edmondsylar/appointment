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
    									<select class="form-control loc" id="location"name="location">
                        <option value="" selected=true>Select Location</option>
                        <?php if (!empty($d)): ?>
                          <?php foreach ($d as $key => $value): ?>
                            <option value="<?php echo $value['name'] ?>"> <?php echo $value['name']?> </option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function next_service(id){
                          var loca = document.getElementById("location").value;
                          window.location.href="district.php?id="+id+'&location='+loca;
                          
                        }
                       
                      </script>
    								</div>

                    <hr>
                    <span class="btn_1 full-width" onclick="next_service('<?php echo $id; ?>')"> next</button>
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
    									<select class="form-control" id="service">
                        <option value="" selected=true>Select Service</option>
                        <?php if (!empty($d)): ?>
                          <?php foreach ($d as $key => $value): ?>
                            <option value="<?php echo $value['specialty'] ?>">
                              <?php echo $value['specialty'] ?>
                            </option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function next_provider(id){
                          var serv = document.getElementById("service").value;
                          window.location.href="district.php?id="+id+'&loc=<?php echo $_GET['location']?>&spec='+serv;
                          
                        }
                       
                      </script>
    								</div>
                    <hr>
                    <span class="btn_1 full-width" onclick="next_provider('<?php echo $id; ?>')"> next</button>
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
    									<select class="form-control" id="doc">
                        <option value="" selected=true>Select Doctor</option>
                        <?php if (!empty($Doc)): ?>
                          <?php foreach ($Doc as $key => $value): ?>
                            <option value="<?php echo $value['fullname'] ?>">
                              <?php echo $value['fullname'] ?>
                            </option>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      </select>

                      <script type="text/javascript">
                        function finale(id, loc, spec){
                          var doc = document.getElementById("doc").value;
                          window.location.href="back/complete_book.php?id="+id+'&loc='+loc+'&spec='+spec+'&doc='+doc;

                          // alert (id +' '+loc+' '+spec+' '+doc)
                        }
                      </script>
    								</div>
                    <hr>
                    <span class="btn_1 full-width" onclick="finale('<?php echo $id; ?>','<?php echo $_GET['loc']; ?>','<?php echo $_GET['spec'] ?>')"> Complete</button>
    							</div>
    						</div>
              <?php endif; ?>



					</div>
				</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>

	<script type="text/javascript">
		function district(){
			var selected = document.getElementById('dist').value;
		}
	</script>
</body>
</html>
