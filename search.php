
<div class="row">
	<div class="col-lg-8 main-content">
		<div class="card card-block">
	  		<h1>Søgeresultater for "<?php echo $_GET['search']; ?>"</h1>
			<h2>Virksomheder</h2>
			<ul class="no-style-list">		
	  		<?php 
	  		$url="inc/feeds/virksomheder.json";
	  		$json=file_get_contents($url);
	  		$data=json_decode($json,true);

	  		$companyName = $_GET['search'];
	  		foreach($data as $key => $company){
	  		if(stristr($company['company'],$companyName)): ?>
	  		<li><a href="<?php echo $site_url; ?>/?company-id=<?php echo $company['id']; ?>"><?php echo $company['company']; ?></a></li>
	  		<?php endif; } ?>
	  		</ul>
  		</div>
 	</div><!-- /main-content -->
 	<aside class="col-lg-4">
 		
 	</aside>

</div>