<?php

class Lingkaran {
    const PHI = 3.14;
    public float $jari_jari;

    public function luas() : float {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola {
    const PHI = 3.14;
    public float $jari_jari;

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung {
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut {
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Object nasi_tumpeng dari Kerucut
$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari = 4;
$nasi_tumpeng->tinggi = 10;
echo "Volume Nasi Tumpeng (Kerucut) = " . $nasi_tumpeng->volume() . " cm³\n";

// Object dari class Lingkaran
$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 7;
echo "Luas Lingkaran = " . $lingkaran->luas() . " cm²\n";
echo "Keliling Lingkaran = " . $lingkaran->keliling() . " cm\n";

// Implementasi Bola, Tabung, Kerucut

// Bola
$bola = new Bola();
$bola->jari_jari = 5;
echo "Volume Bola = " . $bola->volume() . " cm³\n";

// Tabung
$tabung = new Tabung();
$tabung->jari_jari = 3;
$tabung->tinggi = 10;
echo "Volume Tabung = " . $tabung->volume() . " cm³\n";

// Kerucut lain
$kerucut = new Kerucut();
$kerucut->jari_jari = 6;
$kerucut->tinggi = 12;
echo "Volume Kerucut = " . $kerucut->volume() . " cm³\n";