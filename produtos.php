<?php
// variaveis de controle
$paginaAtual = 'Produtos';

include_once './includes/functions.php';
include_once './includes/_banco.php';
include_once './includes/_head.php'; #inclui o arquivo com o head em html
include_once './includes/_header.php'; #inclui o header da pagina
// conteudo da pagina

$sql = mysqli_query($conn,"SELECT * FROM categorias") or die("Erro");

?>

    <section id="produtos">
        <div class="row">
    <?php
    // laco de repeticao 
    foreach ($dados as $key => $value) {
    ?>
        <div class="card col-3" style="width: 18rem;">
            <a href="./produto-detalhe.php?id=<?php echo $key;?>">
                <img class="card-img-top" src="./produtos/<?php echo $dados['imagem']?>" alt="<?php echo $dados['nome'];?>">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $dados['nome']?></h4>
                    <span class="card-price"><?php echo ConverterEmMoeda($dados['preco'],2,",",".");?></span>
                </div>
            </a>
        </div>
    <?php
    }
    ?>
        </div>
    </section>

<?php
include_once './includes/_footer.php'; #inclui o footer da pagina
?>