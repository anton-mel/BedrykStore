<?php require "db.php";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bedryk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$ID_CART = $_POST['id'];		

$sql = "SELECT * FROM table_rows WHERE id = '$ID_CART'";
$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);



		if(isset($_SESSION['cart'])){
			
			$item_array_id = array_column($_SESSION['cart'], "rowidcart");
			///print_r($item_array_id);

			if(in_array($_POST['id'], $item_array_id)){
			}else{

				$keys = array_keys($_SESSION['cart']);
				$lastKey = $keys[count($keys)-1] + 1;

				
				$item_array = array(
					'rowidcart' => $_POST['id'],
					'checkbox' => $_POST['checkb'],
					'count' => 1,
					'price' => round($_POST['price'])
				);

				$_SESSION['cart'][$lastKey] = $item_array;
				print_r($_SESSION['cart']);
			}

		}else{

			$item_array = array(
				'rowidcart' => $_POST['id'],
				'checkbox' => $_POST['checkb'],
				'count' => 1,
				'price' => round($_POST['price'])
			);

			//Create new session variable
			$_SESSION['cart'][0] = $item_array;
		}



?>