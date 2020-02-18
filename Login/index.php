<?php include_once "head.php"; ?>
	<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="login-2">
					<h1>Please login to Dokta!</h1>
					<form action="login.php" method="POST">
						<div class="box_form clearfix">
							<div class="box_login last">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="Your email address">
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Your password">
									<a href="#0" class="forgot"><small>Forgot password?</small></a>
								</div>
								<div class="form-group">
									<input class="btn_1" type="submit" value="Login">
								</div>
							</div>
							<div class="box_login">
								<a href="" class="social_bt facebook">Login with Facebook</a>
								<a href="" class="social_bt google">Login with Google</a>
							</div>
						</div>
					</form>
					<p class="text-center link_bright">Do not have an account yet? <a href="#0"><strong>Register now!</strong></a></p>
				</div>
				<!-- /login -->
			</div>
		</div>
	</main>
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
</body>
</html>
