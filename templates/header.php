<?php

  if(!isset($_SESSION)){
    session_start();
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Kalbis News</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <script src="tinymce/tinymce.min.js" ></script>
    <script>
    tinymce.init({
      selector :'#textarea'
    });
    </script>
  </head>

  <body>
  <?php 
          if($_SESSION['role'] == 'admin'):
  ?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a href="" class="text-dark" style="pointer-events: none;">
      <h4>KB News</h4>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-5">
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=kategori">
            <span data-feather="home"></span>
            <h6>Kategori</h6>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=berita">
            <span data-feather="layers"></span>
            <h6>Berita</h6>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=admin">
            <span data-feather="users"></span>
            <h6>List Admin</h6>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=contributor">
            <span data-feather="users"></span>
            <h6>List Contributor</h6>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=user">
            <span data-feather="users"></span>
            <h6>List User</h6>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home_adm.php?p=komentar">
            <span data-feather="users"></span>
            <h6>Komentar Berita</h6>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="process/logout.php">
          <span data-feather="layers"></span>
          <h6>Sign Out</h6>
        </a>
      </li>
      </ul>
  </div>
</nav>

<?php 
  elseif($_SESSION['role'] == 'contributor'):
?>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="" class="text-dark" style="pointer-events: none;">
        <h4>KB News</h4>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-5">
          <li class="nav-item">
            <a class="nav-link" href="home_contri.php?p=berita">
              <span data-feather="layers"></span>
              <h6>Berita</h6>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="process/logout.php">
              <span data-feather="layers"></span>
              <h6>Sign Out</h6>
            </a>
          </li>
        </ul>
    </div>
  </nav>

<?php endif; ?>

<body>
         