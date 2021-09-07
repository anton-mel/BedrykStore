<?php require "db.php";

print_r($_SESSION['cart']);
?>

<!DOCTYPE html>
<html lang="UA">
<head>
	<title>БЕДРИК - Кошик</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="icon" type="svg" href="icon.svg" />
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/styles.css">

	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	<script type="text/javascript" src="/js/sweetalert.js"></script>
	<script type="text/javascript" src="/js/form.js"></script>
	<style type="text/css">
		
		.deletecartblock:hover{
			color: #d14e66 !important;
			transition: .5s;
		}
	
	</style>
</head>
<body>

						<?php 

							$servername = "localhost";
							$username = "root";
							$password = "root";
							$dbname = "bedryk";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);


							if(isset($_POST['subdelcartblock'])){

								//get hide input real id and size
								$array_id_cart_real = $_POST["hididblock"];
								$array_size_cart_real = $_POST["hidsizeblock"];

								//get each val in array column id and size
								if($_SESSION['cart']){
									$get_array_in_id = array_column($_SESSION['cart'], "rowidcart");
									$get_array_in_size = array_column($_SESSION['cart'], "hidsizeblock");
					

								foreach ($get_array_in_id as $valuemain) {

									if($_POST["hididblock"] == $valuemain){
										
										//here is a valuemain that is id for chossen block
										//now you can use only hide values

										//delete this one
										$key = array_search($array_id_cart_real, $get_array_in_id);
										$_SESSION['cart'] = array_values($_SESSION['cart']);

										unset ( $_SESSION['cart'][$key] );

										$_SESSION['cart'] = array_values($_SESSION['cart']);

										if(count($_SESSION['cart']) == 0){
											unset ( $_SESSION['cart'] );

											echo "
											<script>
												document.location.reload(true);
											</script>
											";
										}

									}

								}
							}


							}



							if(isset($_POST['sub_dell_everything'])){

								if($_SESSION['cart']){

									unset ( $_SESSION['cart'] );

									echo "
										<script>
											document.location.reload(true);
										</script>
									";

								}

							}

			?>




			<!-- START LOADER-->

			<?php require "preloader.php" ;?>

			<!--END LOADER-->


			<!-- HEADER-->

			<?php require "header.php" ;?>

			<!--END HEADER-->


<?php


