<?php

namespace App\Akademik;

// TenagaKependidikan adalah Pegawai, dan juga memenuhi kontrak PenilaianKinerja
class TenagaKependidikan extends Pegawai implements PenilaianKinerja
{
    public int $gaji_pokok;


    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, int $gaji_pokok)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }


    // Implementasi dari abstract method bekerja()
    public function bekerja(): void
    {
        echo $this->nama . " sedang mengurus administrasi akademik.<br>";
    }


    // Implementasi dari interface PenilaianKinerja
    public function hitungTunjanganKinerja(): int
    {
        // Contoh logika: tunjangan sebesar 20% dari gaji pokok
        return $this->gaji_pokok * 0.2;
    }


    public function cuti(): void
    {
        echo $this->nama . " sedang mengambil cuti.<br>";
    }
}
