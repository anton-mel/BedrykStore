<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div id="slider-range"></div>
    </div>
  </div>
  <form class="row slider-labels" action="boys.php" method="POST" enctype="multipart/form-data">
    <div class="row-fl">
      <div class="col-xs-6 caption">
       <span id="slider-range-value1"></span> <em>грн</em> 
       <input type="text" style="display: none;" value="<?php echo $_SESSION['filters']['price_min']; ?>" name="slider-range-value1" class="val1">
      </div>
      <div class="col-xs-6 text-right caption">
       <span id="slider-range-value2"></span> <em>грн</em>
       <input type="text" style="display: none;" value="<?php echo $_SESSION['filters']['price_max']; ?>" name="slider-range-value2" class="val2">
      </div>
    </div>
    <button type="submit" name="ready_filt_price" class="ready">Готово</button>
  </form>
  <?php
  
    if($_SESSION['filters']['price_min'] && $_SESSION['filters']['price_min']){
      echo "

        <div>
        <p>Попередні вибрані ціни:</p>
          <p class='last_val1'><label>MIN:</label>".$_SESSION['filters']['price_min']."</p>
          <p class='last_val1'><label>MAX:</label>".$_SESSION['filters']['price_max']."</p>
        </div>

      ";
    }

  ?>
</div>