<?php
function getUsuarios(){
    return $dados = [
    ["nome"=>"Allan", "email"=>"allanfernandesti@gmail.com"],
    ["nome"=>"joao", "email"=>"joao@gmail.com"],
    ["nome"=>"pedro", "email"=>"pedro@gmail.com"],
    ["nome"=>"maria", "email"=>"maria@gmail.com"]
    ];
    return $dados;
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