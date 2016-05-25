<?php 
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);

$postID = $_GET['post-id'];
foreach($data as $key => $post){
if($post['id'] == $postID): ?>

<div class="row post-single">
	<article class="col-lg-8 main-content">
		<div class="card card-block">
			<header class="row post-heading text-muted">
				<div class="col-xs-8"> 
			    	<?php echo $post['author']; ?><i class="fa fa-caret-right"></i><span class="posted-in"><?php echo $post['posted-in']; ?></span>   
			    </div>
			    <div class="col-xs-4 post-date">
			    	<i class="fa fa-clock-o"></i><?php echo $post['post-date']; ?>			    	
			    </div>
			</header>
	  		<h1><?php echo $post['post-title']; ?></h1>
	  		<p><?php echo $post['the-post']; ?></p>
	  		<footer class="row">
	  			<div class="col-xs-3 col-md-2 no-gutter-right">
	  				<img class="author-img img-fluid" src="<?php echo $post['author-img']; ?>" alt="<?php echo $post['author']; ?>" />
	  			</div>
	  			<div class="col-xs-9 col-md-10 post-meta">
	  				<h4 class="author"><?php echo $post['author']; ?></h4>
	  				<div class="company"><?php echo $post['author-company']; ?></div>
					<a href="mailto:<?php echo $post['author-email']; ?>"><?php echo $post['author-email']; ?></a>
	  			</div>
	  		</footer>
  		</div>
 	</article><!-- /main-content -->
 	<aside class="col-lg-4 sidebar">
 		<?php require_once 'inc/widgets/opslagstavle_feed.php'; ?>
 	</aside>

</div>
<?php endif; } ?>

