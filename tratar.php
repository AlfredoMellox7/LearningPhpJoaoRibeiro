<?php

// Verificação se os campos de usuário e senha existem
if (!isset($_POST["text_usuario"]) || !isset($_POST["text_senha"])) {
    die("Não existem os campos de usuário e senha");
    // se não foi " POSTO " text_usuario ( campo requerido ) ele vai mostrar a mensagem de erro - LENDO O CÓDIGO
}

// Verificação se um dos campos está vazio
if (empty($_POST["text_usuario"])) {
    die("Aviso - O campo de usuário não foi preenchido");
}

if (empty($_POST["text_senha"])) {
    die("Aviso - O campo da senha não foi preenchido");
}

$usuario = $_POST["text_usuario"];
$senha = $_POST["text_senha"];

// Verifica se o usuário tem entre 5 e 10 caracteres

if (strlen(($usuario) < 5 || strlen($usuario) > 10)) {
    die("O usuário deve ter entre 5 e 10 caracteres");
}

if (strlen(($senha) < 3 || strlen($senha) > 16)) {
    die("A senha deve ter entre 3 e 15 caracteres");
}

// Verificações de teste de preeenchimento dos campos
if(empty($_POST["text_usuario"]) || empty($_POST["text_senha"])){
        die("Necessário preencher os campos de usuário e senha");
}


echo "usuario: $usuario <br>";
echo " senha do usuário : $senha <br>";


// $nomesUsuarios =array(
//     "João",
//     "Ana",
//     "Carlos"
// );

// $infoUsuario01 = array(
//     "usuario" => "João",
//     "nome" => "João da Silva",
//     "senha" => "123456",
//     "email" => " joaosilva@gmail.com",
// );

// echo $infoUsuario01["email"];

// Tratamento de dados - É a estrutura de controle que vai tratar os dados que estão sendo enviados e organizar de forma que o sistema entenda -Resumindo é pra onde vão os dados e como eles são organizados.