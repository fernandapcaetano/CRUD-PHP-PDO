<?php
require 'config.php';

$usuario = [];
//pegando id da url
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuario WHERE id_usuario = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("Location: index.php");
        exit;
    }
}else{
    header("Location: index.php");
}

?>

<h1>Editar usuário</h1>
<form action="editar_action.php" method="post">
    
    <input type="hidden" name="id" value="<?=$usuario['id_usuario'];?>">

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?=$usuario['nm_usuario'];?>">
    <br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?=$usuario['ds_email'];?>">
    <br>

    <button type="submit">Editar</button>

</form>