<?php
	session_start();
	
 	require 'templates/head.php';
?>

<?php
	if(!isset($_GET['p'])){
   		$page = "home";
	}
	else{
	    $page = $_GET['p'];
	}
	
	require 'pages/' . $page . '.php';

?>

<?php 
  require 'templates/foot.php';
?>


