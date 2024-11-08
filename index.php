<?php

include("layout/html_header.php");
include("layout/nav.php");

// Rotas (routes) - roteamento
if (isset($_GET["p"])) { // isset verifica se a variável foi definida - É pra ter certeza que tem !!! Funciona como um teste de qualidade
    $pag = $_GET["p"];   
}

switch ($pag) {
    case 'inicio':
        include("inicio.php");          // iNDEX É O PAI DE TODAS AS PÁGINAS
        break;

    case "empresa":
        include("empresa.php");
        break;
    case "servicos":
        include("servicos.php");       // Modo Switch
        break;
    case "contatos":
        include("contatos.php");
        break;

    default:
        include("inicio.php");
        break;
}

// if($pag == "inicio.php"){
//     include("inicio.php");
// }elseif($pag =="empresa.php"){
//     include("empresa.php"); 
// }elseif($pag == "servicos.php"){     // Modo If
//     include("servicos.php"); 
// }elseif($pag == "contatos"){
//     include("contatos.php");
// } else {
//     include("inicio.php");
// }

// PÁGINA PRINCIPAL ***
// Entrará na página inicial do software e dependendo será direcionado para a página escolhida
