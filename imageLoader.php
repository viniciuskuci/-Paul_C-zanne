<?php
include './include/global.php';
if(isset($_GET['id'])){
    $SQL = "SELECT * FROM noticia WHERE id = :id;";
    $preparo = conexao()->prepare($SQL);
    $preparo->bindValue(":id", $_GET['id']);
    $preparo->execute();
    while ($linha  = $preparo->fetch(PDO::FETCH_ASSOC)){
        header('Content-type: image/jpeg');
        echo $linha['imagem'];
    }
}
