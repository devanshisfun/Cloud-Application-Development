
<?php
session_start();
include('config.php');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];

	$sql = "INSERT INTO admin (name,password)
    VALUES ('$name','$password')";

    $run = mysqli_query($con,$sql);

	if($run)
	{
		echo ("<script LANGUAGE='JavaScript'>
         window.location.href='login1.php';
         </script>");
	}
else 
	{
		echo "Error: record not Added " ;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Admin Panel ! Login</title>
		<meta name="description" content="vy software is a Dashboard & Admin Site Responsive Template by vy software." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, vy software Admin, vy software, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="vy software"/>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- vector map CSS -->
		<link href="vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		
		
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	<style>
	.page-wrapper.auth-page {
    background: aliceblue;
}
	</style>
	
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		
		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="index.php">
						<img class="brand-img mr-10" src="dist/img/logo.png" alt="brand"/>
						<span class="brand-text">Control Center</span>
					</a>
				</div>
				
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Normal Register</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your details below</h6>
										</div>	
										<div class="form-wrap">
											<form method="POST">
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
													<input type="email" class="form-control" name="name" required="" id="exampleInputEmail_2" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" name="password" required="" id="exampleInputpwd_2" placeholder="Enter Password">
												</div>
												
												<!-- <div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" name="remember" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div> -->
												<div class="form-group text-center">
													<button type="submit" name="submit" class="btn btn-info btn-success btn-rounded">Submit</button>
												</div>
												
												<div class="form-group text-center">
													<a href='login1.php' class="btn btn-info btn-success btn-rounded">Normal Login</a>
												</div>
												<div class="form-group text-center">
													<a href='register.php' class="btn btn-info btn-success btn-rounded">Secure Register</a>
												</div>
												<div class="form-group text-center">
													<a href='login.php' class="btn btn-info btn-success btn-rounded">Secure Login</a>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->	
				</div>
				
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>
