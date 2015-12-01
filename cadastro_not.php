<!DOCTYPE html>
<?php
include 'include/global.php';
include 'include/funcoes.php';
include 'template/header.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        ?>
    <center>
        <form method="post" enctype="multipart/form-data">
            Título:
            <br/><input type="text" name="titulo"/>
            <br/>
             Conteudo:
             <br/><textarea class="cont" type="text" name="corpo"></textarea>
            <br/>
             Imagem:
            <br/><input type="file" name="imagem"/>
            <br/>
            <input type="submit" name="enviar" value="Enviar"/>
        </form>
        </center>
        <?php
            salvar();
      
        ?>
    </body>
</html>
