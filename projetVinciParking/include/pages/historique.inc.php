<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HISTORIQUE | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css">
	<script src="https://kit.fontawesome.com/12e091ce24.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
</head>
<body>
	<?php 
	include_once '../patern_header.php';
	include_once '../database.php';
	

	$allhistory=$db->query('SELECT * FROM historique');
	$allclients = $db->query('SELECT * FROM client');
	$allcars = $db->query('SELECT * FROM voiture');
	?>
	<div id="conteneurhistorique">

<?php 	while($history= $allhistory->fetch()) { 
			foreach ($allclients as $client) {
				if($client['id_cli']==$history['id_cli']){
				?>	<div id="elementhistorique">
						<p><?=$client['nom_cli'] . " " . $client['prenom_cli']; ?></p>  	
						<p><?=$history['date_hist']; ?></p> <?php
				}
			}
			foreach ($allcars as $car){
				if($car['id_voit']==$history['id_voit']) {
			?>		<p><?=$car['immatriculation_voit'];?></p> 
						</div><?php
						}
					}	
			 
		}?>
	</div>


</body>
</html>