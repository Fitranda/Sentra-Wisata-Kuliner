<style>
    body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
}

form {
  max-width: 400px;
  margin: 40px auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

.kotak {
    max-width: auto;
  margin: 0 auto;
  margin-top: 20vh;
}

.label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

.input-field {
  position: relative;
  margin-bottom: 20px;
}

.form-control {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  font-size: 16px;
}

.form-control:focus {
  border-color: #aaa;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

.input-field i {
  position: absolute;
  top: 12px;
  right: 10px;
  font-size: 18px;
  color: #666;
}

.input-field i:hover {
  color: #333;
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
<?php 
  $data_SWK = $db->getITEM("select * from sentra where idsentra='".$_GET['id']."'");
  $kapasitas = $data_SWK['kapasitas_sentra'];
?>
<?php 
if (isset($_POST['TambahIdentitas'])) {
    $idsentra = $_POST['idsentra'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telephone'];
    $no_lapak = $_POST['no_lapak'];
    $iduser = $_SESSION['iduser'];

    $sql = "insert into identitas (
        `idsentra`,
        `iduser`,
        `Nama`,
        `no_lapak`,
        `telp`,
        `email`
      ) values('$idsentra','$iduser','$nama','$no_lapak','$telp','$email')";
    $db->runSQL($sql);
    header("location:index.php");
    $url = getBaseUrl();
    var_dump($url);die;
    echo "<script type='text/javascript'>window.location.href='$url';</script>";
}
?>
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
<div class="kotak">
    <h2>Identitas Lapak di <?=$data_SWK['nama_sentra']?></h2>
    <form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label for="nama" class="label">Nama Lapak :</label>
        <div class="input-field">
        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" />
        <input type="hidden" class="form-control" id="idsentra" placeholder="idsentra" name="idsentra" value="<?=$_GET['id']?>" />
        </div>
    </div>
    <div class="form-group">
        <label for="no_lapak" class="label">No Lapak:</label>
        <div class="input-field">
        <select id="no_lapak" name="no_lapak" class="custom-select select">
            <option value="">Pilih No Lapak</option>
            <?php for($i =1 ;$i <= $kapasitas; $i++) :?>
              <?php 
                 $no_lapak = $db->getALL("select * from identitas where idsentra='".$_GET['id']."' AND no_lapak='".$i."'");
                 if(empty($no_lapak)) :?>
                  <option value="<?=$i?>"><?=$i?></option>              
                 <?php endif;?>
            <?php endfor; ?>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="telephone" class="label">Telephone:</label>
        <div class="input-field">
        <input type="tel" class="form-control" id="telephone" placeholder="Telephone" name="telephone" />
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="label">Email:</label>
        <div class="input-field">
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" />
        </div>
    </div>
    <button class="btn btn-primary send-button" id="submit" type="submit" value="TambahIdentitas" name="TambahIdentitas">Tambah Identitas</button>
    </form>
</div>


