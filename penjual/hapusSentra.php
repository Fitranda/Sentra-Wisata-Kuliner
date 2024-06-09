<?php 
    $db = new DB;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idsentra = $_POST['id'];
        // process the data
        $db->runSQL("delete from sentra where idsentra = '$idsentra'");
        echo json_encode(['code' => 200, 'pesan' =>'data berhadsil diubah']);
    } else {
        echo json_encode(['code' => 404, 'pesan' => 'Invalid request']);
    }
?>