<?php require "db.php";

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



if(isset($_POST['addtocart'])){
///print_r($_POST['rowidcart']);

	if(isset($_POST['checkbecartboxes'])){

		


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
	<title>БЕДРИК - Головна</title>
	<meta charset="utf-8">
	<link rel="icon" type="svg" href="icon.svg" />
	<link rel="stylesheet" type="text/css" href="/style.css">
	<link rel="stylesheet" type="text/css" href="/style2.css">
	<link rel="stylesheet" type="text/css" href="/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="new_style.css">

	<link rel="stylesheet" type="text/css" href="/css/sweetalert.css">
	<script type="text/javascript" src="/js/sweetalert.js"></script>
	<script type="text/javascript" src="/js/form.js"></script>
</head>
<body>
			<!-- START LOADER-->

			<?php require "preloader.php" ;?>

			<!--END LOADER-->


			<!-- HEADER-->

			<?php require "header.php" ;?>

			<!--END HEADER-->






	
	<div class="body">
	<!-- <div class="slider">
		<div class="left-around-scroll" data-aos="fade-top" data-aos-duration="3000">
				<svg viewBox="-39 -39 578 578"><path d="
			        M 250, 250
			        m -250, 0
			        a 250,250 0 1,0 500,0
			        a 250,250 0 1,0 -500,0
			      " fill="none" text="red" id="curved-text-production"></path>(<text textLength="1571" alignment-baseline="baseline"><textPath startOffset="00%" xlink:href="#curved-text-production" textLength="1571">&nbsp; • ukrainian • ukrainian • ukrainian • ukrainian • ukrainian • ukrainian</textPath></text>)</svg></div>
		<div class="slides">
			<div class="slide active a1">
				<div class="butttondownloadapp"><i class="fa fa-cloud-download" aria-hidden="true" style="margin-right: 7px; font-size: 17px !important;"></i>
Встановити Додаток</div><div class="actsiablock">ПРОМОКОД на -15%: 7777</div>
			</div>
		</div>

	</div> -->

	<?php require "gmails.php"; ?>


	<div class="videoblockmain">
		<div class="container-videoblockmain">
			<div class="desmainpage">
				<h1>ФОП "БЕДРИК"</h1>

				<p>Lorem <b>ipsum dolor sit</b> amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla <b>pariatur</b>. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p>Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit</b>, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. <b>Duis aute irure dolor in reprehenderit</b> in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint <b>occaecat cupidatat</b> non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				
				<!-- <div class="supportsite">
					<i class="fa fa-life-ring" aria-hidden="true" style="margin-right: 7px;"></i>ПІДТРИМАТИ САЙТ
				</div> -->
			</div>
			<div class="vidmainpage">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10099.863517937596!2d24.635650825212966!3d50.739121713274564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4725000cbe892193%3A0xcefc002b62170988!2z0JvQvtC60LDRh9GWLCDQktC-0LvQuNC90YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQ1NTAx!5e0!3m2!1suk!2sua!4v1623397122967!5m2!1suk!2sua" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>


	<div class="line"><p></p></div>




<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////// !-->


	<?php

	
	
					
							$servername = "localhost";
							$username = "root";
							$password = "root";
							$dbname = "bedryk";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);

							$sql = "SELECT * FROM table_rows ORDER BY `id` DESC";
							$result = mysqli_query($db, $sql);
							$queryResult = mysqli_num_rows($result);

							echo '

							<div class="last_blocks" style="margin-top: 0px !important;">
							<div class="blocks_last">

							';


							if($queryResult > 0){
								$x=0;

								while ($x++<21){

								$row = mysqli_fetch_array($result);

								echo '



								<form action="index.php" method="POST" enctype="multipart/form-data" class="block">

									<div class="block_img_last" style="background: url('.$row["photo_row"].');">

											<a href="product.php?idp='.$row['id'].'" class="desc_prod_bl_a"><p class="label_but_read_more" style="position: relative;"><i class="fa fa-eye" aria-hidden="true"></i>asd</p></a>
											<p class="actsia_block">АКЦІЯ -'.$row['zny'].'%</p>

											<div class="abs_block_text">	
											<p class="price_block_buy2">'.$row["start_price"].' грн</p>
											<p class="aprice_block_buy2"></p>

											<p class="name_block_buy2">'.$row["name_row"].'</p>
											</div>

											<div class="text_bl animated fadeIn">
												<p class="name_block_buy">'.$row["name_row"].'</p>
												<p class="price_block_buy" style="display:none;">'.$row["start_price"].' грн</p>

												<p class="zny_block_buy" style="display:none;">'.$row['zny'].'</p>

												<div class="cat_div_ind">
													<label class="cat_title_siv_ind">Категорія:</label>
													<p class="cat_ind">';

													if($row['cat']==0){echo "Всі товари";}else if($row['cat']==1){echo "Пункт 1";}else if($row['cat']==2){echo "Пункт 2";}else if($row['cat']==3){echo "Пункт 3";}else if($row['cat']==4){echo "Пункт 4";}else if($row['cat']==5){echo "Пункт 5";}

												echo '</p>
												</div>

												<div class = "list-checks"> 
													<p class="t_ch">Наявні розміри (виберіть необхідний):</p>
													<ul>
														<p class="size_none2">'.$row["size"].'</p>

														<input id="size1'.$row['id'].'" name="checkbecartboxes" type="radio" class="s_si2" value="S">
													    <label for="size1'.$row['id'].'" class="l_s_si2">S</label>

													    <input id="size2'.$row['id'].'" name="checkbecartboxes" type="radio" class="m_si2" value="M">
													    <label for="size2'.$row['id'].'" class="l_m_si2">M</label>

													    <input id="size3'.$row['id'].'" name="checkbecartboxes" type="radio" class="l_si2" value="L">
													    <label for="size3'.$row['id'].'" class="l_l_si2">L</label>

													    <input id="size4'.$row['id'].'" name="checkbecartboxes" type="radio" class="xl_si2" value="XL">
													    <label for="size4'.$row['id'].'" class="l_xl_si2">XL</label>
													</ul>
												</div>

												<div class="color_div_ind">
													<label class="color_title_siv_ind">Колір:</label>
													<p class="color_ind">'.$row['color'].'</p>
												</div>

												<p class="aprice_block_buy" style="display:none;"></p>
												<p class="desc_block desc_ind">'.$row['desc'].'</p>

												<input type="hidden" value="'.$row['id'].'" name="rowidcart">
												
												';

												if(isset($_SESSION['cart'])){
													$item_array_id = array_column($_SESSION['cart'], "rowidcart");
														///print_r($item_array_id);

														if(in_array($row['id'], $item_array_id)){

															echo '

																<a href="/shopcart.php" class="button_to_busket button_add_to_busket2"><i class="fa fa-address-card" aria-hidden="true" style="margin-right: 7px;"></i>ОФОРМИТИ</a>

																<script>

																	setTimeout(function(){

																		var topr = sessionStorage.getItem("top");
																		window.scrollTo({
																		    top: topr,
																		    behavior: "smooth"
																		});

																	}, 1000);

																</script>

															';

														}else{
															echo '

																<button type="submit" name="addtocart" class="button_add_to_busket" data-id="'.$row["id"].'"><i class="fa fa-shopping-basket" style="margin-right: 7px;" aria-hidden="true"></i>У КОШИК</button>
													
																<script>

																	setTimeout(function(){

																		var topr = sessionStorage.getItem("top");
																		window.scrollTo({
																		    top: topr,
																		    behavior: "smooth"
																		});

																	}, 1000);

																</script>

															';	
														}
												}else{
													echo '

														<button type="submit" name="addtocart" class="button_add_to_busket" data-id="'.$row["id"].'"><i class="fa fa-shopping-basket" style="margin-right: 7px;" aria-hidden="true"></i>У КОШИК</button>
													
																<script>

																	setTimeout(function(){

																		var topr = sessionStorage.getItem("top");
																		window.scrollTo({
																		    top: topr,
																		    behavior: "smooth"
																		});

																	}, 1000);

																</script>

													';	
												}	

												echo '
											</div>
									</div>
								</form>







								';
								}

								echo '
									<div class="block buttons_index_more">

										<a href="/boys.php"><i class="fa fa-archive" aria-hidden="true"></i>ДЛЯ ДІВЧАТОК</a>
										<a href="/boys.php"><i class="fa fa-archive" aria-hidden="true"></i>ДЛЯ ХЛОПЧИКІВ</a>
										<a href="/boys.php"><i class="fa fa-archive" aria-hidden="true"></i>ДЛЯ НОВОНАРОДЖЕНИХ</a>

										<style>
											.buttons_index_more{
												display: grid !important;
												grid-row-gap: 20px;
												flex-direction: column;
												background: #eee !important;
											}
											.buttons_index_more:hover:before{
												display: none;
											}
											.buttons_index_more:hover:after{
												display: none;
											}
											.buttons_index_more a{
												background: #fff;
												display: flex;
												align-items: center;
												height: 100%;
												font-family: sans-serif;
												color: #333;
												font-size: 12px;
												transition: .5s;
												text-transform: uppercase;
												font-weight: bold;
												justify-content: center !important;
												border-radius: 5px;
											}
											.buttons_index_more a:hover{
												background: #333;
												transition: .5s;
												color: #fff;
											}
											.buttons_index_more a i{
												margin-right: 10px;
											}
										</style>
									</div>
									
								';
							

							echo '

							</div>
							</div>

							';

							}
						
					?>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////// !-->



	</div>


	

	<!-- <div class="carusel_brands">
		<div class="brandsblocks">
			<div class="brandblock_item">
				<img src="img_brands/br4.png">
			</div>
			<div class="brandblock_item">
				<img src="img_brands/br2.jpg">
			</div>
			<div class="brandblock_item">
				<img src="img_brands/br3.png">
			</div>
			<div class="brandblock_item">
				<img src="img_brands/br4.png">
			</div>
			<div class="brandblock_item">
				<img src="img_brands/br2.jpg">
			</div>
		</div>
	</div>


	<style type="text/css">
		
		.brandsblocks{
			display: grid;
			align-items: center;
			justify-content: space-between;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
			grid-column-gap: 20px;
			font-family: sans-serif;
			font-size: 15px;
			text-transform: uppercase;
			font-weight: 1000;
			color: #333;
			height: 100%;
		}
		.brandblock_item{
			height: 100%;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			font-size: 10px;
			position: relative;
			overflow: hidden;
			border-radius: 5px;
			color: #333;
		}
		.brandblock_item img{
			width: 100%;
		}
		.indevelopwall{
			position: absolute;
			top: 0;
			left: 0;
			z-index: 999999999999 !important;
			width: 100vw;
			height: 100vh;
		}

	</style> -->

	
	<!-- HEADER-->

		<?php require "footer-block.php" ;?>

	<!--END HEADER-->

	<div class="footer another-booter" style="margin-top: 0 !important;">
		<a href="index.php">БЕДРИК</a> © 2020. <p>Всі права захищено.</p>
	</div>
	<script src="/jquery-smooth-scrolling-master/jquery.smoothscroll"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		
			var w = window.innerWidth;
			var calc = 22 - Math.floor((w-110)/255)*2;
			var iii = 0;

			var length = $(".blocks_last").children().length-2;

			while(iii++<calc){
				$(".blocks_last").children().eq(length).hide();
				length--;
			}

			$(window).resize(function () {

				var w = window.innerWidth;
				var calc = 22 - Math.floor((w-110)/243.710)*2;
				var iii = 0;

				var length = $(".blocks_last").children().length-2;

				$(".blocks_last").children().show();

				while(iii++<calc){
					$(".blocks_last").children().eq(length).hide();
					length--;
				}

			});

	</script>
	<script type="text/javascript">
		
		$(".thxletter").css("display","none");
		$(document).ready(function(){
			//SUBSCRIBERS AJAX
			$(".form_gm").find('button').click(function(e) {
				e.preventDefault();
				var name = $("#input_name_subsa").val();

				if(name!==''){

					$.ajax({
						url: "addsubs.php",
						data: {
							name: name
						},
						type: 'POST',
						dataType: 'html',
						success: function (data){
							$(".thxletter").css("display","block");
							$(".thxletter").text("Дякуємо за довіру!");
							$("#input_name_subsa").val("");

							setTimeout(function(){
								$(".thxletter").css("display","none");
							},5000);
						},
						error: function (data){
							$(".thxletter").css("display","block");
							$(".thxletter").text("Виникла проблема. Надішліть пізніше.");
							$("#input_name_subsa").val("");

							setTimeout(function(){
								$(".thxletter").css("display","none");
							},5000);
						}
					});

				}else{
					$(".thxletter").css("display","block");
					$(".thxletter").text("введіть, будь ласка, Ваш емейл");

					setTimeout(function(){
						$(".thxletter").css("display","none");
					},5000);
				}
			});
		});


		//add to cart
		$(".button_add_to_busket").each(function(){
			$(this).click(function(e){
				e.preventDefault();
				var id = $(this).parent().parent().find("input[name*='rowidcart']").val();
				var put_price = $(this).parent().parent().find(".aprice_block_buy2").text().replace(/[^0-9\.]/g, '');
	
				$(this).parent().parent().parent().find("input[name*='checkbecartboxes']").each(function(){
					if($(this).is(":checked")){
						var checkb = $(this).val();

						$.ajax({
							url: "cartadder.php",
							data: {
								id: id,
								price: put_price,
								checkb: checkb
							},
							type: 'POST',
							dataType: 'html',
							success: function (data){
								$('.number_buys3').each(function(){
									let c = parseInt($(this).text())+1;
									$(this).text(c);
								});											
							},
							error: function (data){
								alert("opps. ajax issue");
							}
						});

						$(this).parent().parent().parent().parent().find(".button_add_to_busket").css("display","none");
						$(this).parent().append('<a href="shopcart.php" class="button_to_busket button_add_to_busket2"><i class="fa fa-address-card" aria-hidden="true" style="margin-right: 7px; bottom: 20px;"></i>ОФОРМИТИ</a>');
						$(this).parent().find("input").hide();
						$(this).parent().find("label").hide();
						
					}
				});

			});
		});

	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
	  AOS.init();
	</script>

	<script src="main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<script src="/paginathing-master/paginathing.js"></script>

</body>
</html>