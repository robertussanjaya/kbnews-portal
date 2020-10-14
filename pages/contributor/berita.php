<?php
    include('database/Contributor.php');
    $id = $_SESSION['user_id'];
?>

<div class="container">
    <div class="row">
        <div class="col-sm-5 mt-3 ml-5">
            <h1>Dashboard Berita</h1>
            <a class="btn btn-primary" href="home_contri.php?p=tambah_berita">Tambah Berita</a>
        </div>
    </div>
    <div class="row mb-3">

        <?php
            $berita = new Contributor();
            $data = $berita->tampilBerita($id);
            foreach($data as $row) {

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
            <div class="card mt-2 ml-5 mr-5 mb-5" style="width: 18rem;">
                <img class="card-img-top" style="width: 100%;height: 180px" 
                    src="gambar/<?= $row['gambar']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?= $judul; ?></h5>
                    <p class="card-text">By. <?= $row['username']; ?></p>
                    <a href="home_contri.php?p=edit_berita&&id=<?= $row['id_berita']; ?>" class="btn btn-primary">Edit</a>
                    <a href="process/contributor/deleteBerita.php?id=<?= $row['id_berita']; ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    
    <?php
        }
    ?>
    </div> <!-- PUNYA ROW -->
</div>
    
