<?php 
require_once 'inc/feeds/xmltojson.php';

$json=XmlToJson::Parse("http://test.paqle.se/rss/folder.atom?userId=27672&folderId=21&key=8b4ed09792fd9574b7e1ba53834fdc41");
$data=json_decode($json,true);
?>
<div class="card card-block feed orbit paqle-feed">
  <h3 class="card-title">Virksomheder på Orbit</h3>
    <p class="card-text">Nævnt i medierne.</p>
    <!-- paqle loop -->
    <?php
      $i = 0;
      foreach($data['entry'] as $key => $entry){ 
      if($i==5) break;?>
      <div class="feed-item paqle-entry"> 
        <h4><a href="<?php echo $entry['link']['@attributes']['href']; ?>" target="_blank"><?php echo $entry['title']; ?></a>
        </h4>
        <div class="feed-meta text-muted">
        <?php 
          $retievedtime = new DateTime($entry['published']);
          $published = $retievedtime->format('d/m/Y'); ?>
        <?php echo $entry['category']['@attributes']['label']; ?><i class="fa fa-caret-right"></i><?php echo $entry['source']['title']; ?><i class="fa fa-clock-o"></i><?php echo $published;?>
        </div>
      </div>
      
      <?php $i++;}?>
    <!-- /paqle loop -->
</div>