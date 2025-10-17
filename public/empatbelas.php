<?php

require_once '../vendor/autoload.php';

use App\Akademik\Pegawai;

$pegawai = new Pegawai(100, "Pegawai Abstrak", "08111234", "Jl. Antah Berantah");
$pegawai->cekIn();