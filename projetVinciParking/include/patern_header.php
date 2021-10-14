	<header>
		<div class="flexdiv">
			<div>
				<img id="logo" src=../../image/logo.png alt="Icon" /> 
			</div>
			<div id="wlcdiv">
				<?php echo "<p class='wlc'>Bienvenue M. ". $_SESSION['nom']."</p>"?>
			</div>
		</div>
	</header>	
	<nav class="menu-nav">
		<ul>
			<li class="menu"><a href="accueil.inc.php">ACCUEIL</a></li>
			<li class="menu"><a href="client.inc.php">CLIENT</a></li>
			<li class="menu"><a href="historique.inc.php">HISTORIQUE</a></li>
			<li class="menu"><a href="portail.inc.php">PORTAIL</a></li>
			<li class="menuParam"><a href="parametre.inc.php"><i class="fas fa-cog"></i></a> </li>
		</ul>
	</nav>
