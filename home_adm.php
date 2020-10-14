<?php
	session_start();
?>

<?php
	if($_SESSION['role'] == 'admin'):
?>

<?php
 	require 'templates/header.php';
?>

<?php
  if(!isset($_GET['p'])){
    $page = "kategori";
}
  else{
    $page = $_GET['p'];
}
require 'pages/admin/' . $page . '.php';

?>

<?php 
  require 'templates/footer.php';
?>

<?php
	else:
		header('Location:index.php');

?>

<?php endif; ?>


