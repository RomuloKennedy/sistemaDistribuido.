<?php include_once 'includes\header.php'; 

      ?>


    <link rel="stylesheet" href="style.css">

        <form action="cadastrar.php" method="POST">
        <center><h3 class="name">CADASTRO DE USUÁRIOS:</h3></center>
       
            <input placeholder="Nome" type="text" name="nome" id="nome">
        
            <input placeholder="Sobrenome" type="text" name="sobrenome" id="sobrenome">
      
            <input placeholder="Email" type="email" name="email" id="email">
      
        <center><button type="submit" name="btn-cadastrar" class="btn green">Cadastrar</button>
        <a href="index.php" class="btn">Listar</a></center>
      
        </form>
    
       <?php 
       
       if(isset($_POST['btn-cadastrar'])){
        $produto = new \App\Model\Produto();
        $produto->setId('default');
        $produto->setNome($_POST['nome']);
        $produto->setSobrenome($_POST['sobrenome']);
        $produto->setEmail($_POST['email']);

        $produtoDao = new \App\Model\ProdutoDao();

        $produtoDao->create($produto);
        
            } ?>
        


<?php include_once 'includes\footer.php'; ?>