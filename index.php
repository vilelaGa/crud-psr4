<?php

require __DIR__ . "/vendor/autoload.php";

use App\Entity\Vaga;

$vagas = Vaga::getVagas();
// echo "<pre>";
// print_r($vagas);
// echo "<pre>";
include_once __DIR__ . "/includes/_header.php";
include_once __DIR__ . "/includes/_listagem.php";
include_once __DIR__ . "/includes/_footer.php";
