<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connecte toi !</title>
		<link rel="stylesheet" href="style.css" />

	</head>

	<body>
			<div>
				<a href="inscription.php" class="btn btn-white btn-animate">If you don't have a account yet<strong>click here</strong></a>
			</div>
			<div>
				<a class="icon-pepe-sign" href="accueil.php"><img src="image/pepe.png" alt="Icon Pepe"></a>
			</div>
			<div class="formulaire">
				<form method="post">
				<h3>Login</h3>   
					<div class="formGroupe">
						<input type="text" name="lpseudo" id="lpseudo" placeholder="Pseudo" required><br>
					</div>
					<div class="formGroupe">
						<input type="password" name="lpassword" id="lpassword" placeholder="Password" required><br>
					</div>

						<input class="btn btng" type="submit" name="formlogin" id="formlogin" value="LOGIN">

				</form>
			</div>
	




		<?php

		include 'include/database.php';

			if(isset($_POST['formlogin']))
			{
				extract($_POST);

				if(!empty($lpseudo) && !empty($lpassword))
				{
					$q =$db->prepare("SELECT * FROM users WHERE pseudo = :pseudo");
					$q->execute(['pseudo' => $lpseudo]);
					$result = $q->fetch();

					if ($result == true)
					{
						$hashpassword = $result['password'];
						if(password_verify($lpassword, $hashpassword))
						{			
							echo "
								<div class='block-succes'>
									<div>
										<p class='succes' id='valide'>&#10004;</p>
									</div>
									<div>
										<p class='succes' id='text'>Vous êtes connecté ! Content de vous revoir ".$lpseudo. "</p>

									</div>
								</div>";

							$_SESSION['pseudo']= $result['pseudo'];
							header('Location:profil.php');
							exit();

						}
						else
						{


					 	
							echo "
							<div class='block-erreur'>
						 		<div>	
						 			<p class='erreur' id='warning'>&#9888;</p>
						 		</div>
						 		<div>
									<p class='erreur' id='text'>Mot de passe Incorrect</p>
								</div>
							</div>";
						}
						

					}
					else
					{
						echo "
						<div class='block-erreur'>
						 	<div>	
						 		<p class='erreur' id='warning'>&#9888;</p>
						 	</div>
						 	<div>
								<p class='erreur' id='text'>Il n'existe aucun compte sous ce pseudo :" . $lpseudo . "</p>
							</div>
						</div>";
					}

				}
			}


	?>
	</body>
</html>
