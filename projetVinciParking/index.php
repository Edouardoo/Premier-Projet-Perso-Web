<?php


if(isset($_SESSION['nom']))
{

	?>

	<?php 
	require_once('include/texte.inc.php');


}

else {
	// code...

	require_once('login/texte.log.php');
	
}

?>