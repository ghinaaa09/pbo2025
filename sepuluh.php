<?php

require_once 'Apps/Admin/HomePage.php';
require_once 'Apps/Admin/ManajemenArtikel.php';

use Apps\Admin\HomePage;
use Apps\Admin\ManajemenArtikel;

$hp = new HomePage();
$hp->tampil();

$ma = new ManajemenArtikel();
$ma->tambah();
