<!-- to top !-->
	<div class="to-top">
		<p class="p_top">top</p>
	</div>

	<!-- scroll menu start !-->

	<div class="scroll_menu">
		<div class="left_menu2">
			<div class="menu_ul menu_anim">
				<ul>
					<li><a href="/boys.php">ДЛЯ ХЛОПЧИКІВ</a>
					</li>
					<li><a href="/boys.php">ДЛЯ ДІВЧАТОК</a>
					</li>
					<li><a href="/boys.php">ОДЯГ ДЛЯ НОВОНАРОДЖЕНИХ</a>
					</li>
					<li><a href="/boys.php">РОЗПРОДАЖ</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="right_menu2">
			<div class="number_buys2 number_buys3"><?php

				if(isset($_SESSION['cart'])){
					$count = count($_SESSION['cart']);
					echo $count;
				}else{
					echo "0";
				}		

			?></div>
			<a href="/shopcart.php" class="buycosh2">
				<i class="fa fa-shopping-basket fshb2" aria-hidden="true"></i>
			</a>
		</div>
	</div>

	<!-- scroll menu end !-->
	<div class="nav">
		<div class="lside_nav">
			<ul id="menu_list">
				<li><a href="/index.php">Головна</a></li>
				<li><a href="/deliver.php">Доставка</a></li>
				<li><a href="/coments.php">Відгуки</a></li>
				<li><a href="/contact.php">Контакти</a></li>
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
	<div class="header">
		<div class="container_header">
			<fiv class="l_sc">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</fiv>
			<fiv class="c_sc">
				<a href="/index.php" class="logo">
					<h1><i class="fa fa-shopping-bag" aria-hidden="true"></i>БЕДРИК
					<p>МАГАЗИН ДИТЯЧОГО ОДЯГУ</p></h1>
					<h6><i class="fa fa-map-marker" aria-hidden="true"></i> смт. ЛОКАЧІ</h6>
				</a>

			</fiv>
			<fiv class="r_sc">
				<ul>
					<li><a href="/log_in.php" class="logbut"><i class="fa fa-user ubl" aria-hidden="true"></i>Мій обліковий запис</a></li>
					<li><div class="number_buys number_buys3"><?php

						if(isset($_SESSION['cart'])){
							$count = count($_SESSION['cart']);
							echo $count;
						}else{
							echo "0";
						}	

					?></div><a href="/shopcart.php" class="buycosh"><i class="fa fa-shopping-basket fshb" aria-hidden="true"></i>ВАШИЙ КОШИК</a></li>
				</ul>
			</fiv>
		</div>
	</div>
	<div class="menu">
		<div class="left_menu">
			<div class="menu_search">
				<form action="index.php" class="search" method="POST">
						<div class="left_search_side"><i class="fa fa-search left_search_side_i"></i></div>
						<input type="text" name="text" autocomplete="off" aria-expanded="true" maxlength="100" role="combobox" placeholder="Введіть ключові слова" required>
						<button type="submit">ПОШУК</button>
				</form>
			</div>
			<div class="menu_ul menu_hover">
				<ul>
					<li><a href="/boys.php">ДЛЯ ХЛОПЧИКІВ</a>

					</li>
					<li><a href="#">ДЛЯ ДІВЧАТОК</a>

					</li>
					<li><a href="#">ОДЯГ ДЛЯ НОВОНАРОДЖЕНИХ</a>

					</li>
					<li><a href="#">РОЗПРОДАЖ</a>

					</li>
				</ul>
			</div>
		</div>
		<div class="right_menu">
			<i class="fa fa-times st" style="display: none;"></i>
			<i class="fa fa-search sr"></i>
		</div>
	</div>