<?php
    include '../bancodedados/dataBase.php';
    $dataBase = new DataBase();
    $linkBd = $dataBase->conexaoBd();
    $usuario = array($_POST['email'], $_POST['senha']);
    $dataBase->validador($usuario[0], $usuario[1], $linkBd);
?>