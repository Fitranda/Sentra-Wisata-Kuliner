<style>
    .full {
    width: 80%;
    max-width: auto;
    margin: 0 auto;
    margin-top: 20vh;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.lt {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
    height: 40px;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
}

.send-button {
    width: 100%;
    height: 40px;
    padding: 10px;
    font-size: 16px;
    background-color: #337ab7;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.send-button:hover {
    background-color: #23527c;
}
</style>
<nav class="navbar navbar-expand-sm navbar-dark position-fixed" style="background-color: #EFEFEF; color: #4773B8; z-index: 200; top: 0; left: 0; right: 0; ">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="assets/logo.svg" style="height: 40px;" alt="logo">
            <p class="mb-0 main-text">Sentra Wisata Kuliner</p>
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active align-self-center">
                    <a class="nav-link main-text" href="#">Sentra <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item align-self-center d-flex align-items-center ml-4">
                    <img src="assets/icons/indonesia.svg" style="height: 20px;" alt="" srcset="">
                    <a class="nav-link main-text" href="#">ID</a>
                </li>

                <button class="btn btn-logout ml-4">Logout</button>

            
            </ul>
        
        </div>
</nav>

    <div class="full">
            <center><h3>Tambah Sentra</h3></center>
            <div class="lt">
                <form class="form-horizontal" method="post" action="" enctype='multipart/form-data'>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="kelurahan" placeholder="Kelurahan" name="kelurahan" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="luas" placeholder="Luas" name="luas" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="kapasitas" placeholder="Kapasitas" name="kapasitas" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="biaya" placeholder="Biaya" name="biaya" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="file" class="form-control" id="gambar" placeholder="Gambar" name="gambar" value="" />
                        </div>
                    </div>
                    <button class="btn btn-primary send-button" id="submit" type="submit" value="TambahSentra" name="TambahSentra">Tambah Sentra</button>
                </form>
            </div>
        </div>

<?php 
if (isset($_POST['TambahSentra'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $luas = $_POST['luas'];
    $kapasitas = $_POST['kapasitas'];
    $biaya = $_POST['biaya'];
    $gambar = $_FILES['gambar']['name'];
    $temp_file = $_FILES['gambar']['tmp_name'];
    $target_dir = "assets/img/";
    $target_file = $target_dir . basename($gambar);

    // Check if the target directory exists, if not, create it
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($temp_file, $target_file)) {
        echo "File berhasil dipindahkan ke $target_file";
    } else {
        echo "Error: " . error_get_last()['message'];
    }
    $sql = "insert into sentra (
        `nama_sentra`,
        `alamat_sentra`,
        `kec_sentra`,
        `kel_sentra`,
        `luas_sentra`,
        `kapasitas_sentra`,
        `jml_pelaku_sentra`,
        `biaya_operasional_sentra`,
        `gambar`
      ) values('$nama','$alamat','$kecamatan','$kelurahan','$luas','$kapasitas',0,'$biaya','$gambar')";
    $db->runSQL($sql);
    header("location:index.php");
    $url = getBaseUrl();
    echo "<script type='text/javascript'>window.location.href='$url';</script>";
}
?>