<!doctype html>
<html lang="en">
  <head>
  	<title>FTI - Travel Umroh dan Haji Plus</title>

  	<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>logo.png">    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>logi/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(<?php echo base_url(); ?>logi/images/bac.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">LOGIN</h3>
		      	<div class="col-md-12" style="text-align: center; color: #000000; font: bold;">
		                <?php echo $this->session->flashdata('msg'); ?>
		         </div>
		      	<form action="<?php echo base_url().'login/auth'?>" method="post" class="signin-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
						<a href="https://umhro.000webhostapp.com/" style="color: #fff">Halaman Promosi</a>
					</div>
					<div class="w-50 text-md-right">
						<a href="<?php echo base_url('login/email_password_validation'); ?>" style="color: #fff">Forgot Password</a>
					</div>
	            </div>
	            
	          </form>
	</section>

	<script src="logi/js/jquery.min.js"></script>
	<script src="logi/js/popper.js"></script>
	<script src="logi/js/bootstrap.min.js"></script>
	<script src="logi/js/main.js"></script>

	</body>
</html>

