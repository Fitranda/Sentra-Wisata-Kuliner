<?php 
    session_destroy();
    header("location:index.php");
    $url = getBaseUrl();
    echo "<script type='text/javascript'>window.location.href='$url';</script>";
?>