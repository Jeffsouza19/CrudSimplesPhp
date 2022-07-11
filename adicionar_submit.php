<?php

include 'contatos.php';

$contato = new Contato();

if ($_POST['email']) {
    $newContato = $contato->adicionar($_POST['email'], $_POST['nome']);
}

header("Location: index.php");
