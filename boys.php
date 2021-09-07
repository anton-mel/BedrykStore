<?php require "db.php";
///print_r($_SESSION['cart']);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "bedryk";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$ID_CART = $_POST['rowidcart'];			

$sql = "SELECT * FROM table_rows WHERE id = '$ID_CART'";
$result = mysqli_query($db, $sql);

$row = mysqli_fetch_array($result);




/*FILTERS*/

//CAT
$categ_ch = $_POST['cat_sub_boys_filt'];

//PRICE
if(isset($_POST['ready_filt_price'])){
  $minprice = $_POST['slider-range-value1'];
  $maxprice = $_POST['slider-range-value2'];
}


/*RESULTS SAVE*/
$item_filter = array(
	'cat' => $_POST['cat_sub_boys_filt'],
	'price_min' => $_POST['slider-range-value1'],
	'price_max' => $_POST['slider-range-value2']
);

$_SESSION['filters'] = $item_filter;

/*END FILTERS*/








if ($row['zny']) {
	$put_price = $row['start_price']*(1-floatval($row['zny'])/100);
}else{
	$put_price = $row['start_price'];
}

if(isset($_POST['addtocart'])){
///print_r($_POST['rowidcart']);

	if(isset($_POST['checkbecartboxes'])){

		if(isset($_SESSION['cart'])){
			
			$item_array_id = array_column($_SESSION['cart'], "rowidcart");
			///print_r($item_array_id);

			if(in_array($_POST['rowidcart'], $item_array_id)){
				echo "<script>
					alert('ADDED TO THE CART ALREADY..!'); 

				</script>";

				echo "<script> window.location = 'boys.php'; </script>";
			}else{

				$keys = array_keys($_SESSION['cart']);
				$lastKey = $keys[count($keys)-1] + 1;

				
				$item_array = array(
					'rowidcart' => $_POST['rowidcart'],
					'checkbox' => $_POST['checkbecartboxes'],
					'count' => 1,
					'price' => round($put_price)
				);

				$_SESSION['cart'][$lastKey] = $item_array;
			}

		}else{

			$item_array = array(
				'rowidcart' => $_POST['rowidcart'],
				'checkbox' => $_POST['checkbecartboxes'],
				'count' => 1,
				'price' => round($put_price)
			);

			//Create new session variable
			$_SESSION['cart'][0] = $item_array;
		}


	}else{

	echo "
	<div class='containeralert'>
		<div class='alertproblem'>
			<div class='blockalert'>
				<p>ОБЕРИ РОЗМІРИ!</p>
				<span></span>
			</div>
			<div class='linealert'></div>
		</div>

		<div class='alertproblem2'>
			<div class='blockalert2'>
				<p>БІЛЬШЕ ДЕТАЛЕЙ ЗА \" ЧИТАТИ БІЛЬШЕ \"...</p>
				<span></span>
			</div>
			<div class='linealert2'></div>
		</div>
	</div>

		<script>
			setTimeout(function(){
				var topr = sessionStorage.getItem('top');
				window.scrollTo({
				    top: topr,
				    behavior: 'smooth'
				});
			}, 1000);


			var w = 0;

			var interv = setInterval(function(){
				w++;

				$('.linealert').css('width', w);

				if(Math.floor($('.alertproblem').width()+80) == $('.linealert').width()){
					clearInterval(interv);
					$('.linealert').css('width', '100%');
					$('.alertproblem').hide();
				}
			}, 30);


			setTimeout(function(){
				$('.alertproblem2').css('display','flex');
				$('.alertproblem2').addClass('animated fadeIn');
				var w2 = 0;

				var interv2 = setInterval(function(){
					w2++;

					$('.linealert2').css('width', w2);

					if(Math.floor($('.alertproblem2').width()+80) == $('.linealert2').width()){
						clearInterval(interv2);
						$('.linealert2').css('width', '100%');
						$('.alertproblem2').hide();
					}
				}, 30);
			}, 5000);

		</script>

	";

	}	

}

?>

