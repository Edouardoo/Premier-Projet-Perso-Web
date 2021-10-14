<?php session_start();
?>

<?php 
include 'include/database.php';
global $db;

if (isset($_POST['upload'])) {
	$target = "image/" .basename($_FILES['image']['name']);

	$image = $_FILES['image']['name'];

	$imgsql = "INSERT INTO post (image) VALUES($image)";
	mysqli_query($db,$imgsql);
	if (move_uploaded_file($_FILES['tmp_name']['name'], $target)) {

	}


}

?>




<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Barbs Meme</title>
		<link rel="stylesheet" href="style.css"/>
	</head>

	<body>
		<?php include 'patern_uppage.php';
		?>
		<form action="Barbs Meme.php" method="POST "enctype="multipart/form-data">
			<input type="file" name="image"> 
			<button type="submit" name="upload">POSTER UN MEME</button>


		
	</body>

</html>