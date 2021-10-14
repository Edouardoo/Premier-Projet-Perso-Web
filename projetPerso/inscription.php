<?php session_start(); 


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Identifie Toi !</title>
		<link rel="stylesheet" href="style.css" />

	</head>

	<body>	
		<div>
			<a href="login.php" class="btn btn-white btn-animate">If your account already exist <strong>click here</strong></a>
		</div>
		<div>
			<a class="icon-pepe-sign" href="accueil.php"><img src="image/pepe.png" alt="Icon Pepe"></a>
		</div>
		<div class="formulaire">


			<form method="post">
				<h3>Sign in </h3>

					<div class="formGroupe">

						<input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required maxlength="32">

					</div>
					<div class="formGroupe">
						<input type="password" name="password" id="password" placeholder="Password" required>
					</div>

					<div class="formGroupe">
						<input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
					</div>

						<input class="btn btng" type="submit" name="formsend" id="formsend" value="Register">

			</form>	
		</div>



	




		

			
			<?php


				if(isset($_POST['formsend'])){
				
				
					extract($_POST);

					if(!empty($password) && !empty($cpassword) && !empty($pseudo)){
					
						if($password == $cpassword){



							$options = [
    							'cost' => 12,
							];
							
							$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

							include 'include/database.php';
							global $db;

							$c = $db->prepare("SELECT pseudo FROM users WHERE pseudo = :pseudo");
							$c->execute(['pseudo' => $pseudo]);

							$result = $c->rowCount();
							if($result == 0){
								$q = $db->prepare("INSERT INTO users(pseudo,password) VALUES(:pseudo,:password)");
								$q->execute([
									'pseudo' => $pseudo,
									'password' => $hashpass
								]);

										echo "
										<div class='block-succes'>
											<div>
												<p class='succes' id='valide'>&#10004;</p>
											</div>
											<div>
												<p class='succes' id='text'>Le compte à été créée avec succes !</p>
											</div>
										</div>";
							}else{
								
								echo "
								<div class='block-erreur'>
									<div>
										<p class='erreur' id='warning'>&#9888;</p>
									</div>
									<div>
										<p class='erreur' id='text'><strong>Erreur</strong>, Le pseudo est déja utilisé.</p>
									</div>
								</div>";
								

										
							}	



					 }else{
						 	echo 
						 	"<div class='block-erreur'>
						 		<div>	
						 			<p class='erreur' id='warning'>&#9888;</p>
						 		</div>
						 		<div>
						 			<p class='erreur' id='text'><strong>Erreur</strong>, Votre Mot De Passe n'est pas identique.</p>
						 		</div>
						 	</div>";
					 	}

							

					}
				}
				
	
			?>

	




				
	


	</body>
</html>
