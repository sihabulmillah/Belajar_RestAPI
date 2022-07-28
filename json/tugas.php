<?php
header('Content-Type:application/json');

$mahasantri = [
    "data" => array(
        [
            "username" => "ujang",
            "age" => 23,
            "hobby" => ["coding", "eat", "sleep"]
        ],
        [
            "username" => "ucok",
            "age" => 20,
            "hobby" => ["coding", "eat", "sleep"]
        ]
    )
];

echo json_encode($mahasantri, JSON_PRETTY_PRINT);
