<?php

include 'contatos.php';

$contato = new Contato();

?>

<h1>Contatos</h1>

<a href="adicionar.php">[ ADICIONAR ]</a><br><br>
<table border="1" width="800">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
    <?php
    $lista = $contato->getAll();
    foreach ($lista as $each) {
    ?>
        <tr>
            <td><?php echo $each['id']; ?></td>
            <td><?php echo $each['nome']; ?></td>
            <td><?php echo $each['email']; ?></td>
            <td>
                <a href="editar.php?id=<?php echo $each['id']; ?>">[ EDITAR ]</a>
                <a href="excluir.php?id=<?php echo $each['id']; ?>">[ EXCLUIR ]</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>