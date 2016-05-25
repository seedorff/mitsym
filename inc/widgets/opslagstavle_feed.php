<?php 
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>

<div class="card post-feed card-block">
  <h3 class="card-title"><a href="<?php echo $site_url; ?>/?page=opslagstavlen">Opslagstavlen</a></h3>
    <p class="card-text">Seneste opslag.</p>

    <!-- post loop -->
    <?php
    foreach($data as $key => $post){ ?>
      <div class="post"> 

          <div class="post-meta"><?php echo $post['post-date']; ?></div>
          <h4><a href="<?php echo $site_url; ?>/?post-id=<?php echo $post['id']; ?>"><?php echo $post['post-title']; ?></a></h4>

      </div>
      <!-- /post loop -->
    <?php } ?>
</div>