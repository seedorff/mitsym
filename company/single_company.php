<?php 
$url="inc/feeds/virksomheder.json";
$json=file_get_contents($url);
$data=json_decode($json,true);

$companyID = $_GET['company-id'];
foreach($data as $key => $company){
if($company['id'] == $companyID): ?>

<div class="row company-single">
	<article class="col-lg-8 main-content">
		<div class="card card-block">

	  		<h1><?php echo $company['company']; ?></h1>
	  		<div class="title-meta">Indflyttet<i class="fa fa-caret-right text-muted"></i><?php echo $company['move-in-date']; ?><i class="fa fa-home text-muted"></i><?php echo $company['location']; ?></div>

	  		<h2>CVR</h2>
	  		<p><?php echo $company['cvr']; ?></p>

	  		<h2>Telefon</h2>
	  		<p><?php echo $company['phone']; ?></p>

	  		<h2>E-mail</h2>
	  		<p><a href="mailto:<?php echo $company['email']; ?>"><?php echo $company['email']; ?></a></p>

	  		<h2>Webside</h2>
	  		<p><a href="<?php echo $company['website']; ?>"><?php echo $company['website']; ?></a></p>

	  		<h2>Virksomhedsbeskrivelse</h2>
	  		<p><?php echo $company['description']; ?></p>

	  		<h2>Virksomhedsbeskrivelse (engelsk)</h2>
	  		<h2>Ansatte</h2>
	  		
	  		<ul class="no-style-list">
	  			<?php foreach($company['employees'] as $key => $employer){ ?>
	  			<li><?php echo $employer['name']; ?></li>
	  			<?php } ?>
	  		</ul>
  		</div>
 	</article><!-- /main-content -->
 	<aside class="col-lg-4 sidebar">
 		<?php require_once 'inc/widgets/nyevirksomheder.php'; ?>
 	</aside>

</div>
<?php endif; } ?>
