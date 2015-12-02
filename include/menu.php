<!DOCTYPE html>
<?php

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
          height: 40px; 
          float:left; 
          width: 100%;
          background: #660000;
          position: absolute;
            }
            .menu li{
          position:relative; 
          float:left; 
          display: block;
          margin-left:1px;
          width: 24.9%;
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
                position:relative;
                float:top;
                width: 200px;
                height: 200px;
                display: block;
                margin-left: auto;
                 margin-right: auto;
                transition: all;
                -moz-animation: logo 1s ;
                -webkit-animation: logo 1s ;
                animation-fill-mode: both;
            }
            .im{
          position:relative;
          float:top;
          margin: 0px;
          width: 200px;
          height: 200px;  
            }
               @-moz-keyframes logo {
    	 0% {
                 filter: blur(50px) contrast(50);
                                 opacity:0;
 }
    	100% {
              opacity:1;
  }
     }
     @-webkit-keyframes logo {
    	0% {
                filter: blur(50px) contrast(50);
                                 opacity:0;
    	}
    	100% {
           opacity:1;
        }
    }   
    .sub{
        float: none;
        position:relative;
        display: block;
        margin: 0px auto;
        transition: all;
                -moz-animation: sub 0.5s ;
                -webkit-animation: sub 0.5s ;
                animation-fill-mode: both;
                animation-delay: 0.5s;
                
    }
    @-moz-keyframes sub {
    	0% {
                margin-left:45% ;
                filter: blur(5px) contrast(25);
                opacity:0;
    	}
    	100% {
            margin-left:50% ;
             opacity:1;
        }
    }   
                
    
    @-webkit-keyframes sub {
    	0% {
                 left:45% ;
                filter: blur(5px) contrast(25);
                opacity:0;
    	}
    	100% {
            left:50% ;
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
            <li><a href="join.php"class="li">Junte-se a Rebelião</a></li>
            <li><a href="jv.php"class="li">Jogos Vorazes</a></li>
            <li><a href="sobre.php"class="li">Sobre Nós</a></li>
         </ul>
     </center>
    <br/><br/><br/><br/>
