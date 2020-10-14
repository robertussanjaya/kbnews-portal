<?php
	session_start();
?>

<?php
	if($_SESSION['role'] == 'contributor'):
?>

<?php
 	require 'templates/header.php';
?>

<?php
  if(!isset($_GET['p'])){
    $page = "berita";
}
  else{
    $page = $_GET['p'];
}
require 'pages/contributor/' . $page . '.php';

?>

<?php 
  require 'templates/footer.php';
?>

<?php
	else:
		header('Location:index.php');

?>

<?php endif; ?>


