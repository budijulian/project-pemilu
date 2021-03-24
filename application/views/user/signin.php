<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login | Pemilu HIMASI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/user/img/logohimasi.png">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/user/css/main.css">
 
  <!-- sweet alert -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/0.4.5/sweetalert2.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/1.3.3/sweetalert2.min.js"></script>
</head>

<body oncontextmenu="return true;" onkeydown="return true;" onmousedown="return true;">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form id="formlogin" method="post" action="<?php echo base_url()?>user/signinData" 
				class="login100-form validate-form">
					<span class="login100-form-title p-b-48">
						<img src="<?php echo base_url()?>assets/user/images/icons/logohimasi.png" width="70px" height="70px">
					</span>
					<span class="login100-form-title p-b-26"> LOGIN PEMILU HIMASI 
					</span>

					<div class="wrap-input100 validate-input" data-validate="Npm">
						<input class="input100" type="text" name="nomor">
						<span class="focus-input100" data-placeholder="NPM Mahasiswa"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="container-login-form-text">
						<!-- notif  -->
						 <?= $this->session->flashdata('notiferror');?>
					</div>
					<div class="container-login100-form-btn" id="btn-login">
						<div class="wrap-login100-form-btn" id="btn-login">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" id="btn-login2" href="javascript:void(0)"  class="login100-form-btn">
								Masuk
							</button>
						</div>
					</div>
					<div class="container-login100-form-footer">
						<div class="wrap-login100-form-footer text-center">
							<a class="login50-form-title text-white p-b-10" href="<?php echo base_url()?>user/daftar" >
							<span class="fa fa-pencil-square"></span> daftar akun</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<!-- js  -->
	<script src="<?php echo base_url()?>assets/user/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url()?>assets/user/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo base_url()?>assets/user/js/main.js"></script>
 <!-- jQuery 3 -->
  <script src="<?php echo base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>


	<div id="dropDownSelect1"></div>

	</body>
</html>