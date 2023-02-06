<?php 
$nome = "Allan ";
$sobrenome = "Fernandes";
$nomeCompleto = $nome."".$sobrenome;
$idade = 25;
$cidade = "SP";
$peso = 60.30;
/* Aspas singles aplica literalmente o que está dentro, aspas duplas reconhece variaveis.*/
echo    " Nome : $nomeCompleto - Idade: $idade ";
echo    ' Nome : $nomeCompleto - Idade: $idade ';

?>

<html>
<head>
    <title>Titulo </title>
</head>
<body>
    <h2>php com html</h2>
    <h4> <?php echo $nomeCompleto?></h4>
    <p><b> Idade: <?php echo $idade?></b></p>
    <p><b> peso: <?php echo $peso?> kg</b></p>

</body>

</html>