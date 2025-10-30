<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Database\DbConnector;
use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;
use App\Repository\PegawaiRepository;

// Lengkapi kode di bawah ini

// a. Buat object $pegawaiRepo
$pegawaiRepo = new PegawaiRepository();

/*
 * b & c. Buat object $dosen1
 * Kita gabungkan poin b dan c, panggil constructor Dosen dengan 6 argumen
 * (nip, nama, no_hp, alamat, nidn, jumlah_sks)
 * sesuai file Dosen.php Anda.
 */
$dosen1 = new Dosen(
    1234,                // nip (int, tanpa kutip)
    'Dr. Dian Prawira',  // nama
    '0851121212',        // no_hp
    'Jl. Veteran',       // alamat
    '234234',            // nidn
    18                   // jumlah_sks (langsung dimasukkan di sini)
);

/*
 * d. Buat object $tendik1
 * Pastikan gaji adalah integer (angka), tanpa tanda kutip atau titik.
 */
$tendik1 = new TenagaKependidikan(
    1235,                // nip (int, tanpa kutip)
    'Linia Dani',        // nama
    '0855121212',        // no_hp
    'Jl. Purnama Tanjung', // alamat
    7000000              // gaji (int, tanpa kutip, tanpa titik)
);

// e. dan f. Panggil simpanPegawai() untuk $dosen1
if ($pegawaiRepo->simpanPegawai($dosen1)) {
    echo "Data {$dosen1->nama} (Dosen) berhasil disimpan melalui Repository.\n";
} else {
    echo "Gagal menyimpan data {$dosen1->nama}. Cek log error.\n";
}

// g. Lakukan hal yang mirip untuk $tendik1
if ($pegawaiRepo->simpanPegawai($tendik1)) {
    echo "Data {$tendik1->nama} (Tendik) berhasil disimpan melalui Repository.\n";
} else {
    echo "Gagal menyimpan data {$tendik1->nama}. Cek log error.\n";
}