<?php
    session_start();
    require_once "DB.php";
    $db = new DB;
    $query  = "Select * from user";
    $row = $db->getALL($query);

    function getBaseUrl() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!= 'off' || $_SERVER['SERVER_PORT'] == 443)? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'];
        return $protocol. $domainName;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWK | Sentra Wisata Kuliner Sidoarjo</title>
    <link rel="shortcut icon" href="assets/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div>
        <?php 
            if (isset($_GET['f']) && isset($_GET['m'])) {
                $f=$_GET['f'];
                $m=$_GET['m'];

                $file = $f.'/'.$m.'.php';

                require_once $file;
            }else {
                if(isset($_SESSION['Role'])){
                    if ($_SESSION['Role'] == 1) {
                        require_once "home/admin.php";
                    }else if($_SESSION['Role'] == 2){
                        require_once "home/penjual.php";
                    }else {
                        require_once "home/home.php";
                    }
                }else{
                    require_once "home/home.php";
                }
            }
        ?>
    </div>
    
    

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.menuToggle').click(function(){
                $('.menu').toggleClass('menu-show')
            })
        })
    </script>
</body>
</html>