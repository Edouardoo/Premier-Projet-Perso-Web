<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Paramètre | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,600&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,700;1,800&display=swap" rel="stylesheet">  
</head>
<body>
	<div class="divretour">
		<a class="lienretour" href="accueil.inc.php"><p class="pretour">&larr;Retour</p></a>
	</div>
	<div class="divboxparam">
		<div class="titleprofil">
			<h3 class="titreprofil">Profil</h3>
		</div>
		<div class="conteneurProfil">
		
			<h5 class="profilnom">Nom</h5>
			<p class="sessionprofil">	<?= $_SESSION['nom']?></p>
			<h5 class="profilnom">Prénom</h5>
			<p class="sessionprofil"> <?= $_SESSION['prenom']?></p>
			<h5 class="profilnom">Email</h5>
			<p class="sessionprofil"> <?= $_SESSION['email']?></p>
			<h5 class="profilnom">Telephone</h5>
			<p class="sessionprofil"> <?= $_SESSION['tel']?></p>
		</div>
		<div class="conteneurProfil2">
			<h5 class="profilnom">Badge</h5>
			<p class="sessionprofilId"> <?= $_SESSION['id']?></p>			
			<h5 class="profilnom">Poste</h5>
			<p class="sessionprofil"> <?= $_SESSION['poste']?></p>

			<!--Badge = id !-->


		</div>


	</div>

</body>
</html>