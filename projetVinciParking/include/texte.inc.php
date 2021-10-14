<div id="texte">
<?php
if (!empty($_GET["page"])){
	$page=$_GET["page"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Composants
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/accueil.inc.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page insertion nouveau clients
	include("pages/client.inc.php");
    break;

case 2:
	// inclure ici la page liste des clients
	include_once('pages/historique.inc.php');
    break;
case 3:
	// inclure ici la page modification des clients
	include("pages/portail.inc.php");
    break;
case 4:
	// inclure ici la page insertion nouveau composant
	include_once('pages/parametre.inc.php');

    break;
    
default : 	include_once('pages/accueil.inc.php');
}
	
?>
</div>
