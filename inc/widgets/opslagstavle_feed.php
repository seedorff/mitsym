<?php 
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>

<div class="card post-feed card-block">
  <h3 class="card-title">Opslagstavlen</h3>
    <p class="card-text">Seneste opslag.</p>

    <!-- post loop -->
    <?php
        foreach($data as $key => $post){ ?>
    <div class="row post">
      
      <div class="col-xs-12">
        <h4><a href="<?php echo $site_url; ?>/?post-id=<?php echo $post['id']; ?>"><?php echo $post['post-title']; ?></a></h4>
      </div>

    </div>
    <!-- /post loop -->
    <?php } ?>
</div>