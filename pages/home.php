
<?php

	require ('database/Berita.php');

	$berita = new Berita();
	$data = $berita->tampilBerita();

?>

<style>
    .container-box {
        position: relative;
        text-align: center;
        color: white; 
    }

    /* Bottom left text */
    .bottom-left {
        position: absolute;
        bottom: 4px;
        left: 4px;
        background: rgba(0, 128, 128, 0.5);
    }

    /* Bottom right text */
    .bottom-right {
        position: absolute;
        bottom: 4px;
        right: 4px;
        background: rgba(0, 128, 128, 0.5);
    }

    /* Centered text */
    .top-left {
        position: absolute;
        top: 8px;
        left: 16px;
    }
    .b-0 {
    bottom: 0;
    }
    .bg-shadow {
        background: rgba(76, 76, 76, 0);
        background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
        background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0 );
    }
    .top-indicator {
        right: 0;
        top: 1rem;
        bottom: inherit;
        left: inherit;
        margin-right: 1rem;
    }
    .overflow {
        position: relative;
        overflow: hidden;
    }
    .zoom img {
        transition: all 0.2s linear;
    }
    .zoom:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-sm-5 mt-3">
            <h1 style="color: grey;font-family: 'poppins';margin-left: 10px">Recent News</h1>
        </div>
    </div>
    <div class="row mb-5">
    
        <?php
            foreach ($data as $row) {
            
            $sqlDate = $row['tanggal'];
            $phpdate = strtotime($sqlDate);
            $format = date("j M Y", $phpdate);

            if(strlen($row['judul']) > 40){
                $maxlength = 41; 
                $judul = substr($row['judul'],0,$maxlength);
                $judul .= "...";
            }
            else{
                $judul = $row['judul'];
            }
        ?>

        <div class="col-sm-4 mt-3">
            <div class="card border-0 rounded-0 text-white overflow zoom">
                <div class="position-relative">
                    <!--thumbnail img-->
                    <div class="ratio_right-cover-2 image-wrapper">
                        <a href="index.php?p=baca_berita&&id=<?= $row['id_berita']; ?>">
                            <img class="img-fluid"
                                    src="gambar/<?= $row['gambar']; ?>"
                                    alt="bootstrap templates for blog">
                        </a>
                    </div>
                    <div class="position-absolute p-2 p-lg-3 b-0 w-100 bg-shadow">
                        <!-- category -->
                        <a class="p-1 badge badge-primary rounded-0" href="index.php?p=kategori&&id=<?= $row['id_kat']; ?>"><?= $row['nama_kat']; ?></a>
                        <!--title-->
                        <a style="text-decoration: none" href="index.php?p=baca_berita&&id=<?= $row['id_berita']; ?>">
                            <h2 class="h5 text-white my-1"><?= $judul; ?></h2>
                        </a>
                    </div>
                </div>
            </div>   
        </div>

        <?php
            }
        ?>

    </div> <!-- ROW ml-5 -->

<!-- Container -->
</div>