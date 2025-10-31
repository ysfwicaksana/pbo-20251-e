<?php

//panggil file LuasLingkaran
require_once('./LuasLingkaran.php');

//panggil namespace LuasLingkaran
use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(16);
// $lingkaran->jari = 16; //assign propery jari
$lingkaran->tampil('roda'); //panggil method

LuasLingkaran::testing();