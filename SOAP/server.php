<?php
require_once "nusoap.php";

function get_price($name)
{
    $product = [
        'buku' => 17,
        'pensil' => 18,
        'penghapus' => 13
    ];


    foreach ($product as $stock => $value) {
        if ($stock == $name) {
            return $value;
            break;
        }
    }
}
//melakukan inisialisasi server
$server = new nusoap_server();
$server->configureWSDL('Server', 'urn:server');
$server->register(
    //register nama method terlebih dahulu
    'get_price', //register parameter
    ['name' => 'xsd:string'],
    ['return' => 'xsd:integer']
);

$server->service(file_get_contents("php://input"));
