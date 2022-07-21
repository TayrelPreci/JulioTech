<?php 
// inclui o head <3
include_once "_head.php" ; 
?>
<main>
    <h2>Adminiminiministração das Produtos</h2>

    <?php 
        //coleção de mensagens
        $mensagem = array(
            1=>'Usuário ou senha inválidos!',
            2=>'Você precisa ter um usuário válido para acessar!',
            3=>'Você saiu, volte simpre!'
        );

        //validação de mensagem
        if (isset($_GET['msg']) || is_numeric($_GET) ){

            $cod = $_GET['msg'];
    ?>

    <h3><?php echo $mensagem[$cod]; ?></h3>
    
    <?php 
    }
    ?>

    <form action="login_processa.php" method="post">
        <input type="hidden" value="login" name="acao"><br>
        <label for="email">E-mail:</label><br>
        <input type="text" name="email" id="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" nome="senha"><br>
        <hr>
        <input type="submit" value="login">
    </form>

</main>
<?php  
include_once '_footer.php';
?>