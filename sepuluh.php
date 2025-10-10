<?php
require_once 'vendor/autoload.php';

use Apps\Admin\HomePage;
use Apps\Admin\ManajemenArtikel;

$hp = new HomePage();
$hp->tampil();

$ma = new ManajemenArtikel();
$ma->tambah();