<?php 
$url="inc/feeds/virksomheder.json";
$json=file_get_contents($url);
$data=json_decode($json,true);
?>
<div class="card card-block feed company-feed">
  <h3 class="card-title">Nye virksomheder</h3>
    
    <!-- company loop -->
    <?php
    foreach($data as $key => $company){ ?>
    <div class="row feed-item company"> 
      <div class="col-xs-12">
          
          <h4><a href="<?php echo $site_url; ?>/?company-id=<?php echo $company['id']; ?>"><?php echo $company['company']; ?></a>
          </h4>
          <div class="feed-meta text-muted">
            Indflyttet <?php echo $company['move-in-date']; ?>
          </div>
      </div>
    </div>
    
    <?php } ?>
    <!-- /company loop -->

</div>