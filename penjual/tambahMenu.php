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

#preview {
  max-width: 25%;
  height: auto;
  margin: 10px auto;
}

.select-wrapper {
  position: relative;
  display: inline-block;
  width: 100%;
}

.select-wrapper select {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  font-size: 16px;
  cursor: pointer;
}

.select-wrapper select:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.select-wrapper::after {
  content: "\f0d7";
  font-family: "Font Awesome 5 Free";
  font-weight: 900;
  position: absolute;
  top: 12px;
  right: 10px;
  font-size: 18px;
  color: #666;
  pointer-events: none;
}

.select-wrapper:hover::after {
  color: #333;
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
                    <a class="nav-link main-text" href="<?= getBaseUrl().'?f=home&m=penjual'?>">Menu <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item align-self-center">
                    <a class="nav-link main-text" href="#">Penjualan</a>
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
            <center><h3>Tambah Menu</h3></center>
            <div class="lt">
                <form class="form-horizontal" method="post" action="" enctype='multipart/form-data'>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="kategori" class="label">Kategori:</label>
                            <select id="kategori" name="kategori" class="custom-select select">
                                <option value="">Pilih Kategori</option>
                                <?php 
                                    $kategori = $db->getALL("select * from kategori");
                                    if(!empty($kategori)) :?>
                                    <?php foreach($kategori as $k => $v) :?>
                                    <option value="<?=$v['idkategori']?>"><?=$v['kategori']?></option>  
                                    <?php endforeach; ?>            
                                    <?php endif;?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="menu" class="label">Menu:</label>
                            <input type="text" class="form-control" id="menu" placeholder="Menu" name="menu" value="" />
                            <input type="hidden" class="form-control" id="ididentitas" placeholder="ididentitas" name="ididentitas" value="<?=$_GET['id']?>" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="harga" class="label">Harga:</label>
                            <input type="number" class="form-control" id="harga" placeholder="Harga" name="harga" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="deskripsi" class="label">Deskripsi:</label>
                            <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi" value="" />
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-sm-12">
                            <img id="preview" src="" alt="Preview" />
                            <input type="file" class="form-control" id="gambar" placeholder="Gambar" name="gambar" value="" />
                        </div>
                    </div>
                    <button class="btn btn-primary send-button" id="submit" type="submit" value="TambahMenu" name="TambahMenu">Tambah Menu</button>
                </form>
            </div>
        </div>

        <script>
            const gambarInput = document.getElementById('gambar');
            const previewImage = document.getElementById('preview');

            gambarInput.addEventListener('change', () => {
            const file = gambarInput.files[0];
            const reader = new FileReader();

            reader.onload = (event) => {
                previewImage.src = event.target.result;
            };

            reader.readAsDataURL(file);
            });
        </script>

<?php 
if (isset($_POST['TambahMenu'])) {
    $kategori = $_POST['kategori'];
    $ididentitas = $_POST['ididentitas'];
    $menu = $_POST['menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
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
    $sql = "insert into menu (
        `ididentitas`,
        `idkategori`,
        `menu`,
        `harga`,
        `deskripsi`,
        `gambar`
      ) values('$ididentitas','$kategori','$menu','$harga','$deskripsi','$gambar')";
    $db->runSQL($sql);
    header("location:index.php");
    $url = getBaseUrl();
    echo "<script type='text/javascript'>window.location.href='$url';</script>";
}
?>