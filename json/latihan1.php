<?php
// $mahasiswa = [
//     [
//         "nama" => "sihab",
//         "umur" => 20,
//         "email" => "sihabulmillah0103@gmail.com"
//     ], [
//         "nama" => "sihab",
//         "umur" => 20,
//         "email" => "sihabulmillah0103@gmail.com"
//     ]
// ];

// $dbh = new PDO('mysql:host=localhost;dbname=db_ptbuana', 'sihab', 'password');
// $db = $dbh->prepare('SELECT * FROM produk');
// $db->execute();
// $produk = $db->fetchAll(PDO::FETCH_ASSOC);

// $data = json_encode($produk);
// echo $data;
// $json = '{
// "nama": "Ucok",
// "domisili": "Medan",
// "usia": 23
// }';
// $mahasantri = json_decode($json);
// echo "Nama: {$mahasantri->nama} <br>";
// echo "Domisili: {$mahasantri->domisili} <br>";

// $listMahasantriJSON = '[
// { "nama": "Ujang" },
// { "nama": "Ucup" },
// { "nama": "Ucok" },
// { "nama": "Usro" },
// { "nama": "Udin" }
// ]';
// $listMahasantri = json_decode($listMahasantriJSON);
// foreach ($listMahasantri as $key => $mahasantri) {
// echo "{$key}. Nama: {$mahasantri->nama} <br>";
// }

$myObj = '{
  "nama" : "Ujang",
  "umur" : 25,
  "kendaraan" : [
    {"nama" : "Mobil", "model" : ["Mobilio", "Ertiga", "Avanza"]},
    {"nama" : "Motor", "model" : ["RX King", "Mio", "NMax"]},
    {"nama" : "Sepeda", "model" : ["BMX", "Federal"] }
  ]
}';

$people = json_decode($myObj);
echo "nama : {$people->nama} <br>"; 
echo "umur : {$people->umur} <br>";
foreach($people->kendaraan as $transportasi){
echo "kendaraan : {$transportasi->nama} <br>";
foreach($transportasi->model as $model){
echo "model : {$model} <br>";
}
}