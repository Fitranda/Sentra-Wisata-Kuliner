<?php 
    $db = new DB;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idmenu = $_POST['id'];
        // process the data
        $db->runSQL("delete from menu where idmenu = '$idmenu'");
        echo json_encode(['code' => 200, 'pesan' =>'data berhadsil diubah']);
    } else {
        echo json_encode(['code' => 404, 'pesan' => 'Invalid request']);
    }
?>