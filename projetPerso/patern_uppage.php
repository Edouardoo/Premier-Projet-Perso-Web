		<header>
			<img class="imagepng-icon" src=image/pepe.png alt="Icon" />
			<h1>Welcome To Froggy Meme WEB Page </h1>
		</header>
		<br>

		<nav class=menu-nav>
			<ul>
				
				<li class=menu><a href="Accueil.php">Accueil</a></li>
				<li class=menu><a href="Barbs Meme.php">Barbs Meme</a></li>
				<li class=menu><a href="Local.php">Local Meme XD</a></li>
				<li class=menu><a href="Spicy.php" >Spicy Meme</a></li>
				<li class=menu><a href="Froggy.php">Froggy Meme</a></li>
				<li class=menu><a href="Intro.php"> Intro and Credits</a></li>
				<?php
				if (isset($_SESSION['pseudo'])){

					?><li class=menu_ins><a href='profil.php'>Profil</a></li><?php

				}
				else{
					?><li class=menu_ins><a href='inscription.php'> Connexion ou Inscription</a></li>
					<?php
				}
				?>
			</ul>
			<br>

		</nav>
