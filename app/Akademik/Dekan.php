<?php

namespace App\Akademik;

class Dekan extends Dosen
{
    public function mengesahkanSuratIjinMagang(): void
    {
        echo "Magang anda telah disetujui";
    }
}