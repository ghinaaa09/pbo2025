<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Akademik\Dekan;

$dekan1 = new Dekan(
    201,
    "Prof. Dr. Retno Wulandari",
    81298765432,
    "Jl. Merdeka No. 1",
    19751110
);

$dekan1->cekIn();

echo "<br>NIDN Dekan: " . $dekan1->getNidn();

echo "<br>";
$dekan1->mengesahkanSuratIjinMagang();