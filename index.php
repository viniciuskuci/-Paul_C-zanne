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
        <style type="text/css">
            *{
                margin: 0px;
                padding: 0px;
            }
            body{
                background: black;
                font-family: courier;
                overflow-x: hidden;
            }
            
            .menu{
          list-style:none; 
          border:2.5px solid #660000; 
          float:left; 
          width: 100%;
          background: #660000;
          position: absolute;
            }
            .menu li{
          position:relative; 
          float:left; 
          width: 24.8%;
          margin-left:2.5px ; 
          cursor:pointer;
          background: #666666;
          text-align: center;
          transition: ease-in-out 0.2s;
          color:black;
           
}
.menu li:hover{
          box-shadow:black 0.5px 0.5px 10px 2.5px;
          background:#333333;
    
}


.menu li a{
    position: relative;
          color:black;
          text-decoration:none;
          padding:8px 10px;
          display:block;
          transition: ease-in-out 0.1s;
            }
.menu li a:hover{
          color:white;
                
            }
            .logo{
                margin: 0px auto;
                transition: all;
                -moz-animation: logo 0.5s ;
                animation-fill-mode: both;
                   	
            }
            .im{
                float:none;
                margin-left: 40px;
              width: 200px;
                height: 200px;  
            }
               @-moz-keyframes logo {
    	0% {
                margin-left: 450px;
                                opacity:0;

    		
    	}
    	
    	100% {
            margin-left: 540px;
    	                   opacity:1;
 

    	}
    }
        
               @-webkit-keyframes logo {
    	0% {
                margin-left: 400px;
                opacity:0;
    		
    	}
    	
    	100% {
            margin-left:  500px;
    	   opacity:1;
         
    	}
    }   
    .sub{
        float: none;
        
        margin: 0px auto;
        transition: all;
                -moz-animation: sub 0.5s ;
                animation-fill-mode: both;
                animation-delay: 0.5s;
                
    }
    @-moz-keyframes sub {
    	0% {
                margin-left: 400px;
                opacity:0;
    		
    	}
    	
    	100% {
            margin-left:  500px;
    	   opacity:1;
         
    	}
    }   .sub{
        transition: all;
                -webkit-animation: sub 0.5s ;
                animation-fill-mode: both;
                animation-delay: 0.5s;
                
    }
    @-webkit-keyframes sub {
    	0% {
                margin-left: 500px;
                opacity:0;
    		
    	}
    	
    	100% {
            margin-left:  600px;
    	   opacity:1;
         
    	}
    }  
    .titulo_noticia{
        
        background: gray;
        color:white;
        width: 75%;
        margin: 0 auto;
        
    }
    th{ background: gray;height: 30px; 
    font-size:22px; color:black;}
    .conteudo_noticia{
        width: 75%;
        margin: 0 auto;
    }
    td{
        padding: 15px 15px;
        background: lightgray;height: 30px;
        font-size:18px; color:#333333;
        
    }
        </style>
    </head>
    <body><div class="logo">
        <img class="im" src="tordo.png"/>
        </div>
        <div style="font-family: courier; color:white; font-size:30px;" class="sub">O Tordo</div>
        <br/>
    <center>
        
        <ul class="menu">
            
            <li><a href="index.php" class="li">Início</a></li>
            <li><a href="obras.php"class="li">Junte-se a Rebelião</a></li>
            <li><a href="contato.php"class="li">Contato</a></li>
            <li><a href="sobre.php"class="li">Sobre</a></li>
            
        </ul>
        
        
        
    </center>
    <br/><br/><br/><br/>
    
    
    
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
                    <pre><?=$linha['corpo']; ?></pre>
                    <br/>
                    <div style="text-align: center;">
                    <img src="/imageLoader.php?id=<?= $linha['id']; ?>" style="width:400px;" />
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
