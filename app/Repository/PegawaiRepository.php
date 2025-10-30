<?php

namespace App\Repository;

use App\Akademik\Dosen;
use App\Akademik\Pegawai;
use App\Akademik\TenagaKependidikan;
use App\Database\DbConnector;
use PDO;
use PDOException;

class PegawaiRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = DbConnector::connect();
    }

    public function simpanPegawai(Pegawai $pegawai): bool
    {
        $tipe = $pegawai instanceof Dosen ? 'Dosen' : 'Tendik';

        try {
            $this->db->beginTransaction();

            $sql_pegawai = "INSERT INTO pegawai (nip, nama, no_hp, alamat, tipe_pegawai)
                            VALUES (:nip, :nama, :no_hp, :alamat, :tipe)";
            $stmt_pegawai = $this->db->prepare($sql_pegawai);
            $stmt_pegawai->execute([
                ':nip'      => $pegawai->nip,
                ':nama'     => $pegawai->nama,
                ':no_hp'    => $pegawai->getNoHp(),
                ':alamat'   => $pegawai->alamat,
                ':tipe'     => $tipe
            ]);

            if ($tipe === 'Dosen') {
                $sql_anak = "INSERT INTO dosen (nip, nidn, jumlah_sks)
                             VALUES (:nip, :nidn, :sks)";
                $stmt_anak = $this->db->prepare($sql_anak);
                $stmt_anak->execute([
                    ':nip'  => $pegawai->nip,
                    ':nidn' => $pegawai->getNidn(),
                    ':sks'  => $pegawai->jumlah_sks
                ]);
            } elseif ($tipe === 'Tendik') {
                $sql_anak = "INSERT INTO tendik (nip, gaji_pokok)
                             VALUES (:nip, :gaji)";
                $stmt_anak = $this->db->prepare($sql_anak);
                $stmt_anak->execute([
                    ':nip'  => $pegawai->nip,
                    ':gaji' => $pegawai->gaji_pokok
                ]);
            }

            $this->db->commit();
            return true;
        } catch (PDOException $e) {
            $this->db->rollBack();
            error_log("Gagal menyimpan pegawai: " . $e->getMessage());
            return false;
        }
    }

    public function ambilSemuaDosen(): array
    {
        $sql = "SELECT p.nip, p.nama, p.no_hp, p.alamat, d.nidn, d.jumlah_sks
                FROM pegawai p
                INNER JOIN dosen d ON p.nip = d.nip";

        $stmt = $this->db->query($sql);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $dosenList = [];

        foreach ($results as $row) {
            $dosenObj = new Dosen(
                (int)$row['nip'],
                $row['nama'],
                $row['no_hp'],
                $row['alamat'],
                $row['nidn'],
                (int)$row['jumlah_sks']
            );
            $dosenList[] = $dosenObj;
        }

        return $dosenList;
    }
}