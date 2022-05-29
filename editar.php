<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Vaga;

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    header('Location: index.php');
}

$obVaga = Vaga::getVaga($_GET['id']);

if (!$obVaga instanceof Vaga) {
    header('Location: index.php');
}

// echo '<pre>';
// print_r($obVaga);
// echo '<pre>';


if (isset($_POST['titulo'], $_POST['descricao'], $_POST['ativo'])) {
    $objeto = new Vaga;
    $objeto->id = $_GET['id'];
    $objeto->titulo = $_POST['titulo'];
    $objeto->descricao = $_POST['descricao'];
    $objeto->status = $_POST['ativo'];
    $objeto->data = date('Y-m-d H:i:s');
    $objeto->atualizar();
    header("Location: editar.php");
    // echo "<pre>";
    // print_r($objeto);
    // echo "<pre>";
}




include_once __DIR__ . "/includes/_header.php";
include_once __DIR__ . "/includes/_formulario.php";
include_once __DIR__ . "/includes/_footer.php";
