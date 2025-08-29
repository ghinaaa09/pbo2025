<?php

class Lingkaran {
    const PHI = 3.14;
    public float $jari_jari;

    // Constructor
    public function __construct(float $jari_jari) {
        $this->jari_jari = $jari_jari;
    }

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

    // Constructor
    public function __construct(float $jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung {
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    // Constructor
    public function __construct(float $jari_jari, float $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut {
    const PHI = 3.14;
    public float $jari_jari;
    public float $tinggi;

    // Constructor
    public function __construct(float $jari_jari, float $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat object dengan constructor

// Object nasi_tumpeng dari Kerucut
$nasi_tumpeng = new Kerucut(4, 10);
echo "Volume Nasi Tumpeng (Kerucut) = " . $nasi_tumpeng->volume() . " cm³\n";

// Object dari class Lingkaran
$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran = " . $lingkaran->luas() . " cm²\n";
echo "Keliling Lingkaran = " . $lingkaran->keliling() . " cm\n";

// Bola
$bola = new Bola(5);
echo "Volume Bola = " . $bola->volume() . " cm³\n";

// Tabung
$tabung = new Tabung(3, 10);
echo "Volume Tabung = " . $tabung->volume() . " cm³\n";

// Kerucut lain
$kerucut = new Kerucut(6, 12);
echo "Volume Kerucut = " . $kerucut->volume() . " cm³\n";