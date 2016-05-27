<?php 
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>

<div class="card feed feed post-feed card-block">
  <h3 class="card-title"><a href="<?php echo $site_url; ?>/?page=opslagstavlen">Opslagstavlen</a></h3>
    <p class="card-text">Seneste opslag.</p>

    <!-- post loop (static example feed) -->
    <?php
    foreach($data as $key => $post){ ?>
      <div class="post feed-item"> 
            
            <h4><a href="<?php echo $site_url; ?>/?post-id=<?php echo $post['id']; ?>"><?php echo $post['post-title']; ?></a>
            </h4>
            <div class="feed-meta text-muted">
            <?php echo strstr( $post['author'] . ' ', ' ', true ); ?><i class="fa fa-caret-right text-muted"></i><?php echo $post['posted-in']; ?><i class="fa fa-clock-o text-muted"></i><?php echo $post['post-date']; ?>
            </div>
      </div>
      <!-- /post loop -->
    <?php } ?>
</div>