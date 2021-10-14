<?php 
session_start();
include '../database.php';
include '../../classes/Client.class.php';
include '../../classes/ClientManager.class.php';
$allclients = $db->query('SELECT * FROM client');
if(empty($_GET['id'])){
	if(isset($_GET['s']) AND !empty($_GET['s'])){
		$recherche = htmlspecialchars($_GET['s']);
		$allclients = $db->query('SELECT id_cli,nom_cli,prenom_cli FROM client WHERE nom_cli LIKE "%'.$recherche.'%" OR prenom_cli LIKE "%'.$recherche.'%"');
	}

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title> Client | Vinci Parking</title>
		<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css" />
		<script src="https://kit.fontawesome.com/12e091ce24.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
	</head>
	<body class="bodypage">
		<?php include '../patern_header.php'?>

		<!-- Search Bar !-->
		<form method="GET" form-id>
			<div class="search-box">
				<input class="search-txt" type="text" name="s" placeholder="Taper pour chercher">
				<a class="search-btn" onclick="document.getElementById('form-id').submit();" href="#">
					<i class="fas fa-search" id="fa-search"></i>
					<a/>
				</div>
			</form>
			<?php

			if($allclients->rowCount() > 0){ ?>
				<div id="conteneurclient">
					<?php	while($client= $allclients->fetch()){ ?>

				<a href="client.inc.php?id=<?php print_r($client['id_cli'])?>"> 
					  <div id="elementclient">
						<p id="pidclient"><?= $client['id_cli']?></p>
						<p id="pclient"><?=  $client['nom_cli'].  " " . $client['prenom_cli']; ?></p>
					</div>
				</a>
					<?php
				}  
				
			}else{
				?>
				<p class="noclient">Aucun Client</p>
				<?php
			}
		}
		else if(!empty($_GET['id'])){
			include '../patern_header.php';
		?>
		<title> Client | Vinci Parking</title>
		<link rel="stylesheet" type="text/css" href="../../css/stylesheet.css" />
		<script src="https://kit.fontawesome.com/12e091ce24.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
<?php
			$cliId = $_GET['id'];
			$SelectedClient=$db->prepare("SELECT * FROM client WHERE id_cli = :CliId");
			$SelectedClient->bindValue(':CliId',$cliId);
			$SelectedClient->execute();
			$result = $SelectedClient->fetch(PDO::FETCH_ASSOC);



			?>
			<div class="divretour">
		<a class="lienretour" href="client.inc.php"><p class="pretour">&larr;Retour</p></a>
	</div>	
		  <table class="tableau">
        <tr>  
			<th>Nom</th>
			<th>Prénom</th>
            <th> Tel </th>
            <th>Mail</th>
            <th>Type D'abonnement</th>
            <th>Adresse</th>


		</tr>
        <tr>
            <td> <?php echo $result['nom_cli'] ;?>  </td>
            <td> <?php echo $result['prenom_cli']; ?> </td>
            <td> <?php echo $result['tel_cli']; ?></td>
            <td> <?php echo $result['mail_cli']; ?></td>
   	        <td> <?php echo $result['abo_cli']; ?></td>
            <td> <?php echo $result['adresse_cli']; ?></td>
		</tr>
	</table>
			
<?php
		}


?>


	</body>
	</html>