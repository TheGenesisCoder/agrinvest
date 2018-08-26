<?php
include "class.user.php";

$user = new User();

?>
<?php
	if(isset($_POST['save'])){
		echo "naa";
		echo $_POST['need'];
		echo $quantity= $_POST['quantity'];
		echo $product= $_POST['product'];
		echo $address = $_POST['address'];
		echo $size = $_POST['size'];
		
		//$output = $user->insert_data($need, $quantity, $product, $address, $size);
		}



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Invest for Mindanao">
    <title>Home - agrinvest</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/Features-Clean.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container-fluid"><a class="navbar-brand logo" href="#" style="width:20%;height:50px;">	<img class="img-responsive" src="assets/img/agrinvest logo copy.png" alt="logo" width="250" height="55" ></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="width:700px;">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#"> View my Request</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#"> Request</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="login.php">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <main class="page landing-page"></main>
    <footer class="page-footer dark"></footer>
    <div class="features-clean">
        <div class="container">
			<form action="farmerHome.php" method="POST">
            <div class="intro">
                <h2 class="text-nowrap text-center">Farmers Proposal</h2>
            </div>
			   <div class="form-group">
					<label for="need">Need</label>
					<input class="form-control " type="text" id="need" name="need" required>
			   </div>
                <div class="form-group">
					<label for="quantity">Quantity</label>
					<input class="form-control "  name="quantity" type="number" id= "quantity" required>
				</div>
				<div class="form-group">
					<label for="product">Product</label>
					<input class="form-control "  name="product" type="text" id= "product" required>
				</div>
				<div class="form-group">
					<label for="product">Address of farm</label>
					<input class="form-control "  name="address" type="text" id= "address" required>
				</div>
				<div class="form-group">
					<label for="product">Size of Farm</label>
					<input class="form-control "  name="size" type="number" id= "size" required>
				</div>
				<button class="btn btn-primary" name="save" style="float: right">Save</button>
		</form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>