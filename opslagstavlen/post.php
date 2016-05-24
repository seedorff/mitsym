<?php 
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);

$postID = $_GET['post-id'];
foreach($data as $key => $post){
if($post['id'] == $postID): ?>

<div class="row">
	<div class="col-lg-8 main-content">
		<div class="card card-block">
	  		<h1><?php echo $post['post-title']; ?></h1>
	  		<p><?php echo $post['the-post']; ?></p>

			
	  		</p>
  		</div>
 	</div><!-- /main-content -->
 	<aside class="col-lg-4">
 		<?php require_once 'inc/widgets/opslagstavle_feed.php'; ?>
 	</aside>

</div>
<?php endif; } ?>