<!DOCTYPE html>
<?php
include 'include/global.php';
include 'include/funcoes.php';
include 'template/header.php';
include 'include/menu.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    <center>
        <?php
        $SQL = "SELECT * FROM noticia;";
    $preparo = conexao()->prepare($SQL);
    $preparo->execute();
    while ($linha  = $preparo->fetch(PDO::FETCH_ASSOC)){
        ?>
        <br/>
    <table class="titulo_noticia">
        <th ><?=$linha['titulo']?></font></th>
            <table class="conteudo_noticia">
                <td>
                    <div><?=$linha['corpo']; ?></div>
                    <br/>
                    <div style="text-align: center;">
                        <?php
                        if(!empty($linha['imagem'])){
                          ?>  
                        <img src="/imageLoader.php?id=<?= $linha['id']; ?>" style="width:400px;" />
                        <?php
                        }
                        ?>
                    
                    </div>
                </td>
            </table>
        </table>
        
    </center>
        <?php
    }
        ?>
            
    </body>
</html>
