<!-- <?php
        // if(empty($_POST == false)){
        //     var_dump($_POST);
        // }
        ?> -->

<h1>Contatos</h1>
<form action="tratar.php" method="post">
    <input type="text" name="text_usuario">
    <input type="password" name="text_senha">
    <input type="submit" name="Enviar">
</form>

<!--Com o método post as informações são levadas ao arquivo tratar.php e serão guardadas em um array superglobal chamado $_POST.-->