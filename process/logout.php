<?php

	session_start();

	$_SESSION['username'] = null;
	$_SESSION['user_id'] = null;
	$_SESSION['role'] = null;

	header('location:../index.php');