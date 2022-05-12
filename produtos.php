<?php 

$paginaAtual = 'produtos';


    //incluir dados
    include_once './includes/_dados.php'; 
    //incluir hader
    include_once './includes/_header.php';
    //inclui o header
    include_once './includes/_head.php';
?>
    <section id="produtos">
    <div class='row'>

<?php
//laço de repetição
foreach ($dadosProdutos as $key => $value){

?>

        <div class="card col-3" style="width: 18rem;">
            <a href="./produto-detalhe.php?id=<?php echo $key;?>">
            <img class="card-img-top" src="./produtos/<?php echo $value['imagem'];?>" alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><?php echo $value['nome']?></h2>
                <span class='card-price'>R$ <?php echo number_format($value['preco'],2,",",",");?></span>
            </div>
        </div>

<?php
}
?>

    </div>
    </section>

<?php 
    //incluir footer 
    include_once './includes/_footer.php';
?>
