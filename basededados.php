<?php 

include "gestor.php"; //Inclui o arquivo gestor com as configurações de conexão com o banco de dados

$gestor = new Gestor(); //Instancia a classe Gestor
$dados = $gestor->EXE_QUERY("SELECT * FROM emails"); //Executa a query de seleção de todos os dados da tabela empresa

echo "<pre>"; //TAG HTML que define a formatação do texto
print_r($dados); //Imprime os dados retornados pela query - PRINT_R é uma função que imprime o conteúdo de uma variável LEGIVELMENTE( DIFERENTE DE ECHO )

die("FINALIZADO"); //Encerra a execução do script
