<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\TenagaKependidikan;

$tendik1 = new TenagaKependidikan(
    301,
    "Siti Aminah",
    81345678901,
    "Jl. Pahlawan No. 25",
    5000000
);

$tendik1->cekIn();
echo "<br>";
$tendik1->cuti();

echo "<br>Gaji Pokok: Rp " . number_format($tendik1->getGajiPokok(), 0, ',', '.');