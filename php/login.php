<?php
	include("class.user.php");
	
	$user =  new User();
	
	if (isset($_REQUEST['login'])){
		extract ($_REQUEST);
		
		$email =  $_POST['email'];
		$pass =  $_POST['password'];
		
		$result =  $user->connect_user($email, $pass);
		echo $position = $user->position_checker($email, $pass);
		
		if($position["status"] === "investor"){
			header("Location: investorHome.html ");
		}
		elseif($position["status"] === "farmer"){
			header("Location: farmerHome.php");
		}
		else{
			header("login.php");
		}
		
		
	}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Invest for Mindanao">
    <title>Login - agrinvest</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container-fluid">
			<a class="navbar-brand logo" href="#" style="width:20%;height:50px;">
				<img class="img-responsive" src="assets/img/agrinvest logo copy.png" alt="logo" width="250" height="55">
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="navbar-toggler-icon"></span>
			</button>
				<div
					class="collapse navbar-collapse" id="navcol-1" style="width:700px;">
					<ul class="nav navbar-nav ml-auto">
						<li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Home</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link" href="contact-us.html">Contact Us</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Login</a></li>
						<li class="nav-item" role="presentation"><a class="nav-link active" href="#">Sign Up</a></li>
					</ul>
			</div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Log In</h2>
                    <p>If you already have an account.</p>
                </div>
                <form action="login.php" method="post" >
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="text" id="email" name="email" required></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control item"  name="password" type="password" id= "password" required></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div>
					<button class="btn btn-primary btn-block" type="submit" name="login">Log In</button>
				</form>
            </div>
        </section>
    </main>
    <footer class="page-footer dark"></footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>