
<style>
    .login-form {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 300px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
  background-color: #fff;
  z-index: 1; /* add this to ensure the form is on top of other elements */
}

.login-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.login-form label {
  display: block;
  margin-bottom: 5px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

.login-form button[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.login-form button[type="submit"]:hover {
  background-color: #3e8e41;
}

/* body {
    background-image: url("../assets/img/background.jpeg");
    background-size: cover;
} */
</style>
<div class="login-form">
  <h2>Login</h2>
  <form action="" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" required name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" required name="password">
    <br>
    <button name="login" value="login" type="submit">Login</button>
  </form>
</div>

<?php 
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE Username='$username' AND Password='$password'";

    $count = $db->rowCount($sql);

    if ($count==0) {
        echo "<center><h3>Email atau Password salah</h3></center>";
    }else {
        $sql = "SELECT * FROM `user` WHERE Username='$username' AND Password='$password'";
        $row=$db->getITEM($sql);

        $_SESSION['email']=$row['Email'];
        $_SESSION['Role']=$row['Role'];
        $_SESSION['iduser']=$row['iduser'];


        header("location:index.php");
    }
    
}
?>