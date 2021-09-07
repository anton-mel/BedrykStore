<?php require "db.php";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bedryk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_GET['idp'];
if(isset($id)){
	$sql = "SELECT * FROM table_rows WHERE id = '$id'";
	$result = mysqli_query($db, $sql);

	$row = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Назва товору</title>
	<meta charset="utf-8">
	<link rel="icon" type="svg" href="icon.svg" />
	<link rel="stylesheet" type="text/css" href="/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="new_style.css">
</head>
<body>
			<!-- START LOADER-->

			<?php require "preloader.php" ;?>

			<!--END LOADER-->


			<!-- HEADER-->

			<?php require "header.php" ;?>

			<!--END HEADER-->


			<h1>ТОВАР ТА ІНФОРМАЦІЯ(php макет)</h1>
			<ul>
				<li><img src="<?php echo $row["photo_row"]; ?>" style="height: 200px;"></li>
				<li><?php echo $row['zny']; ?></li>
				<li><?php echo $row["start_price"]; ?></li>
				<li><?php echo $row["name_row"]; ?></li>
				<li><?php echo $row['cat']; ?></li>
				<li><?php echo $row['id']; ?></li>
				<li><?php echo $row['size']; ?></li>
				<li><?php echo $row['desc']; ?></li>
				<li><?php echo $row['color']; ?></li>
			</ul>








	<div class="line"><p></p></div>

	
	<!-- HEADER-->

		<?php require "footer-block.php" ;?>

	<!--END HEADER-->

	<div class="footer another-booter">
		<a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
	</div>

</body>

	<script src="/jquery-smooth-scrolling-master/jquery.smoothscroll"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script src="main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="/paginathing-master/paginathing.js"></script>

</body>
</html>