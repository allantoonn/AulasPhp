<?php 
 function getInfo($atributo){
$dados = array("titulo"=>"siteModelo","descricao"=>"Programando com PHP");
return $dados[$atributo]; 

}

?>
<html>
    <head>
        <title>getInfo("titulo")</title>
    </head>
    <body>
        <h2> <?php echo getInfo("descricao")?></h2>
        <h2> <?php echo getInfo("titulo")?></h2>
    </body>
    </html>