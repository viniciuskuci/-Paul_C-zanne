<?php
if(file_exists("global.php")){
include './global.php';
}
else if(file_exists("include/global.php")){
    include_once './include/global.php';
}
function salvar(){
     
    if(isset($_POST['titulo']) and    
        isset($_POST['corpo']) 
            ){
        $titulo = $_POST['titulo'];
        $corpo = $_POST['corpo']; 
        $imagem = (isset($_FILES['imagem']) ? file_get_contents($_FILES['imagem']['tmp_name']) : "");
        
        $SQL = "INSERT INTO `noticia`(`titulo`, `corpo`, `imagem`)VALUES (:titulo,:corpo,:imagem)";
        $preparo = conexao()->prepare($SQL);
        $preparo->bindValue("titulo", $titulo);
        $preparo->bindValue("corpo", $corpo);
        $preparo->bindValue("imagem", $imagem);
        $preparo->execute();
        
        if($preparo->rowCount()== 1){
            echo"Sucesso!";
         }
        else{
            echo"Falha ao registrar!";
        } }}

function listar(){
    $SQL = "SELECT * FROM noticias;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while ($linha  = $preparo->fetch(PDO::FETCH_ASSOC)){
       echo "<table class='titulo_noticia'>";
        echo"<th>".$linha['titulo']."</font></th>";
            echo "<table class='conteudo_noticia'>";
                echo"<td>".$linha['titulo'];$linha['imagem']."</td>";
            echo"</table>";
        
   }
    
}
