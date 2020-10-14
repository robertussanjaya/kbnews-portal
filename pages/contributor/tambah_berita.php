<?php
    require('database/Kategori.php');

?>

<div class="container">
<div class="col-md-8">
    <div class="form-area ml-4">  
        <form class="" role="form" action="process/contributor/tambahBerita_pros.php" method="post" enctype="multipart/form-data">
        <br style="clear:both">
                    <h1 style="margin-bottom: 25px;">Tambah Berita</h1>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="judul" placeholder="Judul Berita" required>
					</div>

                    <div class="form-group">
                        <select name="kategori" class="form-control">
                            <option value="">- Pilih Kategori Berita -</option>
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
						Upload Foto :  <input type="file" name="gambar"  required="">
					</div>

                    <textarea id="textarea" name="isi"></textarea>

                    <div class="form-group mt-3">
                    <input type="submit" value="Tambah Berita" class="btn btn-success">
                    </div>
            
        </form>
    </div>
</div>
</div>

