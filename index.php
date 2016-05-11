<?php 
require_once 'config.php';
require_once 'inc/header.php'; 

if (file_exists($_GET['page'] . '.php') AND isset($_GET['page'])):
	require_once $_GET['page'] . '.php';

else:
require_once 'frontpage.php'; 
endif;
require_once 'inc/footer.php' 
?>