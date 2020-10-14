<?php
    include('database/Admin.php');
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 ml-5">
            <h1>Daftar Berita</h1>
        </div>
    </div>
    <div class="row mb-3">
    

<?php
    $berita = new Admin();
    $data = $berita->tampilBerita();
    foreach ($data as $row) {
        if(strlen($row['judul']) > 30){
            $maxlength = 31; 
            $judul = substr($row['judul'],0,$maxlength);
            $judul .= "...";
        }
        else{
            $judul = $row['judul'];
        }
?>

        <div class="col-sm-6 col-md-4">
            <div class="card mt-2 ml-5 mr-5" style="width: 18rem;">
                <img class="card-img-top" style="width: 100%;height: 180px" 
                    src="gambar/<?= $row['gambar']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $judul; ?></h5>
                    <p class="card-text">By. <?= $row['username']; ?></p>
                    <a href="home_adm.php?p=edit_berita&&id=<?= $row['id_berita']; ?>" class="btn btn-primary">Edit</a>
                    <a href="process/admin/deleteBerita.php?id=<?= $row['id_berita']; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    
    <?php
        }
    ?>
    </div> <!-- PUNYA ROW -->
</div>