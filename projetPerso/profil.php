<?php session_start() ;?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profil</title>
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>
	<?php include 'include/database.php';
	global $db;
	?>


	<?php 

	if(isset($_SESSION['pseudo']))
	{

	?>
		<h2>Bienvenue sur Votre Profil</h2>
		<div>
			<p>Votre pseudo = <?=$_SESSION['pseudo']; ?> </p>
		</div>
		<div>
			<h2> Vos Information </h2>
			<form>
				<div>
					<label>Prénom</label>
					<input type="text" class="forminfo" name="prenom" id="prenom" placeholder="Edouard">
				</div>
				<div>
					<label>Nom</label>
					<input type="text" name="nom" class="forminfo" id="nom" placeholder="Macron">
				</div>
				<div>
					<LABEL>Age</LABEL>
					<input type="number" name="age" class="forminfo" id="age" placeholder="12">
				</div>
				<div>
					<label>date de naissance</label>
					<input type="date" name="naissance">
				</div>
				<div>
					<label> A quel point aimez vous mon site ?</label>
					<input type="range" name="vote" id="rangevote">
				</div>
				<div>
					<input type="submit" name="forminfo" id="forminfo" value="Enregistrer">
				</div>
			</form>

		</div>

		<div>
			<p>Votre photo de profil:</p>
			<div>
				<img src="image/pepeyoung.jpeg" alt='profil-picture'/>
			</div>

		<div>
			<h5 class='logout'><a href='logout.php'>cliquez ici pour vous deconnecter</a></h5>
		</div>



		</div>




	<?php
	}else{
		echo 
		"<h2>Vous n'êtes pas connecté.</h2>
		<a href='login.php'><p><strong>cliquez ici pour vous connecté</strong></p></a>";
	}




?>



	</body>

</html>





