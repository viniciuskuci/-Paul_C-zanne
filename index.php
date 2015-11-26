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
            }
            
            .menu{
          list-style:none; 
          
          border:2px solid #660000; 
          float:left; 
          width: 99.8%;
          background: #660000;
            }
            .menu li{
          position:relative; 
          float:left; 
          width: 338px;
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
                width: 150px;
                height: 150px;
                transition: all;
                -moz-animation: logo 0.5s ;
                animation-fill-mode: both;
                   	
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
        .logo{
                width: 300px;
                height: 300px;
                transition: all;
                -webkit-animation: logo 0.5s ;
                animation-fill-mode: both;
                 	
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
        transition: all;
                -moz-animation: sub 0.5s ;
                animation-fill-mode: both;
                animation-delay: 0.5s;
                
    }
    @-moz-keyframes sub {
    	0% {
                margin-left: 500px;
                opacity:0;
    		
    	}
    	
    	100% {
            margin-left:  600px;
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
        </style>
    </head>
    <body>
        <img class="logo" src="tordo.png"/>
        <div style="font-family: courier; color:white; font-size:30px;" class="sub">O Tordo</div>
        <br/>
    <center>
        
        <ul class="menu">
            
            <li><a href="index.php" class="li">Início</a></li>
            <li><a href="obras.php"class="li">Junte-se a Rebelião</a></li>
            <li><a href="contato.php"class="li">Contato</a></li>
            <li><a href="sobre.php"class="li">Sobre</a></li>
            
        </ul>
        <table class="conteudo">
            <th></th>
        </table>
    </center>
        <?php
        ?>
    </body>
</html>
