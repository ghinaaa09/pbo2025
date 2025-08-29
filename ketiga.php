<?php

class Lingkaran {
    const PHI = 3.14;
    public function luas(float $jari_jari) : float {
        return self::PHI * $jari_jari * $jari_jari;
    }
    public function keliling(float $jari_jari) : float {
        return 2 * self::PHI * $jari_jari;
    }
}

class Bola {
    const PHI = 3.14;
    public function volume(float $jari_jari) : float {
        return (4/3) * self::PHI * pow($jari_jari, 3);
    }
}

class Tabung {
    const PHI = 3.14;
    public function volume(float $jari_jari, float $tinggi) : float {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

class Kerucut {
    const PHI = 3.14;
    public function volume(float $jari_jari, float $tinggi) : float {
        return (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

// Membuat objek dari class Kerucut
$nasi_tumpeng = new Kerucut();

// Hitung volume dengan jari-jari 4 cm dan tinggi 10 cm
echo "Volume Nasi Tumpeng = " . $nasi_tumpeng->volume(4, 10) . " cm³";
