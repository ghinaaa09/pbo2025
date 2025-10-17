<?php


require_once 'Pegawai.php';
require_once 'PenilaianKinerja.php';


// Dosen adalah Pegawai, dan juga memenuhi kontrak PenilaianKinerja
class Dosen extends Pegawai implements PenilaianKinerja
{
    private int $nidn;
    private int $jumlah_sks;


    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, string $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
        $this->jumlah_sks = 24; // default
    }


    // Implementasi dari abstract method bekerja()
    public function bekerja(): void
    {
        echo $this->nama . " sedang mengajar dan membimbing mahasiswa.<br>";
    }


    // Implementasi dari interface PenilaianKinerja
    public function hitungTunjanganKinerja(): int
    {
        // Contoh logika: tunjangan berdasarkan SKS mengajar
        return $this->jumlah_sks * 150000;
    }
}