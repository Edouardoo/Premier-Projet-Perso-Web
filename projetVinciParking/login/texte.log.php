<div id="texte">
<?php
if (!empty($_GET["LoginPage"])){
	$page=$_GET["LoginPage"];}
	else
	{$page=0;
	}
switch ($page) {
//
// Composants
//

case 0:
	// inclure ici la page accueil photo
	include_once('pages/btnlogin.php');
	break;
	// page insertion nouveau client
case 1:
	// inclure ici la page insertion nouveau clients
	include("pages/login.php");
    break;


}
	
?>
</div>
