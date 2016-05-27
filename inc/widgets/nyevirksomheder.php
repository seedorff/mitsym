<?php 
$url="inc/feeds/virksomheder.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>
<div class="card card-block feed company-feed">
  <h3 class="card-title">Nye virksomheder</h3>
    
    <!-- company loop (static example feed) -->
    <?php
    foreach($data as $key => $company){ ?>
    <div class="feed-item company">    
      <h4><a href="<?php echo $site_url; ?>/?company-id=<?php echo $company['id']; ?>"><?php echo $company['company']; ?></a>
      </h4>
      <div class="feed-meta text-muted">
        Indflyttet<i class="fa fa-caret-right text-muted"></i><?php echo $company['move-in-date']; ?><i class="fa fa-home text-muted"></i><?php echo $company['location']; ?>
      </div>
    </div>
    
    <?php } ?>
    <!-- /company loop -->

</div>