<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnector;
use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

$pegawaiRepo = new PegawaiRepository();

if (isset($_POST)) {
    $dosen1 = new Dosen(
        rand(1, 1000),
        $_POST['nama'],
        $_POST['no_hp'],
        $_POST['alamat'],
        $_POST['nidn']
    );

    if ($pegawaiRepo->simpanPegawai($dosen1)) {
        echo json_encode(['response' => "Data {$dosen1->nama} (Dosen) berhasil disimpan melalui Repository"]);
    } else {
        echo json_encode(['response'=>"Gagal menyimpan data {$dosen1->nama}. Cek log error"]);
    }
} else {
    echo json_encode(['response'=>"Gagal koneksi"]);
}