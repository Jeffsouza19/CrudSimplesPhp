<?php

include 'contatos.php';

$contato = new Contato();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    // echo $id;
    $contato->deletar($id);
}

header("Location: index.php");
