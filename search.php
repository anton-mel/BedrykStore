<?php require "db.php"; ?>
<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Пошук</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
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

		<a href="/change.php" class="but_change_back">НАЗАД</a>

		<div class="article-container" style="overflow-x:scroll; padding-bottom: 35px;" class="d_t2">
			<?php require "search_table.php"; ?>
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
</body>
</html>