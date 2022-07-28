<?php
require_once 'nusoap.php';
//melukaukan inisiasi dari class nusoap

$client = new nusoap_client('http://localhost/Belajar-PHP/JWD/rest-api/SOAP/server.php?wsdl');

//melakukan pengecekan lagi
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $response = $client->call('get_price', [
        'name' => $nama
    ]);

    //melakukan pengcekan jika berhasil dan gagal
    if (empty($response)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'product tidak di temukan '
        ]);
    } else {
        header("Content-type:application/json");
        echo json_encode([
            "status" => 'berhasil',
            "message" => 'product berhasil ditampilkan',
            "stock" => $response
        ]);
    }
}
