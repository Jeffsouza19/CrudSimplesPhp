<?php

include 'contatos.php';

$contato = new Contato();
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $info = $contato->getInfo($id);
}
?>

<h1>Editar</h1>

<form action="editar_submit.php" method="POST">
    Nome: <br>
    <input type="text" name="nome" value="<?php echo $info['nome']; ?>"><br><br>
    Email: <br>
    <input type="email" value="<?php echo $info['email']; ?>" disabled><br><br>
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    <input type="submit" value="Salvar">
</form>