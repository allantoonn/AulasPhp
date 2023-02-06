<?php 
 function getInfo($atributo){
$dados = array("titulo"=>"siteModelo","descricao"=>"Programando com PHP");
return $dados[$atributo]; 

}

function getUsuarios(){
    return $dados = [
    ["nome"=>"Allan", "email"=>"allanfernandesti@gmail.com"],
    ["nome"=>"joao", "email"=>"joao@gmail.com"],
    ["nome"=>"pedro", "email"=>"pedro@gmail.com"],
    ["nome"=>"maria", "email"=>"maria@gmail.com"]
    ];
    
}

function exibeUsuarios(){
    $usuarios = getUsuarios();
    $html = "";
    for($y = 0; $y< count($usuarios); $y++ ){
      $nome = $usuarios[$y]['nome'];
      $email = $usuarios[$y]['email'];
      $html .= "<li> Nome: $nome - Email $email</li>";  
    }

    echo   $html;
}

?>
<html>
    <head>
        <title>getInfo("titulo")</title>
    </head>
    <body>
        <h2> <?php echo getInfo("descricao")?></h2>
        <h2> <?php echo getInfo("titulo")?></h2>
        <ul>
            <?php
             exibeUsuarios();
            ?>
        </ul>
    </body>
    </html>