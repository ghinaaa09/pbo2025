<?php
header('Content-Type: application/json');
require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnector;
use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

// Buat object repository
$pegawaiRepo = new PegawaiRepository();

if (isset($_POST) && !empty($_POST)) {
    // 1. Validasi minimal
    if (!isset($_POST['nama'], $_POST['no_hp'], $_POST['alamat'], $_POST['gaji'])) {
        http_response_code(400); // Bad Request
        echo json_encode(['response' => "Input data tidak lengkap (nama, no_hp, alamat, gaji wajib diisi)."]);
        exit;
    }

    // 2. Buat objek Tenaga Kependidikan, mengambil NIP secara acak
    $tendik = new TenagaKependidikan(
        rand(1001, 9999), // NIP acak untuk menghindari konflik dengan 1234/1235
        $_POST['nama'],
        $_POST['no_hp'],
        $_POST['alamat'],
        (int)$_POST['gaji'] // Gaji harus di-cast ke integer
    );

    // 3. Simpan objek melalui Repository
    if ($pegawaiRepo->simpanPegawai($tendik)) {
        echo json_encode([
            'response' => "Data {$tendik->nama} (Tenaga Kependidikan) berhasil disimpan melalui Repository",
            'nip' => $tendik->nip
        ]);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(['response' => "Gagal menyimpan data {$tendik->nama}. Cek log error server."]);
    }
} else {
    // Jika tidak ada data POST
    http_response_code(405); // Method Not Allowed
    echo json_encode(['response' => "Gagal koneksi. Harap kirim data menggunakan metode POST."]);
}