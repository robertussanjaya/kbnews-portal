<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Kalbis News</title>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/dist/css/style.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body class="d-flex flex-column min-vh-100 wrapper flex-grow-1" style="padding:0px; ">

    <?php 
        require ("database/Kategori.php");

        $kat = new Kategori();
        $data = $kat->tampilKat();
          if(!isset($_SESSION['role'])):
    ?>
    <!-- BELUM LOGIN -->
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php" style="text-decoration: none;" class="pt-2">
      <h3 class="text-white mr-4">KB News</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <h7>Home</h7>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h7>Kategori</h7>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              foreach ($data as $row) {
            ?>
              <a class="dropdown-item" href="index.php?p=kategori&&id=<?= $row['id_kat']; ?>">
                <?= $row['nama_kat']; ?>
              </a>
            <?php
              }
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=login">
            <h7>Sign In</h7>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- JIKA SUDAH LOGIN -->
  <?php
      else:
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php" style="text-decoration: none;" class="pt-2">
      <h3 class="text-white mr-4">KB News</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <h7>Home</h7>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <h7>Kategori</h7>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              foreach ($data as $row) {
            ?>
              <a class="dropdown-item" href="index.php?p=kategori&&id=<?= $row['id_kat']; ?>">
                <?= $row['nama_kat']; ?>
              </a>
            <?php
              }
            ?>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="process/logout.php">
            <h7>Sign Out</h7>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?p=profile&&id=<?= $_SESSION['user_id']; ?>">
            <h7>Hi, <?= $_SESSION['username']; ?></h7>
          </a>
        </li>
      </ul>
    </div>
  </nav>  

  <?php
    endif;
  ?>

         