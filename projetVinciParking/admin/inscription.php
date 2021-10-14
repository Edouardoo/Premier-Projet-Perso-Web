<html>
<head>
	<meta charset="utf-8">
	<title>LOGIN | Vinci Parking</title>
	<link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
</head>
<body class="register">
	<form class="box" method="post">
		<img class="registerlogo" src="../image/logo.png"><br>
		<input type="text" name="nom" id="nom" placeholder="Nom" required><br>
		<input type="text" name="prenom" id="prenom" placeholder="Prenom" required><br>
		<input type="email" name="email" id="email" placeholder="Email" required><br>
		<input type="password" name="password" id="password" placeholder="Mot De Passe" required><br>
		<input type="password" name="cpassword" id="cpassword" placeholder="Confirmé" required><br>
		<input type="tel" name="tel" id="tel" placeholder="Telephone" required>
		<select name="poste" id="poste" required>
					<option value="">--Selctionner votre poste--</option>
					<option value="security">Sécurité</option>
					<option value="dev">Développeur</option>
					<option value="Technicien">Technicien</option>
		</select> 
				

				<div class="svg-wrapper">
					<svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
						<rect id="shape" height="40" width="150" />
						<div id="text">
							<input class="spot" type="submit" id="formlogin" name="formlogin" value="Register"><br>
						</div>
					</svg>
				</div>    
			</form>
			<?php



			if(isset($_POST['formlogin'])){
				extract($_POST);
				if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($cpassword) && !empty($tel) && !empty($poste))
				{
					if ($password == $cpassword){

						$options = [
							'cost' => 12,
						];

						$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
						echo $hashpass ;

						include '../include/database.php';
						global $db; 
						$q = $db->prepare("INSERT INTO user(user_nom,user_prenom,user_email,user_password,user_tel,user_poste) VALUES(?,?,?,?,?,?)");
							$q->bindParam(1,$nom);
							$q->bindParam(2,$prenom);
							$q->bindParam(3,$email);
							$q->bindParam(4,$hashpass);
							$q->bindParam(5,$tel);
							$q->bindParam(6,$poste);
							$q->execute();




					} 
					else{
						echo'password dif';
					}

				} 
				else{
					echo 'champ vide';
				}	
			}

			?>

		</body>
		</html>