<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Accueil | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css" />
	<script src="https://kit.fontawesome.com/12e091ce24.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
</head>
<body>
	<?php 
	 include_once '../patern_header.php';

	?>
	<div class="conteneurAccueil">
		<div class="stream">
			<section class="streaming">
				<h3>streaming Caméra Hikvision iDS VinciParking</h3>
				<img name="Galaxy Tab" src="https://172.20.17.76:8081/?action=stream" width="600" height="450" alt="Caméra Live" title="Galaxy Tab" />
			</section>
		</div>
	</div>


	
	<?php 
	include '../patern_footer.php';
	?>




</body>
</html>