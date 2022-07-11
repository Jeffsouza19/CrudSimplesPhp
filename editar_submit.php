<?php

include 'contatos.php';

$contato = new Contato();

if ($_POST['id']) {
    $editContato = $contato->editar($_POST['nome'], $_POST['id']);
}

header("Location: index.php");
