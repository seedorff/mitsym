<?php 
require_once 'config.php';
require_once 'inc/header.php'; 

if (file_exists($_GET['page'] . '.php') AND isset($_GET['page'])):
	require_once $_GET['page'] . '.php';
elseif (isset($_GET['post-id'])):

	require_once 'opslagstavlen/post.php';

elseif (isset($_GET['company-id'])):

	require_once 'company/single_company.php';

elseif (isset($_GET['search'])):

	require_once 'search.php';

else:
require_once 'frontpage.php'; 
endif;
require_once 'inc/footer.php' 
?>