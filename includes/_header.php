<header>
    <h1>Sandro&Massas</h1>
    <nav>
      <ul>
      <li><a href="./index.php">Home</a></li>
      <li><a href="./empresa.php">Empresa</a></li>
      <li><a href="./produtos.php">Produtos</a></li>
      <li><a href="./contato.php">Contatos</a></li>
    </ul>
  </nav>
</header>

<main class="container">

    <?php 
      if ($paginaAtual != 'home') {
    ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $paginaAtual;?></li>
    </ol>
  </nav>

  <?php 
    }
  ?>
