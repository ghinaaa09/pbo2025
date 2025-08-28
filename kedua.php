<?php

function kelilingLingkaran(float $jari) : float {
    return 2 * M_PI * $jari;
}

function volumeBola(float $jari) : float {
    return (4/3) * M_PI * $jari * $jari * $jari;
}

function volumeKerucut(float $jari, float $tinggi) : float {
    return (1/3) * M_PI * $jari * $jari * $tinggi;
}

function volumeTabung(float $jari, float $tinggi) : float {
    return M_PI * $jari * $jari * $tinggi;
}

$jari = 7;
$tinggi = 10;

echo "Keliling Lingkaran : " . kelilingLingkaran($jari) . "\n";
echo "Volume Bola : " . volumeBola($jari) . "\n";
echo "Volume Kerucut : " . volumeKerucut($jari, $tinggi) . "\n";
echo "Volume Tabung : " . volumeTabung($jari, $tinggi) . "\n";
