<?php
// header('Content-Type:application/json');
// $nilai_ujian = [80, 70, 90, 60, 100];

// $mahasantri = [
//     'nama' => 'ujang',
//     'domisili' => 'Bandung'
// ];
// echo json_encode($nilai_ujian, JSON_PRETTY_PRINT);
// echo json_encode($mahasantri, JSON_PRETTY_PRINT);

// $array = array(
//     "0" => array(
//         "username" => "ujang",
//         "age" => 23
//     ),
//     "1" => array(
//         "username" => "ucok",
//         "age" => 20
//     )
// );

// echo json_encode(array('data' => $array));

//parsing json ke array

// $dataJson = "[5,4,3,5,4,2,2,1]";
// $data = json_decode($dataJson, true);

// echo implode(" - ", $data);

//parsing json ke object

// $json = '{
//     "nama": "ucok",
//     "domisili":"Medan",
//     "usia": 23
// }';

// $mahasantri = json_decode($json);
// echo "Nama: $mahasantri->nama <br>";
// echo "Domisili: $mahasantri->domisili <br>";

//Perulangan JSON
$listMahasantriJSON = '[
    {"nama" : "Ujang"},
    {"nama" : "Ucup"},
    {"nama" : "Ucok"},
    {"nama" : "Usro"},
    {"nama" : "Udin"}
]';

$listMahasantri = json_decode($listMahasantriJSON);

foreach ($listMahasantri as $key => $mahasantri) {
    echo "{$key}. Nama: {$mahasantri->nama} <br>";
}
