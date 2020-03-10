<?php include_once "includes/head.php";
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("Location: login.php");
} ?>
<?php
  include_once "main/back/config.php";
  $cur = new Config();
  $docs = $cur->get_docs();

 ?>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <?php include_once "includes/nav.php" ?>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Doctors</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Doctors </h2>
			</div>
			<div class="list_general">
				<ul>
          <?php if (!empty($docs)): ?>
            <?php foreach ($docs as $key => $value): ?>
              <li>
    						<figure><img src="https://cdn1.iconfinder.com/data/icons/business-users/512/circle-512.png" alt=""></figure>
    						<h4><?php echo $value['fullname'] ?></h4>
      						<ul class="booking_details">
      							<li><b>Address</b>: <?php echo $value['address'] ?></li>
      							<li><b>Service </b>: <?php echo $value['specialty'] ?></li>
      							<li><b>Telephone</b>: <?php echo $value['Phone']; ?></li>
      							<li><b>Email</b>: <?php echo $value['email']; ?></li>
                    <li><b>District</b>: <?php echo $value['district']; ?></li>
      						</ul>


            <?php endforeach; ?>
          <?php else: ?>
            <li>
              <figure><img src="img/avatar1.jpg" alt=""></figure>
              <h4>No Booked Appointments</h4>
            </li>
          <?php endif; ?>
				</ul>
			</div>
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>copyright &copy; docApp 2020</small>
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

</body>
</html>
