<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Accueil | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
	<script src="https://kit.fontawesome.com/12e091ce24.js" crossorigin="anonymous"></script>
</head>
<body>
	<div>
	<?php 
		 include '../patern_header.php';
	?>
	</div>
	<div class="div_stream">
		<section class="streaming">
			<h3>streaming caméra Parking Portail</h3>
			<img name="Parking_Portail" src="https://172.20.17.76:8081/?action=stream" width="600" height="450" alt="Live Feed" title="Parking Portail" />
		</section>
	</div>
	<div>
		<h4>Ouverture Manuelle du portail</h4>
		<button>OUVRIR</button>
	</div>


</body>
</html>