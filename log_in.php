<?php require "db.php"; ?>
<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Головна</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="icon" type="svg" href="icon.svg" />
</head>
<body>
<?php
	require "preloader.php";


	$data = $_POST;
	if ( isset($data['do_login']) )
	{
	    $user = R::findOne('users', 'password = ?', array($data['password']));
	    $name = R::findOne('users', 'name = ?', array($data['name']));
	    if ( $user && $name )
	    {
	        //пароль существует
	    $_SESSION['logged_user'] = $user->password;
	    echo '<div id="true" style="color: #3f5765; font-family:sans-serif; text-align:center; position:absolute; padding:20px 0; width:100%;"><h6> Вітаємо на сайті -  <i class="fa fa-shopping-bag" style="font-size: 15px !important; margin: 0 4px;" aria-hidden="true"></i>БЕДРИК </h6><a href="#" class="cl2" id="push2")">Закрити</a></div>';
	 
	    }else{
	        $errors[] = 'Пароль або Логін введено не правильно';
	    }
	     
	    if ( ! empty($errors) )
	    {
	        //выводим ошибки авторизации
	        echo '<div id="errors" style="color: #ff530d; font-family:sans-serif; text-align:center; position:absolute; padding:10px 0; width:100%;">' .array_shift($errors). '<a href="#" class="cl" id="push")">Закрити</a></div>';
	    }
	 
	}
?>

<!-- LOG-IN !-->
<div class="center">
<div class="logister" id="log-in">
	<form action="log_in.php" class="log-in animated fadeIn" method="POST">
		<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
		<p class="inp_name">		
			<input type="text" autocomplete="off" class='inputg_name' required name="name" value="<?php echo @$data['name']; ?>" placeholder="Введіть ваш логін">
		</p>
		<p class="inp_pass">		
			<input type="password" autocomplete="off" class='inputg_pass' name="password" value="<?php echo @$data['password']; ?>" placeholder="Введіть ваш пароль" required><i class="fa fa-eye" aria-hidden="true"></i><i class="fa fa-eye-slash" aria-hidden="true"></i>
		</p>

		<p>
			<?php if( ! isset($_SESSION['logged_user'])): ?>

				<button type="submit" name="do_login">
					Увійти
				</button>

			<?php endif; ?>

			<?php if( isset($_SESSION['logged_user'])): ?>

				<a id="ex" class="ex" href="log-out.php">
				Вийти
				</a>
			<?php endif; ?>

			<a href="/index.php" class="back_log">
				Головна
			</a>
		</p>
		<div class="newd">
		<a href="/regg.php" class="new">Немає акаунту? - Новий пароль</a>
		</div>
	</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>
	<script src="main.js"></script>
	<script src="/paginathing-master/paginathing.js"></script>
</body>
</html>