<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Одяг для хлопчиків</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="svg" href="icon.svg" />
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
			

	<!-- START LOADER-->

		<?php require "preloader.php" ;?>

	<!--END LOADER-->


	<!-- HEADER-->

		<?php require "header.php" ;?>

	<!--END HEADER-->




	<div class="body">
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
		<div class="topper">
			<p class="breadcrum"><?= breadcrumbs(' <i class="fa fa-caret-right" aria-hidden="true" style="margin: 0 7px;"></i> ') ?></p>
		</div>
		
		<div class="boys_body" style="margin-bottom: 70px;">
			<div class="left_reg">
				<ul>
					<div class="left_reg_flex">
						<p>Категорія</p>
						<i class="fa fa-plus plus_reg" aria-hidden="true"></i>
						<i class="fa fa-minus minus_reg" aria-hidden="true"></i>
					</div>
					<div class="sort_div_section">
						<form class="form_sort" action="boys.php" method="POST" enctype="multipart/form-data">
							<select id="sources" class="sort_section" name="cat_sub_boys_filt" onchange="this.form.submit()">
							  <option <?php if($_SESSION['filters']['cat']==0){ echo 'selected="selected"'; } ?> value="0">Всі товари</option>
							  <option <?php if($_SESSION['filters']['cat']==1){ echo 'selected="selected"'; } ?> value="1">Пункт 1</option>
							  <option <?php if($_SESSION['filters']['cat']==2){ echo 'selected="selected"'; } ?> value="2">Пункт 2</option>
							  <option <?php if($_SESSION['filters']['cat']==3){ echo 'selected="selected"'; } ?> value="3">Пункт 3</option>
							  <option <?php if($_SESSION['filters']['cat']==4){ echo 'selected="selected"'; } ?> value="4">Пункт 4</option>
							  <option <?php if($_SESSION['filters']['cat']==5){ echo 'selected="selected"'; } ?> value="5">Пункт 5</option>
							</select>
							<button type="submit" name="sub_cat_boys" style="display: none;">Готово</button>
							<div class="clear"></div>
						</form>
					</div>
				</ul>

				<ul>
					<div class="left_reg_flex">
						<p>Ціна</p>
						<i class="fa fa-plus plus_reg" aria-hidden="true"></i>
						<i class="fa fa-minus minus_reg" aria-hidden="true"></i>
					</div>
					<div class="sort_div_section">
						<div class="form_sort">
						
							<?php require 'price-slider.php'; ?>
						
						<div class="clear"></div>
						</div>
					</div>
				</ul>

				<ul>
					<div class="left_reg_flex">
						<p>Розмір</p>
						<i class="fa fa-plus plus_reg" aria-hidden="true"></i>
						<i class="fa fa-minus minus_reg" aria-hidden="true"></i>
					</div>
					<div class="sort_div_section">
						<form class="form_sort">
							<ul class="size">
								<li><input id="radio_size_filt1" type="radio" name="radio_size_filt"><label for="radio_size_filt1">S</label></li>
								<li><input id="radio_size_filt2" type="radio" name="radio_size_filt"><label for="radio_size_filt2">S</label></li>
								<li><input id="radio_size_filt3" type="radio" name="radio_size_filt"><label for="radio_size_filt3">S</label></li>
								<li><input id="radio_size_filt4" type="radio" name="radio_size_filt"><label for="radio_size_filt4">S</label></li>
								<li><input id="radio_size_filt5" type="radio" name="radio_size_filt"><label for="radio_size_filt5">S</label></li>
								<li><input id="radio_size_filt6" type="radio" name="radio_size_filt"><label for="radio_size_filt6">S</label></li>
								<li><input id="radio_size_filt7" type="radio" name="radio_size_filt"><label for="radio_size_filt7">S</label></li>
								<li><input id="radio_size_filt8" type="radio" name="radio_size_filt"><label for="radio_size_filt8">S</label></li>
								<li><input id="radio_size_filt9" type="radio" name="radio_size_filt"><label for="radio_size_filt9">S</label></li>
								<li><input id="radio_size_filt10" type="radio" name="radio_size_filt"><label for="radio_size_filt10">S</label></li>
								<li><input id="radio_size_filt11" type="radio" name="radio_size_filt"><label for="radio_size_filt11">S</label></li>
								<li><input id="radio_size_filt12" type="radio" name="radio_size_filt"><label for="radio_size_filt12">S</label></li>
								<li><input id="radio_size_filt13" type="radio" name="radio_size_filt"><label for="radio_size_filt13">S</label></li>
								<li><input id="radio_size_filt14" type="radio" name="radio_size_filt"><label for="radio_size_filt14">S</label></li>
								<li><input id="radio_size_filt15" type="radio" name="radio_size_filt"><label for="radio_size_filt15">S</label></li>
								<li><input id="radio_size_filt16" type="radio" name="radio_size_filt"><label for="radio_size_filt16">S</label></li>
								<li><input id="radio_size_filt17" type="radio" name="radio_size_filt"><label for="radio_size_filt17">S</label></li>
								<li><input id="radio_size_filt18" type="radio" name="radio_size_filt"><label for="radio_size_filt18">S</label></li>
							</ul>
						<button type="submit" class="ready">Готово</button>
						<div class="clear"></div>
						</form>
					</div>
				</ul>
			</div>
			<style type="text/css">
				

				/*size*/
				.size{
					display: grid;
					grid-template-columns: 1fr 1fr 1fr 1fr;
					grid-column-gap: 30px;
					justify-content: center;
					grid-row-gap: 15px;
					margin-bottom: 20px;
				}

				.size li{
					box-sizing: border-box;
				    -moz-box-sizing: border-box;
				    -webkit-box-sizing: border-box;
					list-style: none; 
					display: flex;
					justify-content: center;
					transition: .2s;
				}
				.size li:hover{
					color: #333333;
				}
				.size li input{
					margin-right: 7px;
				}
			</style>
			<div class="main_buy_close">
				
				<div class="title_main_buy_close">
					ДЛЯ ХЛОПЧИКІВ
				</div>
				<div class="boys_block_buy_r">
					<?php require "boys_blocks.php"; ?>
				</div>
			</div>
			<div class="next_but"></div>
		</div>


			<!-- GMAILS -->

			<?php require "gmails.php"; ?>
			
			<!-- END GMAILS -->
	<!-- HEADER-->

		<?php require "footer-block.php" ;?>

	<!--END HEADER-->

	<div class="footer" style="margin-top: 0;">
		<a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
	<script src="main.js"></script>
	<script src="/paginathing-master/paginathing.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($){
		$('.blocks_last').paginathing({
	    		  perPage: 12,
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