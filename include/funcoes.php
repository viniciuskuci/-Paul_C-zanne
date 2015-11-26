<?php
if(file_exists("global.php")){
include './global.php';
}
else if(file_exists("include/global.php")){
    include_once './include/global.php';
}
function salvar(){
    if(
            
        isset($_POST['titulo']) and    
        isset($_POST['corpo']) 
            ){
        $titulo = $_POST['titulo'];
        $corpo = $_POST['corpo']; 
        $img = (isset($_POST['img']) ? $_POST['img'] : "");
        
        $SQL = "INSERT INTO `noticias`(`titulo`, `corpo`, `imagem`)VALUES (:titulo,:corpo,:img)";
        $preparo = conexao()->prepare($SQL);
        $preparo->bindValue("titulo", $titulo);
        $preparo->bindValue("corpo", $corpo);
        $preparo->bindValue("imagem", $img);
        $preparo->execute();
        if($preparo->rowCount()== 1){
            echo"Sucesso!";
            
        }
        else{
            echo"Falha ao registrar!";
        }
           
            }
}

function listar(){
    $SQL = "SELECT * FROM noticias;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    //while ($linha  = $preparo->fetch(PDO::FETCH_ASSOC)){
        
   // }
    
}
