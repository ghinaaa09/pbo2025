<?php
require_once '../vendor/autoload.php';

use App\Akademik\Dosen;

$dosen1 = new Dosen(101, "Budi Hartono", "08123456789", "Jl. Cendrawasih No. 10", "198012345");

$dosen1->cekIn();

echo "<br>NIDN Dosen: " . $dosen1->getNidn();