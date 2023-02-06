<?php
include('Config.php');
include('usuarios.php');
function getPagina(){
    $url = $_SERVER['REQUEST_URI'];
   $metodo = $_SERVER['REQUEST_METHOD'];
   /* == não filtra o tipo e apenas o valor enquanto === filtra também o tipo, exemplo: apenas string */
   if($metodo == "GET"){
    switch($url){

        case "/AulasPhp/Aula1Valores/":
            include("Aula1Valores/Paginas/home.php");
            break;

                case "/AulasPhp/Aula1Valores/home":
                    include("Aula1Valores/Paginas/home.php");
                         break;

                         case "/AulasPhp/Aula1Valores/sobre":
                     include("Aula1Valores/Paginas/sobre.php");
                  break;

               case "/AulasPhp/Aula1Valores/contato":
              include("Aula1Valores/Paginas/contato.php");
            break;

        default:
       include("Aula1Valores/Paginas/home.php");
      break;
    }
   }
   else {
       echo "metodo incorreto";exit;
   }

    /* Função Abaixo "$_Server" Exibe Configurações e detalhes do servidor
    var_dump($_SERVER); exit; */
}
?>