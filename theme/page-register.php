
<!-- Database connection -->
<?php 
	include_once 'database/connection.php';

	$error = '';
	$length = '';
	$pwd = '';

	if(isset($_POST['submit'])){
		$name = mysqli_escape_string($conn, $_POST['name']);
		$email = mysqli_escape_string($conn, $_POST['email']);
		$password = mysqli_escape_string($conn, $_POST['password']);
		$password2 = mysqli_escape_string($conn, $_POST['password2']);
		$mobile = mysqli_escape_string($conn, $_POST['mobile']);
		$university = mysqli_escape_string($conn, $_POST['university']);

		if(empty($name) || empty($email) || empty($password) || empty($password2) || empty($mobile) || empty($university)){
			$error = "This field is required";
		}
		elseif(strlen($name)<5){
			$length = "Lenght must be 5";
		}
		elseif($password!=$password2){
			$pwd = "Password dose not match";
		}

	}



?>






<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- css link laouts -->
<?php include 'layout/css/css.php'; ?>
<!-- css link ends -->

<body class="middle-content page-register">
	<div class="container-fluid">
		<div class="content-box-bordered register-box">
			<h1>Create an account</h1>
			<form class="form-horizontal" role="form" action="?" method="post">
				<div class="form-group">
					<label for="username" class="control-label sr-only">Username</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-person"></i></span>
							<input type="text" class="form-control" id="username" name="name" placeholder="Enter Name">
							<span class="text-danger text-end" ><?=$error;?><?=$length?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="control-label sr-only">Email</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-email"></i></span>
							<input type="email" name="email" class="form-control" id="email" placeholder="Email">
							<span class="text-danger text-end"><?=$error;?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="password" class="control-label sr-only">Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-locked"></i></span>
							<input type="password" name="password" class="form-control" id="password" placeholder="Password">
							<div class="input-group-append">
                <span class="input-group-text" onclick="password_show_hide();">
                  <i class="icon ion-eye" id="show_eye"></i>
                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                </span>
              </div>
							<span class="text-danger text-end"><?=$error;?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="password2" class="control-label sr-only">Repeat Password</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-locked"></i></span>
							<input type="password" name="password2" class="form-control" id="password2" placeholder="Repeat Password">
							<span class="text-danger text-end"><?=$error;?><?=$pwd;?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="mobile" class="control-label sr-only">Phone no</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-person-add"></i></span>
							<input type="mobile" name="mobile" class="form-control" id="mobile" placeholder="Mobil">
							<span class="text-danger text-end"><?=$error;?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="uni" class="control-label sr-only">University</label>
					<div class="col-sm-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="icon ion-home"></i></span>
							<input type="text" name="university" class="form-control" id="uni" placeholder="University Name">
							<span class="text-danger text-center"><?=$error;?></span>
						</div>
					</div>
				</div>
				<div class="form-group">
					
					<div class="col-sm-12">
						<label class="fancy-checkbox">
							<input type="checkbox">
							<span>I accept the <a href="#" data-toggle="modal" data-target="#termsModal">Terms &amp; Agreement</a></span>

						</label>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-12">
						<button type="submit" name="submit" class="btn btn-success btn-block"><i class="icon ion-checkmark-circled"></i> Create Account</button>
					</div>
				</div>
			</form>
			<p><em>Already have an account?</em> <a href="#"><strong>Login</strong></a></p>
		</div>
	</div>
	<!-- Javascript -->
	<script>function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
</script>
	<script src="assets/js/jquery/jquery-2.1.0.min.js"></script>
	<script src="assets/js/bootstrap/bootstrap.js"></script>
	<script src="assets/js/queen-form-layouts.js"></script>
</body>

</html>
