<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM usuario");

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<h1>Listagem de usuários</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id_usuario'];?></td>
            <td><?=$usuario['nm_usuario'];?></td>
            <td><?=$usuario['ds_email'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id_usuario'];?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id_usuario'];?>">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<a href="cadastrar.php">Cadastrar usuário</a>