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

							
							<div class="blocks_last">

							';

							if($queryResult > 0){
								while ($row = mysqli_fetch_array($result)) {
								echo '



								<form class="block">

									<div class="block_img_last" style="background: url('.$row["photo_row"].');">

											<p class="actsia_block">АКЦІЯ '.$row['zny'].'%</p>

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
													<p class="cat_ind">'.$row['cat'].'</p>
												</div>

												<div class = "list-checks"> 
													<p class="t_ch">Наявні розміри (виберіть необхідний):</p>
													<ul>
														<p class="size_none2">'.$row["size"].'</p>

														<input id="size1'.$row['id'].'" type="checkbox" class="s_si2" value="S">
													    <label for="size1'.$row['id'].'" class="l_s_si2">S</label>

													    <input id="size2'.$row['id'].'" type="checkbox" class="m_si2" value="M">
													    <label for="size2'.$row['id'].'" class="l_m_si2">M</label>

													    <input id="size3'.$row['id'].'" type="checkbox" class="l_si2" value="L">
													    <label for="size3'.$row['id'].'" class="l_l_si2">L</label>

													    <input id="size4'.$row['id'].'" type="checkbox" class="xl_si2" value="XL">
													    <label for="size4'.$row['id'].'" class="l_xl_si2">XL</label>
													</ul>
												</div>

												<div class="color_div_ind">
													<label class="color_title_siv_ind">Колір:</label>
													<p class="color_ind">'.$row['color'].'</p>
												</div>

												<p class="aprice_block_buy" style="display:none;"></p>
												<p class="desc_block desc_ind">'.$row['desc'].'</p>
												
												<button class="button_add_to_busket" data-id="'.$row["id"].'">У КОШИК</button>
											</div>
										<div class="block_whater_mark">
										</div>
									</div>
								</form>







								';
								}
							}

							echo '

							</div>

							';
						
					?>
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////// !-->



	</div>