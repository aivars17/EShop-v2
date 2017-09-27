<!DOCTYPE html>
<html>
<head>
	<title>EShop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
	<style>
		body {
			background-color: lightgrey;
		}
		.bom {
			background-color: white;
			border-radius: 50px 0px 0px 0px;
			margin: 0px 20px 20px 20px;
			box-shadow: 3px 3px grey;
		}
		.leftAcc {
			background-color: black;
			border-radius: 50px 0px 0px 0px;
			height: 60px;
			color: white;
			margin-left: -15px;
			padding: 20px;
			margin-right: -15px;
		}
		.logo {
			height: 200px;
			color: rgb(90, 92, 94);
			font-weight: bold;
		}
		.cart {
			background-color: white;
			width: 260px;
			box-shadow: 3px 3px grey;
			border-radius: 7px;
			margin: 0px 15px 15px 0px;
			float: left;
		}
		.cartname {
			background-color: black;
			color: white;
			margin: 0px -30px 0px -30px;
			padding: 5px;
			border-radius: 7px;
		}
		.cartimg {
			margin: 5px 0px 0px -30px;
		}
		.cartprice {
			padding: 10px;
			
		}
		.de {
			font-size: 25px;
			font-family: 'Indie Flower', cursive;
			border-bottom: 1px solid black;
			padding-top: 10px;
			padding-bottom: -5px;
			overflow: hidden;
			height: 80px;
		}
	</style>
</head>
<body>
	<div class="container-flout">
		<div class="row">
			<div class="col-8 logo"><img height="200px;" src="images/logo.JPG"></div>
			<div class="col-4">
				<div class="row">
					<div class="col-3"><a href="#">My account</a></div>
					<div class="col-5"><a href="#">Shopping bag # items</a></div>
					<div class="col-3"><a href="#">Checkout</a></div>
				</div>
				<div class="row">
					<div class="col">Tel: +37064719298</div>
					<div class="col">Email: sevskis17@gmail.com</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col"><a href="#">Home</a></div>
			<div class="col"><a href="#">About us</a></div>
			<div class="col"><a href="#">Contact us</a></div>
		</div>
		<div class="row">
			<div class="col-4">
				<form method="POST">
				 <div class="form-group row">
				    <label for="search" class="col-2 col-form-label">Search:</label>
				    <div class="col-4">
				      <input type="text" class="form-control" id="search">
				    </div>
				  </div>
				</form>    
		</div>
		<div class="col-4"></div>
		<div class="col"><a href="#">Acount/Log in</a></div>
		<div class="col"><a href="#">Shopping basket</a></div>
		<div class="col"><a href="#">Check out</a></div>
	</div>
	<div class="row">
		<div class="col-2">
			<div class="row">
				<div class="col bom"><h6 class="leftAcc">Categories:</h6>
					<div class="col"><a href="#">Phone</a></div>
					<div class="col"><a href="#">Laptop</a></div>
					<div class="col"><a href="#">Tablet</a></div>
				</div>
			</div>
			<div class="row">
				<div class="col bom"><h5 class="leftAcc">Account</h5>
					<form>
					  <div class="form-group">
					    <label class="form-control-label" for="name">Name</label>
					    <input type="text" class="form-control" id="formGroupExampleInput" >
					  </div>
					  <div class="form-group">
					    <label class="form-control-label" for="password">Password</label>
					    <input type="password" class="form-control" id="password" >
					  </div>
					  <button style="margin: 10px;" name='submit' type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
		<div class="col-7"><?php echo $dbtable?></div>
		<div class="col-2"></div>
	</div>
</body>
</html>