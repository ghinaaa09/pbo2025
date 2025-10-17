<?php

require_once '../vendor/autoload.php';

use App\Akademik\Dosen;
use App\Akademik\TenagaKependidikan;

$dosen1 = new Dosen(101, "Budi Hartono", "0812...", "Jl. Cendrawasih No. 10", "198012345");
$tendik1 = new TenagaKependidikan(201, "Ani Suryani", "0815...", "Jl. Merpati No. 5", 5000000);

$tunjanganDosen = $dosen1->hitungTunjanganKinerja();
$tunjanganTendik = $tendik1->hitungTunjanganKinerja();

echo "<h2>Perhitungan Tunjangan Kinerja</h2>";
echo "Tunjangan Kinerja untuk Dosen ({$dosen1->nama}): Rp " . number_format($tunjanganDosen, 0, ',', '.') . "<br>";
echo "Tunjangan Kinerja untuk Tenaga Kependidikan ({$tendik1->nama}): Rp " . number_format($tunjanganTendik, 0, ',', '.') . "<br>";

echo "<hr>";

$tendik1->ajukanCuti(5);