echo '
	<div class="body">
		<div class="padcart">

			<div class="title_shcart" style="margin-top: 70px;">
				Кошик
			</div>
			
			<div class="containerclothe">
				<div class="leftcartblock" style="border: none;'; if(!isset($_SESSION["cart"])) echo "width: 100%;"; echo '">
					<div class="blockclothetobuycart">';




							if(isset($_SESSION['cart'])){
								$arr = array_column($_SESSION['cart'], "rowidcart");
								$arrpre = array_column($_SESSION['cart'], "checkbox");
								$i = 0;

								$keys = array_keys($_SESSION['cart']);
								$lastKey = $keys[count($keys)-1] + 1;
								/*foreach ($keys as $key) {
									if($arr[$key[$i]] == ){

									}

									$i++;
								}*/


									

									foreach ($arr as $value) {
									    
										$sql = "SELECT * FROM table_rows WHERE id = '$value'";
										$result = mysqli_query($db, $sql);

										$row = mysqli_fetch_array($result);

										if(isset($_POST['amountclothecart'.$value])){

											if($_POST['id_calc_price_hide'] == $value){

												$amount_ready = $_POST['amountclothecart'.$value];

												if($_POST['amountclothecart'.$value] > $row['number']){
												
													$item_array = $row['number'];

													$_SESSION['cart'][$i]['count'] = $item_array;
															


													if($row['zny']){

														$_SESSION['cart'][$i]['price'] = floatval( ( floatval($row['start_price']) * floatval($row['number']) ) * ( 1 - $row['zny']/100 ) );

													}else{

														$_SESSION['cart'][$i]['price'] = floatval($row['start_price']) * floatval($row['number']);

													}

												}else if($_POST['amountclothecart'.$value] < 1){
					
													$item_array = 1;

													$_SESSION['cart'][$i]['count'] = $item_array;
															


													if($row['zny']){

														$_SESSION['cart'][$i]['price'] = floatval( ( floatval($row['start_price'] )) * ( 1 - $row['zny']/100 ) );

													}else{

														$_SESSION['cart'][$i]['price'] = floatval($row['start_price']);

													}

												}else{

													$item_array = floatval($amount_ready);

													$_SESSION['cart'][$i]['count'] = $item_array;
													


													if($row['zny']){

														$_SESSION['cart'][$i]['price'] = floatval( ( floatval($row['start_price']) * floatval($_POST['amountclothecart'.$value]) ) * ( 1 - $row['zny']/100 ) );

													}else{

														$_SESSION['cart'][$i]['price'] = floatval($row['start_price']) * floatval($_POST['amountclothecart'.$value]);

													}

												}

											}
											
										}
									

												echo '

													<div class="blockclothe" style="margin-top: 40px;">
														<a href="'.$row['photo_row'].'" target="_blank" class="imageclotheblock" style="background: url('.$row['photo_row'].'); background-repeat: no-repeat; background-position: center; background-size: cover;">
															
														</a>
														<div class="descclotheblock">
															<div class="titleclothe">
																'.$row['name_row'].'
															</div>
															<div class="anotherdescclothe">
																<div class="colorclothe">
																	'.$row['color'].',
																</div>
																<div class="sizeclothe">
																	'.$arrpre[$i].'-ка
																</div>
															</div>
														</div>
														<div class="priceclotheblock">
															<div class="startpriceclothecart">
																';

																		echo round($row['start_price']*(1-floatval($row['zny'])/100));

												echo ' грн
															</div>
															<div class="calcclothecart">
																<form action="shopcart.php" method="POST" style=" align-items: center; " name="cartform" class="calc_cart_price_form" enctype="multipart/form-data">
																	<label>Кіл-ть:</label>
																	<input type="number" style="background-color: rgba(0,0,0,.05); color:#333; width: 90px; padding: 15px 20px !important;" name="amountclothecart'.$value.'" value="';

																	
																		echo $_SESSION['cart'][$i]['count'];
																	

																echo '" title="В наявності '.$row['number'].' товарів" min="1" max="'.$row['number'].'" onChange="this.form.submit()">
																	<input type="text" style="display: none;" value="'.$value.'" name="id_calc_price_hide">
																	<input type="submit" style="display: none;" name="calc_price">
																</form>
															</div>
															<div class="afterpricecart">';

																


																		if($_SESSION['cart'][$i]['price']==0){
																			echo round($row['start_price']*(1-floatval($row['zny'])/100));
																		}else{
																			echo round($_SESSION['cart'][$i]['price']);
																		}

																
													


												echo ' грн
															</div>
														</div>
														<div class="funcclotheblock">
															<a href="#" class="makechangeblock"><i class="fa fa-pencil" aria-hidden="true"></i></a>
															<form action="shopcart.php" method="POST" enctype="multipart/form-data">
																<input type="hidden" name="hidsizeblock" value="'.$arrpre[0].'">
																<input type="hidden" name="hididblock" value="'.$value.'">
																<button type="submit" alt="видалити товар" name="subdelcartblock" class="deletecartblock" style="background: transparent !important; transition: .5s; cursor: pointer; font-size: 18px; color: rgb(119, 119, 119); border: none;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
															</form>
														</div>
													</div>

													<div class="bottomblockclothe">
														
													</div>
												';		

									$i++;					

								}

							}else{

								echo "
								<style>
									.container-empty-cart{
										display: flex;
										margin-bottom: 120px;
										justify-content: center;
										flex-direction: column;
										align-items: center;
										margin-top: 20px;
										width: 100%;
									}
									.empty-shopping-cart-div{
										display: flex;
										justify-content: center;
										flex-direction: column;
										align-items: center;
									}
									.text-empty-cart{
										font-family: sans-serif;
										font-size: 18px;
										font-weight: bold;
										margin-top: 20px;
										color: #333;
									}
									.but-cart-empty{
										font-family: sans-serif;
										color: #333;
										font-size: 15px;
										text-transform: uppercase;
										padding: 12px 20px;
										border: solid 3px #e9e9e9;
										font-weight: bolder;
										transition: .5s;
										margin-top: 50px;
									}
									.but-cart-empty:hover{
										background: #333;
										color: #fff;
										border: 3px solid #333;
										transition: .5s;
									}
								</style>

								<div class='container-empty-cart'>
									<div class='empty-shopping-cart-div'>

										<img src='/empty-shopping-cart-icon.png' class='empty-shopping-cart' alt='пуста корзина'>
										<div class='text-empty-cart'>У вас немає товарів в кошику.</div>

										<a class='but-cart-empty' href='/index.php' >ПРОДОВЖИТИ КУПЛЯТИ</a>

									</div>
								</div>";
							}





						if (isset($_SESSION['cart'])) {
							echo '

								<!-- TOOLS -->

								<div class="mytoolscart">
									
									<div class="container_tools_cart">
										
										<div class="left_tools_bar">
											<a href="/index.php"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 7px; color: #aeaeae; font-size: 12px;"></i>ПРОДОВЖИТИ ПОКУПКИ</a>
										</div>

										<div class="right_tools_bar">
											<ul>
												<li><a href="/shopcart.php"><i class="fa fa-refresh" aria-hidden="true" style="margin-right: 5px; color: #d14e66;"></i> ОНОВЛЕННЯ КОШИКУ</a></li>
												<li><form action="shopcart.php" method="POST" enctype="multipart/form-data">

													<button type="submit" name="sub_dell_everything" class="button_cart_all_del_sub" style="background: transparent !important; border: none !important;"><i class="fa fa-trash-o" aria-hidden="true" style="margin-right: 5px; color: #aeaeae; font-size: 18px;"></i> ОЧИСТИТИ КОШИК</button>

													<style>

														.button_cart_all_del_sub{
															text-transform: uppercase;
															font-family: sans-serif;
															color: #333;
															transition: .5s;
															font-size: 15px;
															cursor: pointer;
															font-weight: bolder;
														}
														.button_cart_all_del_sub:hover{
															color: #d14e66;
															transition: .5s;
														}
														.button_cart_all_del_sub:hover > i{
															color: #d14e66 !important;
															transition: .5s !important;
														}
														.button_cart_all_del_sub i{
															color: #aeaeae;
															transition: .5s;
															font-weight: regular;
														}

													</style>

												</form></li>		
											</ul>
										</div>

									</div>

								</div>
				
								<!-- end -->

							';
						}






						?>

				</div>
			</div>

				<?php 
					if(isset($_SESSION['cart'])){
						echo '
							<div class="rightcartblock">
								<div class="codenter">
									<h1>ЗАСТОСУВАТИ КОД ЗНИЖКИ</h1>
									<form>
										<span>
											<input type="text" name="" placeholder="Введіть код знижки" autocomplete="off">
											<button type="submit" class="butcod" name="entercod">ЗАСТОСУВАТИ ЗНИЖКУ</button>
										</span>
									</form>
								</div>


								<div class="calculator_cart">
									<div class="div_cart_left">

										<div class="price_cart_clothe">
											<h1>ПРОМІЖНІ ПІДСУМКИ</h1><p style="text-transform: lowercase;">';




								if(isset($_SESSION['cart'])){

									$arr = array_column($_SESSION['cart'], "price");

										foreach ($arr as $value) {

											$end_price += $value;

										}

									echo round($end_price);

								}

						

						echo ' грн</p>
										</div>
										<div class="sent_sprice">
											<h1>ДОСТАВКА</h1><p>FREE</p>
										</div>
										<div class="results_cart">
											<h1>ВАРТІСТЬ<br> ЗАМОВЛЕННЯ</h1><p style="text-transform: lowercase;">'; 




								if(isset($_SESSION['cart'])){

									//не забути потім добавляти ціну доставки з БД
									echo round($end_price);

								}



						echo ' грн</p>
										</div>

										<a href="zakaz.php" class="ready_buy"><i class="fa fa-check-square" aria-hidden="true" style="margin-right: 7px;"></i>ОФОРМИТИ ЗАМОВЛЕННЯ</a>
									</div>
								</div>


							</div>
						';
					}


				?>
				


		</div>



	</div>
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
	<script src="/jquery-smooth-scrolling-master/jquery.smoothscroll"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>

	<script src="main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="/paginathing-master/paginathing.js"></script>

</body>
</html>