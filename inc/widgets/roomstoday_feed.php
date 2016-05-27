<?php 
$url="http://booking.symbion.dk/return_daily.asp";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>

<div class="card room-feed card-block">
  <h3 class="card-title">Symbion lokaleoversigt</h3>
    <p class="card-text">Bookede lokaler i dag.</p>

    <!-- room loop -->
    <?php
        foreach($data as $key => $item){ 
    ?>
    <div class="row room">
      
      <div class="col-xs-6 room-description">
        <span class="name"><?php echo $item['company']; ?></span>
      </div>
      <div class="col-xs-4 room-time">
        <?php echo implode(':', str_split($item['timeStart'], 2)); ?> - <?php echo implode(':', str_split($item['timeEnd'], 2)); ?>
      </div>
      <div class="col-xs-2 no-gutter-left room-nr">
        <?php echo substr($item['room'],0,8); ?>
      </div>

    </div>
    <!-- /room loop -->
    <?php } ?>
</div>