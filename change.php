<?php require "db.php"; ?>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "bedryk";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if(isset($_POST['upload'])){
							$name = '';
							$photo = '';
							$sprice = '';
							$zny = '';
							$desc = '';
							$selected_val = '';
							$selected_val2 = '';
							$numb = '';
							$size = '';
							$block = '';

	$sql = "INSERT INTO `table_rows`(`name_row`, `photo_row`, `start_price`, `zny`, `desc`, `color`, `cat`, `number`, `size`, `block`) VALUES ( '$name', '$photo' , '$sprice', '$zny','$desc','$selected_val','$selected_val2', '$numb', '$size', '$block') ";
	$conn->query($sql);
	}

	if(isset($_POST['delete_row'])){ 
		$id=$_POST['id_none_row'];
	    $sql = "DELETE FROM `table_rows` WHERE id=$id";
		mysqli_query($db, $sql);
			
	}
	
	if(isset($_POST['sub_row'])){							

								$array = array();

								if(implode("",$array) == ""){
									if(in_array('S', $_POST['size'])){
										array_push($array,"S");
									}
									if(in_array('M', $_POST['size'])){
										array_push($array,"M");
									}
									if(in_array('L', $_POST['size'])){
										array_push($array,"L");
									}
									if(in_array('XL', $_POST['size'])){
										array_push($array,"XL");
									}


									foreach($array as $value){
										$res .= ' '.$value;
									}

								}

								

								$id_row = $_POST['id_none'];
								$name = $_POST['name_row'];
								$sprice = $_POST['sprice_row'];
								$zny = $_POST['zny_row'];
								$desc = $_POST['desc_row'];
								$color = $_POST['color'];
								$cat = $_POST['cat'];
								$numb = $_POST['numb'];
								$block_set = $_POST['block_set'];
								$sql = "UPDATE `table_rows` SET `name_row` = '$name', `start_price` = '$sprice', `zny` = '$zny', `desc` = '$desc', `color` = '$color', `cat` = '$cat', `number` = '$numb', `size` = '$res', `block` = '$block_set' WHERE `table_rows`.`id` = $id_row";
	$conn->query($sql);			
	}
	

	$conn->close();
?>
<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Настройки сайту</title>
	<meta charset="utf-8">
	<link rel="icon" type="svg" href="icon.svg" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="new_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
	<!-- START LOADER-->

			<?php require "preloader.php" ;?>

	<!--END LOADER-->
	<?php if( isset($_SESSION['logged_user'])): ?>
		<div class="nav">
			<div class="lside_nav">
				<ul id="menu_list">
					<li><a href="/index.php">Головна</a></li>
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Відгуки</a></li>
					<li><a href="#">Контакти</a></li>
					<?php if( isset($_SESSION['logged_user'])): ?>
					<li><a href="change.php" class="chlink"><i class="fa fa-cog" style="font-size: 15px; margin-right: 7px;"></i>Настройки сайту</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="rside_nav">
				<div class="gr_rob">Графік роботи:Пн-Пт з 9.00 до 18.00 Сб-Нд з 10.00 до 15.00</div>
				<a href="tel:+380936553286"><i class="fa fa-phone" style="font-size: 20px;"></i>+380936553286</a>
			</div>
		</div>

		<?php

			// This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
			function breadcrumbs($separator = ' &raquo; ', $home = 'HOME') {
			    // This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
			    $path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

			    // This will build our "base URL" ... Also accounts for HTTPS :)
			    $base = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

			    // Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
			    $breadcrumbs = Array("<a href=\"$base\">$home</a>");

			    // Find out the index for the last value in our path array
			    $last = end(array_keys($path));

			    // Build the rest of the breadcrumbs
			    foreach ($path AS $x => $crumb) {
			        // Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
			        $title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

			        // If we are not on the last index, then display an <a> tag
			        if ($x != $last)
			            $breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
			        // Otherwise, just display the title (minus)
			        else
			            $breadcrumbs[] = $title;
			    }

			    // Build our temporary array (pieces of bread) into one big string :)
			    return implode($separator, $breadcrumbs);
			}

		?>
		<div class="topper topc">
			<p class="breadcrum"><?= breadcrumbs(' <i class="fa fa-caret-right" aria-hidden="true" style="margin: 0 7px;"></i> ') ?></p>
		</div>
	<div class="change_body">
		<div class="change_but_flex">
			<form action="search.php" method="POST" class="but_ch_i">
				<input type="text" autocomplete="off" name="search" placeholder="Введіть назву/ опис товару" class="but_ch">
				<button type="submit" name="submit-container" class="ready_search_row">
				<i class='fa fa-search' aria-hidden='true'> </i> 
				 ПОШУК
				</button>
			</form>
			<div class="right_tt">
			<form action="change.php" method="POST">
			<button class="but_add_row_table" type="submit" name="upload">
				<i class="fa fa-plus plus_reg" aria-hidden="true"></i>
			</button>
			</form>
			<a href="/all_list.php" class="but_all_row_table">
				<i class="fa fa-list plus_reg" aria-hidden="true"></i>
			</a>
			</div>
		</div>
		<div class="clear"></div>
		
		<div style="overflow-x:scroll; padding-bottom: 115px;" class="d_t">
			<?php require "table.php"; ?>
		</div>

	</div>




	<?php endif; ?>





	
	<?php if( ! isset($_SESSION['logged_user'])): ?>
		<p class="errort">404</p>
	<?php endif; ?>




	

	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
	<script src="main.js"></script>
	<script src="/paginathing-master/paginathing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.tbody_table_add_row').paginathing({
	    		  perPage: 10,
	    		  firstText: 'ПЕРШЕ',
	    		  lastText: 'ОСТАННЄ',
	    		  disabledClass: 'disable_pag',
	    		  liClass: 'page_pag',
	    		  activeClass: 'active_pag',
	    		  containerClass: 'pagination-container', // extend default container class
  				  ulClass: 'pagination',
  				  limitPagination: false,
				  prevText: '<i class="fa fa-caret-left" aria-hidden="true"></i>', // Previous button text
				  nextText: '<i class="fa fa-caret-right" aria-hidden="true"></i>', // Next button text
				  prevNext: true, // enable previous and next button
				  firstLast: true, // enable first and last button
		});

	});
	</script>
</body>
</html>