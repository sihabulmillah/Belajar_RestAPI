<?php

$koneksi = mysqli_connect('localhost', 'sihab', 'password', 'db_ptbuana');
header('Content-Type:application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM produk";
    $query = mysqli_query($koneksi, $sql);
    $array_data = array();
    while ($data = mysqli_fetch_assoc($query)) {
        $array_data[] = $data;
    }

    echo json_encode($array_data);
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis_id = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $terjual = $_POST['terjual'];

    $sql = "INSERT INTO produk VALUES(NULL,$kode,$nama,$jenis_id,$harga,$stock,$terjual)";
    $query =  mysqli_query($koneksi, $sql);

    if ($query) {
        $data = [
            "status" => "Berhasil"
        ];
        echo json_encode($data);
    } else {
        $data = [
            "status" => "Gagal"
        ];
        echo json_encode($data);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

    $id = $_POST['id'];
    $sql = "DELETE FROM produk WHERE id = '$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        $data = [
            "status" => "Berhasil"
        ];
        echo json_encode($data);
    } else {
        $data = [
            "status" => "Gagal"
        ];
        echo json_encode($data);
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];
    $terjual = $_POST['terjual'];

    $sql = "UPDATE produk SET kode ='$kode',nama ='$nama',jenis_id = '$jenis',harga = '$harga',stock = '$stock',terjual = '$terjual' WHERE id = '$id' ";

    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        $data = [
            "status" => "Berhasil"
        ];
        echo json_encode($data);
    } else {
        $data = [
            "status" => "Gagal"
        ];
        echo json_encode($data);
    }
}
