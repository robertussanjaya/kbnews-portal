<?php
    require('database/Kategori.php');
    require('database/Berita.php');

    $berita = new Berita();
    $baris = $berita->tampilBerita_ById($_GET['id']);

?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="form-area ml-4">  
                <form class="" role="form" action="process/contributor/editBerita_pros.php" method="post" enctype="multipart/form-data">
                <br style="clear:both">
                    <h1 style="margin-bottom: 25px;">Edit Berita</h1>

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="judul" placeholder="Judul Berita" value="<?= $baris['judul']; ?>" required>
                    </div>

                    <div class="form-group">
                        <select name="kategori" class="form-control">
                            <option value="<?= $baris['id_kat']; ?>"><?= $baris['nama_kat']; ?></option>
                                <?php

                                    $kat = new Kategori();
                                    $data = $kat->tampilKat();
                                    foreach ($data as $row) {

                                ?>
                            <option value="<?= $row['id_kat']; ?>">
                                    <?= $row['nama_kat']; ?>
                            </option>

                            <?php
                                }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <img style="width: 550px; height: 300px;" src="gambar/<?= $baris['gambar']; ?>">
                        <input type="hidden" name="gambarlama" value="<?= $baris['gambar']; ?>">
                        <input type="file" name="gambar" class="mt-2">
                    </div>

                    <textarea id="textarea" name="isi"><?= $baris['isi']; ?></textarea>

                    <div class="form-group">
                    <input type="submit" value="Update Berita" class="btn btn-success mt-3">
                    </div>

                    <input type="hidden" name="id_berita" value="<?= $baris['id_berita']; ?>">
                    <input type="hidden" name="id_user" value="<?= $baris['id_user']; ?>">
                    <input type="hidden" name="tanggal" value="<?= $baris['tanggal']; ?>">

                        
                </form>
            </div>
        </div>
    </div>
</div>

