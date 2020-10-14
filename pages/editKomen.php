<?php
	require ('database/Berita.php');


	$berita = new Berita();
	$row = $berita->tampilBerita_ById($_GET['id']);


?>

<link rel="stylesheet" type="text/css" href="vendor/bootstrap/dist/css/style.css">

<div style="margin: auto;margin-top: 40px; width:780px;">

	<?php	
        $sqlDate = $row['tanggal'];
        $phpdate = strtotime($sqlDate);
        $format = date("j F Y - H:i", $phpdate);
                
    ?>

    <h6><?= $format; ?> WIB</h3>

    <h2><?= $row['judul']; ?></h2>

    <h4>Penulis : <?= $row['username']; ?></h4>

    <img style="width: 780px" src="gambar/<?= $row['gambar'];?>">

    <p style="text-align: justify;"><br><?= $row['isi']; ?> </p> <br><br>

    <h5>Edit Comment</h5>

    <?php

       $data = $berita->tampilKomen_Id($_GET['id_komen']); 

    ?>

    <br>

    <form role="form" action="process/editKomen_pros.php" method="post">
        <div class="form-group">
            <textarea class="form-control" type="textarea" name="isi_komen" id="message" maxlength="120" rows="5"><?= $data['isi_komen']; ?></textarea>
        </div>

        <div class="form-group">
           <input type="submit" value="Edit Komentar" class="btn btn-success">
           <input type="hidden" value="<?= $_GET['id_user']; ?>" name="id_user">
           <input type="hidden" value="<?= $_GET['id']; ?>" name="id_berita">
           <input type="hidden" value="<?= $_GET['id_komen']; ?>" name="id_komen">
        </div>
    </form>


    

</div> <!-- Bungkus -->





