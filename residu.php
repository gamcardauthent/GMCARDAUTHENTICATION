try {
    $access=new PDO("mysql:host=localhost;dbname=cachelog;charset=utf8","root","");

    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} 
catch(Exception $e){
    $e->getMessage;
}



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