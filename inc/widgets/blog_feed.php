<?php 
$url="inc/feeds/blog.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>
<div class="card card-block feed blog-feed">
  <h3 class="card-title">Blogindlæg</h3>
    
    <!-- blog loop (static example feed) -->

    <?php
    foreach($data as $key => $blog){ ?>
    <div class="feed-item blog">    
      <h4><a href="<?php echo $blog['post-url']; ?>"><?php echo $blog['title']; ?></a>
      </h4>
      <div class="feed-meta text-muted">
        Skrevet<i class="fa fa-clock-o text-muted"></i><?php echo $blog['post-date']; ?>
      </div>
    </div>
    
    <?php } ?>
    <!-- /blog loop -->

</div>