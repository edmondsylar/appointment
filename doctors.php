<?php include_once "includes/head.php"; ?>

<body class="fixed-nav sticky-footer" id="page-top">

<?php include_once "includes/nav.php" ?>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Doctor</li>
      </ol>

  <form class="" action="main/back/doctors.php" method="post">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Doctor's info</h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Full Name</label>
						<input type="text" name="names" class="form-control" placeholder"">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>email</label>
						<input type="email" name="email" class="form-control">
					</div>
				</div>
			</div>
			<!-- /row-->
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>phone</label>
						<input type="text" name="phone" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Specialty</label>
						<input type="text" name="Specialty" class="form-control">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>District</label>
						<input type="text" name="district" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Address</label>
						<input type="address" name="address" class="form-control">
					</div>
				</div>
			</div>

		</div>
    <input type="submit" value="save" class="btn_1 medium">
  </form>
		<!-- /box_general-->

		<!-- /box_general-->
		<!-- <p><a href="#0" class="btn_1 medium">Save</a></p> -->
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © FinDoctor 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	<!-- Custom scripts for this page-->
	<script src="vendor/dropzone.min.js"></script>

</body>
</html>
