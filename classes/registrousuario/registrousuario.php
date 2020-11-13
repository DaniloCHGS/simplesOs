<?php
    include '../bancodedados/dataBase.php';
    $dataBase = new DataBase();
    $usuario = array($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['nivelSistema']);
    $linkBd = $dataBase->conexaoBd();
    $dataBase->insertUser($usuario[0], $usuario[1], $usuario[2], $usuario[3], $linkBd);
?>