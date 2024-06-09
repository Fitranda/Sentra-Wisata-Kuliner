<style>
    .btn-logout{
        /* background: #; */
        border: red 1px solid;
        border-radius: 0;
        color: #4773B8!important;
        padding: 5px 20px;
        transition: .3s;
    }

    .btn-logout:hover{
        background: red;
        /* border: #4773B8 1px solid; */
        border-radius: 0;
        color: white!important;
        padding: 5px 20px;
    }

    .card {
  /* max-width: 300px; */
  margin: 0 20px;
  margin-top: 5vh;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 12px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  /* display: inline-block; */
}
.kotak {
    max-width: auto;
  margin: 0 auto;
  margin-top: 20vh;
}

h2 {
    text-align: center;
}

.card-image {
  width: 100%;
  height: 214px;
  border-radius: 12px 12px 0 0;
  object-fit: cover;
}

.card-content {
  padding: 20px;
}

.card-name {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 10px;
}

.card-address,.card-capacity,.card-operators,.card-operational-cost {
  font-size: 16px;
  margin-bottom: 10px;
}

.pilih-button {
  background-color: green !important;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease-in-out;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin: 10px 0;
}

.table th, .table td {
  border: 1px solid #ddd;
  padding: 10px;
  text-align: left;
}

.table th {
  background-color: #f0f0f0;
}

.table-striped tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

.table-bordered {
  border: 1px solid #ddd;
}

.table-bordered th, .table-bordered td {
  border: 1px solid #ddd;
}

.add-button:hover {
  background-color: #3e8e41;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.add-button:active {
  background-color: #3e8e41;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  transform: translateY(2px);
}

.add-button {
  background-color: #4CAF50;
  margin-left: 20px;
  color: #fff;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  transition: all 0.3s ease-in-out;
}
</style>
<?php 
    $identitas = $db->getITEM("select * from identitas where iduser ='".$_SESSION['iduser']."'");
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
    <?php if(!empty($identitas)) :?>
        <?php 
            $menu = $db->getALL("select * from menu where ididentitas ='".$identitas['ididentitas']."'");
            $kategori = $db->getALL("select * from kategori");
            $kategori = array_column($kategori, 'kategori', 'idkategori');
        ?>
        <div class="kotak">
            <h2>Menu</h2>
            <button class="add-button" value="<?=$identitas['ididentitas']?>">Tambah</button>
            <table id="table-id" class="table table-striped table-bordered">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Action</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    if (!empty($menu)) :
                    foreach ($menu as $key => $value) :?>
                        <tr>
                            <td><?=$key+1?></td>
                            <td>
                                <button class="btn btn-success edit" value="<?= $value ['idmenu']?>" href="<?=getBaseUrl().'?f=penjual&m=ubahMenu&idmenu='.$value['idmenu']?>">Ubah</button>
                                <button class="btn btn-danger hapus" value="<?= $value ['idmenu']?>" href="<?=getBaseUrl().'?f=penjual&m=hapusMenu&idmenu='.$value['idmenu']?>">Hapus</button>
                            </td>
                            <td><?=$kategori[$value['idkategori']]?></td>
                            <td><img style="width: 200px;" src="assets/img/<?= $value['gambar']?>" alt="" srcset=""></td>
                            <td><?=$value['menu']?></td>
                            <td>Rp. <?=number_format($value['harga'],0,",",".")?></td>
                            <td><?=$value['deskripsi']?></td>
                        </tr>
                    <?php 
                    endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    <?php else :?>
        <div class="kotak">
            <h2>Sentra</h2>
            <div class="kotak-card d-flex justify-content-center flex-wrap">
                <?php 
                $data_SWK = $db->getALL("select * from sentra");
                foreach ($data_SWK as $key => $value):?>
                    <div class="card">
                        <img src="assets/img/<?php echo $value['gambar']?>" alt="Gambar" class="card-image">
                        <div class="card-content">
                            <h2 class="card-name"><?=$value['nama_sentra']?></h2>
                            <p class="card-address"><?=$value['alamat_sentra']?></p>
                            <p class="card-capacity">Luas: <?=number_format($value['luas_sentra'],0,",",".")?> M<sup>2</sup></p>
                            <p class="card-capacity">Kapasitas: <?=$value['kapasitas_sentra']?> orang</p>
                            <p class="card-operators">Jumlah Pelaku: <?=$value['jml_pelaku_sentra']?> orang</p>
                            <p class="card-operational-cost">Biaya Operasional: Rp <?=number_format($value['biaya_operasional_sentra'],0,",",".")?></p>
                            <br>
                            <button value="<?=$value['idsentra']?>" id="pilih_<?=$value['idsentra']?>" class="pilih-button">Pilih</button>
                        </div>
                    </div>
                <?php 
                endforeach;
                ?>
            </div>

         </div>
    <?php endif?>

<script type="text/javascript">
    $('.btn-logout').on('click', function() {
    window.location.href = '?f=home&m=logout';
    });

    $('.add-button').on('click', function() {
      window.location.href = '?f=penjual&m=tambahMenu&id='+$(this).attr('value');
    });

    $('.edit').on('click', function() {
      window.location.href = '?f=penjual&m=ubahMenu&idmenu='+$(this).attr('value');
    });

    $('.hapus').on('click', function() {
        event.preventDefault();
        var value = $(this).attr('value');
        // console.log(value,"safa");
        $.ajax({
          type: 'POST',
          url: '?f=penjual&m=hapusMenu', // replace with your PHP script URL
          data: {id: value},
          success: function(data) {
            alert('Data berhasil dihapus');
            location.reload();
          },
          error: function(xhr, status, error) {
            alert('Error submitting form: ' + error);
          }
        });
      // window.location.href = '?f=penjual&m=ubahMenu&idmenu='+$(this).attr('value');
    });
</script>