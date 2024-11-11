<?php
include "layout/html_header.php";
include "layout/nav.php";
?>

<?php
// Validação de formulário
// Se não for feito um POST, não lerá este bloco de nota e passará reto, mas quando for feito o POST e ao reiniciar a página , ele vai ler e executar o bloco
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $erro = " "; // Variável de erro vazia pois quando houver um erro em algum bloco ele irá para se ouver o erro ser preenchida abaixo. Linha 12.

    // Verificar se todos os campos existem
    if (
        !isset($_POST["text_email"]) ||
        !isset($_POST["text_assunto"]) ||
        !isset($_POST["text_mensagem"])
    ) {

        $erro = "Um dos campos não foi preenchido";
    }

    $email = $_POST["text_email"];
    $assunto = $_POST["text_assunto"];
    $mensagem = $_POST["text_mensagem"];

    // Verificar se os campos estão preenchidos
    if (empty($erro)) {       // Se a variável erro estiver vazia, ele vai executar o bloco de notas abaixo
        // VARIÁVEL PARA VERIFICAR EMAIL
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro = "Endereço de email inválido";
        }
    }

    // ENVIO DE EMAIL
    if (empty($erro)) {
        $resultado = mail(to: $email, subject: $assunto, message: $mensagem); {
            if ($resultado) {
                echo "Email enviado com sucesso";
            } else {
                $erro = "Erro ao enviar email";
            }
        }
    }
}
?>


<!-- Campo de email -->
<form action="?p=contato.php" method="post">
    <h1>Contatos</h1>
    <input type="email" name="text_email" placeholder="Digite seu email" required><br><br>
    <input type="text" name="text-assunto" placeholder="Digite o assunto do email" required><br><br>
    <textarea name="text_mensagem" cols="30" rows="10"></textarea>
    <input type="submit" value="Enviar">
</form>


<!-- <?php if (!empty($erro)): ?> // Se a variável erro não estiver vazia, ele vai mostrar a mensagem de erro -->
<div style="color: red;"><?php echo $erro ?></div> <!-- mensagem de erro -->
<?php endif; ?> <!--  Fim da condição if -->

<!-- Campo de usuário e senha -->
<!-- <h3>Usuário :</h3>
<form action="tratar.php" method="post">
    <input type="text" name="text_usuario" minlength="3"><br>  Campo de usuário e instrução de preenchimento 
 <small>( Entre 5 e 10 caracteres)</small><br><br> 
<h3>Senha :</h3>
<input type="password" name="text_senha" minlength="3"><br> Campo de senha e instrução de preenchimento 
 <small>( Entre 3 e 16 caracteres)</small><br><br>
    <input type="submit" value="Entrar">
</form>  -->


<!--Com o método post as informações são levadas ao arquivo tratar.php e serão guardadas em um array superglobal chamado $_POST.-->

<!-- Toda vez que um form for criado, e ter um conteúdo haverá validações para não ter erros que o usuário possa ter por falta de testes não feitos por conta do desenvolvedor, cada type tem uma validação. Para consultar os tipos de validação de cada type, basta acessar o site da w3schools e pesquisar por input html. -->