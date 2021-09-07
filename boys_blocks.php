<?php 
					
							$servername = "localhost";
							$username = "root";
							$password = "root";
							$dbname = "bedryk";

							// Create connection
							$conn = new mysqli($servername, $username, $password, $dbname);
							$cat_num = $_SESSION['filters']['cat'];

							$min_val_pr = $_SESSION['filters']['price_min'];
							$max_val_pr = $_SESSION['filters']['price_max'];

							if($cat_num==0 && !$min_val_pr && !$max_val_pr){
								$sql = "SELECT * FROM `table_rows` WHERE `block` = '1'";
							}else if($cat_num==0 && $min_val_pr && $max_val_pr){
								$sql = "SELECT * FROM `table_rows` WHERE `block` = '1' AND `start_price`*( 1 -`zny`/100 ) <= '$max_val_pr' AND `start_price`*( 1 -`zny`/100 ) >= '$min_val_pr'";
							}else if($cat_num!==0 && !$min_val_pr && !$max_val_pr){
								$sql = "SELECT * FROM `table_rows` WHERE `block` = '1' AND `cat` = '$cat_num'";
							}else if($cat_num!==0 && $min_val_pr && $max_val_pr){
								$sql = "SELECT * FROM `table_rows` WHERE `block` = '1' AND `start_price`*( 1 -`zny`/100 ) <= '$max_val_pr' AND `start_price`*( 1 -`zny`/100 ) >= '$min_val_pr'";
							}



							$result = mysqli_query($db, $sql);
							$queryResult = mysqli_num_rows($result);

							if($queryResult > 0){

							echo '
							<div class="top_cat" style="margin-top:50px;">	
							<div class="blocks_last">';

								while ($row = mysqli_fetch_array($result)) {
								echo '



								<form action="boys.php" method="POST" enctype="multipart/form-data" class="block">

									<div class="block_img_last" style="background: url('.$row["photo_row"].');">

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
												<p class="desc_block desc_ind">'.$row['desc'].'<p class="label_but_read_more">ЧИТАТИ БІЛЬШЕ</p></p>

												<input type="hidden" value="'.$row['id'].'" name="rowidcart">
												
												';

												if(isset($_SESSION['cart'])){
													$item_array_id = array_column($_SESSION['cart'], "rowidcart");
														///print_r($item_array_id);

														if(in_array($row['id'], $item_array_id)){

															echo '

																<a href="/shopcart.php" class="button_to_busket button_add_to_busket"><i class="fa fa-address-card" aria-hidden="true" style="margin-right: 7px;"></i>ОФОРМИТИ</a>

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
										<div class="block_whater_mark">
										</div>
									</div>
								</form>







								';
								}
							

							echo '

							</div>
							</div>

							';

							}else if($queryResult == 0 && $_SESSION['filters']['cat']){
								echo "товарів із такими даними фільтру не існує. Сорі";
							}else{
								echo "товарів із такими даними фільтру не існує. Сорі";
							}

						
					?>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////// !-->



	</div>