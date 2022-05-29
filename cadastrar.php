<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Vaga;


if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $objeto = new Vaga;
    $objeto->titulo = $_POST['titulo'];
    $objeto->descricao = $_POST['descricao'];
    $objeto->status = $_POST['ativo'];
    $objeto->cadastrar();
    header("Location: cadastrar.php");
    // echo "<pre>";
    // print_r($objeto);
    // echo "<pre>";
}




include_once __DIR__ . "/includes/_header.php";
include_once __DIR__ . "/includes/_formulario.php";
include_once __DIR__ . "/includes/_footer.php";
