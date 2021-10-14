<?php 
$errormail='<p class="erreur">L&apos;email n&apos;est pas valide</p>'; 
$errorchamp='<p class="erreur">Vous devez remplir tout les champs</p>';
$succesCo='<p class="succes" >Connexion en cours</p>';
$errormdp='<p class="erreur">Mot de passe incorrect</p>';

session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
</head>
<body class="login">
			<form class="box" method="post">
				<img class="loginlogo" src="image/logo.png"><br>
				<input type="email" name="email" id="email" placeholder="Email" ><br>
				<input type="password" name="password" id="password" placeholder="Password" ><br>
				<div class="svg-wrapper">
			      	<svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
        				<rect id="shape" height="40" width="150" />
        				<div id="text">
							<input class="spot" type="submit" id="formlogin" name="formlogin" value="Login"><br>
		    			</div>
      				</svg>
    			</div>
			</form>
	<?php
	include 'include/database.php';
	global $db;
	if(isset($_POST['formlogin'])){
		extract($_POST);
		if(!empty($email) && !empty($password))
		{
			$q = $db ->prepare("SELECT * FROM user WHERE user_email = ?");
			$q->bindParam(1,$email);
			$q -> execute();
			$result=$q->fetch();

			if($result == true)
			{
				$hasshpass = $result['user_password'];
				if(password_verify($password, $hasshpass)){
					echo $succesCo;
					$_SESSION['id']=$result['user_id'];					
					$_SESSION['nom']=$result['user_nom'];
					$_SESSION['prenom']=$result['user_prenom'];
					$_SESSION['email']=$result['user_email'];
					$_SESSION['tel']=$result['user_tel'];
					$_SESSION['poste']=$result['user_poste']
			?>		<script type="text/javascript">
						self.setTimeout("self.location.href = 'include/pages/accueil.inc.php';", 1500) ;
					</script>
				<?php var_dump($_SESSION);
  			
				}
				else{
					echo $errormdp;
				}
			}
			else{
					//lemail n'existe pas dans la bdd
					echo $errormail;
				}


		}

		else{
		echo $errorchamp;
		}
	}

?>

</body>
</html>