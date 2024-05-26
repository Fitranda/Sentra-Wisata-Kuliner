<?php
    require_once "DB.php";
    $db = new DB;
    $query  = "Select * from user";
    $row = $db->getALL($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentra Wisata Kuliner</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
</body>
</html>