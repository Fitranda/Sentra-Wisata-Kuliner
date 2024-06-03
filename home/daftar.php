<style>
    body {
	font-family: Arial, sans-serif;
	background-color: #f0f0f0;
}

.container {
	width: 50%;
	margin: 40px auto;
	padding: 20px;
	background-color: #fff;
	border: 1px solid #ddd;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
	margin-top: 0;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="tel"], input[type="password"] {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
}

select {
	width: 100%;
	padding: 10px;
	margin-bottom: 20px;
	border: 1px solid #ccc;
}

input[type="submit"] {
	background-color: #4CAF50;
	color: #fff;
	padding: 10px 20px;
	border: none;
	border-radius: 5px;
	cursor: pointer;
}

input[type="submit"]:hover {
	background-color: #3e8e41;
}
</style>
<div class="container">
    <h2>Form Pendaftaran</h2>
    <form method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat"><br><br>
        
        <label for="role">Role:</label>
        <select id="role" name="role">
            <option value="">Pilih Role</option>
            <option value="2">Penjual</option>
            <option value="3">Pembeli</option>
        </select><br><br>
        
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="telp">Telp:</label>
        <input type="tel" id="telp" name="telp"><br><br>
        
        <input type="submit" name="daftar" value="Daftar">
    </form>
</div>
<?php 
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $role = $_POST['role'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $telp = $_POST['telp'];

        $db->runSQL("insert into user (`Nama`,
        `Alamat`,
        `Role`,
        `Username`,
        `Password`,
        `email`,
        `telp`) values ('$nama','$alamat','$role','$username','$password','$email','$telp')");

        // $_SESSION['email']=$email;
        // $_SESSION['Role']=$role;
        // $_SESSION['iduser']=$row['iduser'];

        header("location:index.php");
        $url = getBaseUrl();
        echo "<script type='text/javascript'>window.location.href='$url';</script>";
    }
?>

