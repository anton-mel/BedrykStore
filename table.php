<table class="table_change">

			    <thead>
			        <tr>
			        	<th>№</th>
			            <th colspan="2">ФОТО</th>
			            <th>НАЗВА</th>
			            <th>ПОЧ. ЦІНА У ГРН</th>
			            <th>ЗНИЖКА У СОТИХ</th>
			            <th>КІН. ЦІНА У ГРН</th>
			            <th>ОПИС</th>
			            <th>КОЛІР</th>
			            <th>КАТЕГОРІЯ</th>
			            <th>ВКЛАДКА</th>
			            <th>РОЗМІР</th>
			            <th>К-СТЬ</th>
			            <th>ПІДТВЕРДЖЕННЯ</th>
			            <th>ВИДАЛИТИ</th>
			        </tr>
			    </thead>
			    <tbody class="tbody_table_add_row">






			    	<?php 

			    		if(isset($_POST['photo_sub'])){

			    		$sqlt = "SELECT * FROM table_rows ORDER BY `id` DESC";
						$result2 = mysqli_query($db, $sqlt);
						$id_row = $_POST['id_none'];
						$a ='file_row'.$id_row;
			    				while ($row2 = mysqli_fetch_array($result2)) {
									if(!empty($_FILES[$a]['name'])){
											$photo_name = $_FILES[$a]['name'];
											$temLoc = $_FILES[$a]['tmp_name'];
											$target = "row_photo/".$photo_name;

											$sql = "UPDATE `table_rows` SET `photo_row` = '$target' WHERE `table_rows`.`id` = $id_row";
											mysqli_query($db, $sql);

											move_uploaded_file($temLoc, $target);
									}	
								}
							 	
						}






						$sql = "SELECT * FROM table_rows ORDER BY `id` DESC";
						$result = mysqli_query($db, $sql);

						

						while ($row = mysqli_fetch_array($result)) {

							echo '<tr class="tableform">';
									echo '<td class="table_num">';
										echo $row['id'];
									echo "</td>";

									echo '<td class="table_ph_look">';
										echo '<a href="'.$row['photo_row'].'" target="_blank" style="background: url('.$row['photo_row'].'); background-size: cover !important; background-repeat: no-repeat; background-position: center;"><i class="fa fa-search-plus more_ph_table" style="display:none;" aria-hidden="true"></i></a>';
									echo "</td>";

									echo '<td class="table_ph">';
										echo '<form action="change.php" method="POST" class="formflex" enctype="multipart/form-data"><input autocomplete="off" type="file" id="img_table'.$row['id'].'" name="file_row'.$row['id'].'" style="display: none;">';
										echo "<input type='text' value='".$row['id']."' autocomplete='off' class='id_none' name='id_none' style='display:none;'>";
										echo '<label for="img_table'.$row['id'].'" class="label_img">ЗАВАНТАЖИТИ</label><button type="submit" name="photo_sub" class="subbuttab"><i class="fa fa-check" aria-hidden="true"></i></button></form>';
									echo "</td>";

								echo '<form action="change.php" method="POST" enctype="multipart/form-data">';

									echo "<td class='table_name'>";
										echo "<input type='text' autocomplete='off' value='".$row['name_row']."' name='name_row' placeholder='Введіть назву товару'>";
									echo "</td>";

									echo '<td class="table_pprice">';
										echo '<input type="text" autocomplete="off" value="'.$row['start_price'].'" placeholder="Введіть початкову ціну" name="sprice_row">';
									echo '</td>';

									echo '<td class="table_zny">';
										echo '<input type="text" autocomplete="off" value="'.$row['zny'].'" placeholder="Введіть знижку товару" name="zny_row">';
									echo '</td>';

									echo '<td class="table_aprice" style="padding: 0 70px !important;">';
									echo '</td>';

									echo '<td class="table_desc">';
										echo '<input type="text" autocomplete="off" value="'.$row['desc'].'" name="desc_row" placeholder="Введіть опис товару">';
									echo '</td>';

									echo '<td class="table_color">';
									echo '<input type="hidden" autocomplete="off" class="in_color" value="'.$row['color'].'" style="display:none;">';
										echo '<select class="sel_t_color" name="color">';
											echo '<option>Виберіть колір</option>';
											echo '<option>Пункт 1</option>';
											echo '<option>Пункт 2</option>';
											echo '<option>Пункт 3</option>';
											echo '<option>Пункт 4</option>';
											echo '<option>Пункт 5</option>';
										echo '</select>';
									echo '</td>';

									echo "<input type='text' autocomplete='off' value='".$row['id']."' class='id_none' name='id_none' style='display:none;'>";

									echo '<td class="table_cat">
									<input type="hidden" autocomplete="off" class="in_cat" value="'.$row['cat'].'" style="display:none;">
										<select class="sel_t_cat" name="cat">
											<option value="0"'; if($row['cat'] == 0 ) echo "selected='selected'"; echo '>Виберіть категорію</option>
											<option value="1"'; if($row['cat'] == 1 ) echo "selected='selected'"; echo '>Пункт 1</option>
											<option value="2"'; if($row['cat'] == 2 ) echo "selected='selected'"; echo '>Пункт 2</option>
											<option value="3"'; if($row['cat'] == 3 ) echo "selected='selected'"; echo '>Пункт 3</option>
											<option value="4"'; if($row['cat'] == 4 ) echo "selected='selected'"; echo '>Пункт 4</option>
											<option value="5"'; if($row['cat'] == 5 ) echo "selected='selected'"; echo '>Пункт 5</option>
										</select>
									</td>';


									echo '


									<td class="table_block">
									<input type="hidden" autocomplete="off" class="in_block" value="'.$row['block'].'">
										<select class="sel_t_block" name="block_set" style="padding: 0 50px;">
											<option>Виберіть вкладку</option>
											<option '; 

											if ($row['block'] == 1 ) echo 'selected' ; 

											echo ' value="1">Boys</option>


											<option '; 

											if ($row['block'] == 2 ) echo 'selected' ; 

											echo ' value="2">Girls</option>


											<option '; 

											if ($row['block'] == 3 ) echo 'selected' ; 

											echo ' value="3">Babys</option>

										</select>
									</td>


									';

									echo '
									<td class="table_size">
									<div id="checkboxes">
									  <ul>
									  	<p class="size_none">'.$row["size"].'</p>
									    <input type="checkbox" id="size1'.$row['id'].'" class="s_si" name="size[]" value="S">
									    <label for="size1'.$row['id'].'">S</label>
									    <input id="size2'.$row['id'].'" type="checkbox" class="m_si" name="size[]" value="M">
									    <label for="size2'.$row['id'].'">M</label>
									    <input id="size3'.$row['id'].'" type="checkbox" class="l_si" name="size[]" value="L">
									    <label for="size3'.$row['id'].'">L</label>
									    <input id="size4'.$row['id'].'" type="checkbox" class="xl_si" name="size[]" value="XL">
									    <label for="size4'.$row['id'].'">XL</label>
									  </ul>
									</div>
									</td>

									';

									echo '<td class="table_amount">';
										echo '<input type="text" autocomplete="off" value="'.$row['number'].'" name="numb" placeholder="Введіть кількість">';
									echo '</td>';

									echo '<td class="ready_table_row">';
										echo '<button type="submit" name="sub_row" class="ready_but_row">ГОТОВО</button>';
									echo '</td>';

									echo '</form>';

									echo '<td class="table_del"><form action="change.php" method="POST" enctype="multipart/form-data">';
										echo "<input type='text' autocomplete='off' value='".$row['id']."' class='id_none' name='id_none_row' style='display:none;'>";
										echo '<button class="delete_but_row" name="delete_row">ВИДАЛИТИ</button>';
									echo '</form></td>';
							echo '</td>
							';
						}
					?>
			        
			    </tbody>
</table>