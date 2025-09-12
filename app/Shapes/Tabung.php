<?php

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