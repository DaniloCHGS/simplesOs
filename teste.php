<?php
    include 'classes/bancodedados/dataBase.php';
    $dataBase = new DataBase();
    $linkBd = $dataBase->conexaoBd();
    $teste = $dataBase->pesquisa($linkBd);
?>