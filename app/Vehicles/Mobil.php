<?php
class Mobil {
    public $warna;
    public $merk;
    public $tahun_produksi;

    public function klakson() : void {
        echo "Telolet telotet";
    }

    public function getWarnaMerah() : string {
        return "merah";
    }
}

$mobil_dian = new Mobil();
$mobil_dian->warna = 'hijau';

// pemanggilan method klakson yang benar
$mobil_dian->klakson();

$mobil_dian->tahun_produksi = 2025;

// tampilkan hasil 2027 dengan memanfaatkan atribut tahun_produksi
echo "\n";
echo $mobil_dian->tahun_produksi + 2;
