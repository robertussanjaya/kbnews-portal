<?php
	require ('database/Berita.php');


	$berita = new Berita();
	$row = $berita->tampilBerita_ById($_GET['id']);

    $sqlDate = $row['tanggal'];
    $phpdate = strtotime($sqlDate);
    $format = date("j F Y - H:i", $phpdate);
            
?>

<div class="container">
    <div class="row mt-3 justify-content-center">
        <div class="col-sm-10">
            <h6><?= $format; ?> WIB</h3>
        </div>
        <div class="col-sm-10">
            <h2><?= $row['judul']; ?></h2>
        </div>
        <div class="col-sm-10">
            <h4>Penulis : <?= $row['username']; ?></h4>
        </div>
        <div class="col-sm-10">
            <img src="gambar/<?= $row['gambar'];?>" style="width: 100%">
        </div>
        <div class="col-sm-10">
            <p style="text-align: justify;"><br><?= $row['isi']; ?> </p> <br><br>
        </div>
        <div class="col-sm-10">
            <h5>Comment Section</h5>


            <?php
                $komen = $berita->tampilKomen($_GET['id']);

                foreach ($komen as $data) {
                    if(isset($_SESSION['username']) && $_SESSION['username'] == $data['username']):
            ?>

            <div style="border-style: dotted; border-radius: 10px; padding: 5px 5px 5px 5px;
                        height: 110px; margin-top: 5px">
                <p style="font-weight: bold;font-size: 20px">

                    <?php
                        $image = $data['foto'];
                        if($image == ""){
                            $image = "default.jpg";
                            // return $image;
                        }
                        else{
                            $image = $data['foto'];
                            // return $image;
                        }
                    ?>

                    <img style="border-radius: 100%; width: 25px;height: 25px;" src="gambar/<?= $image; ?>"> &nbsp; 
                    <?= $data['username']; ?>
                    <span style="margin-left: 10px"> 
                        <a href="index.php?p=editKomen&&id=<?= $_GET['id']; ?>&&id_komen=<?= $data['id_komen']; ?>&&id_user=<?= $_SESSION['user_id']; ?>" class="btn-success" style="padding: 3px;border-radius: 3px">Edit</a>
                        <a href="process/deleteKomen.php?id=<?= $data['id_komen']; ?>&&page=<?= $_GET['id']; ?>" class="btn-success" style="padding: 3px;border-radius: 3px">Delete</a>
                    </span>
                </p>
                <p style="font-style: italic;">"<?= $data['isi_komen']; ?>"</p>
                
                <br><br>
            </div>


            <?php
                elseif (!isset($_SESSION['username'])):
                
            ?>

            <div style="border-style: dotted; border-radius: 10px; padding: 5px 5px 5px 5px;
                        height: 110px; margin-top: 5px">
                <p style="font-weight: bold;font-size: 20px">

                    <?php
                        $image = $data['foto'];
                        if($image == ""){
                            $image = "default.jpg";
                            // return $image;
                        }
                        // else{
                        //     $image = $data['foto'];
                        //     return $image;
                        // }
                    ?>

                    <img style="border-radius: 100%; width: 25px;height: 25px;" src="gambar/<?= $image; ?>"> &nbsp; 
                    <?= $data['username']; ?>
                </p>
                <p style="font-style: italic;">"<?= $data['isi_komen']; ?>"</p>
                <br><br>
            </div>


            <?php
            endif;
            }
            ?>

            <?php

                if(!isset($_SESSION['user_id'])):

            ?>

            <h3>Ingin Berkomentar ? <a href="index.php?p=login">Login</a></h3> <br><br>


            <?php
                else:
            ?>

            <br>

            <form role="form" action="process/tambahKomen_pros.php" method="post">
                <div class="form-group">
                    <textarea class="form-control" type="textarea" name="komen" id="message" placeholder="Tulis Komentar Anda.." maxlength="120" rows="5"></textarea>
                </div>

                <div class="form-group">
                <input type="submit" value="Tambah Komentar" class="btn btn-success">
                <input type="hidden" value="<?= $_SESSION['user_id']; ?>" name="id_user">
                <input type="hidden" value="<?= $_GET['id']; ?>" name="id_berita">
                </div>
            </form>

            <?php
                endif;
            ?>
        </div>
    </div>
</div>