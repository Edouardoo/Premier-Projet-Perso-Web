<?php 
include 'include/database.php';
global $db;



if(isset($_POST['submit'])) {
	$file = $_FILES['file'];
	$target = "images/" .basename($_FILES['image'],['name']);

	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'gif');

	if (in_array($fileActualExt, $allowed)) {
		if ($fileError == 0){
			if ($fileSize <  1000000) {
				$fileNameNew = uniqid('',true).".".$fileActualExt;

				$fileDestination = 'upload/' .$fileNameNew;
				$imgsql= "INSERT INTO post (image,pseudo) VALUES($fileName) ";
 
				}
			)
				
			}else{
				echo "Votre fichier est trop lourd, fait lui faire un régime";
			}

		}else{
			echo "Une erreur est survenue";
		}

	}else{
		echo "Les fichiers de ce type ne sont pas postable.";

	}
}

?>