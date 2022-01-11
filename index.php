<?php
include_once 'includes\header.php';


$produtoDao = new \App\Model\ProdutoDao();

?>
<link rel="stylesheet" href="style.css">

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="name">Clientes:</h3>
            <table class="striped">
                  <tr>
                   <th>Nome:</th>
                   <th>Sobrenome:</th>
                   <th>Email:</th>
                 </tr>

                 <?php if($produtoDao->read() == true){ foreach
                    ($produtoDao->read() as $produto){ ?>
                <tr>
                
                 <th><?php echo $produto['nome']; ?></th>
                 <th><?php echo $produto['sobrenome']; ?></th>
                 <th><?php echo $produto['email']; }?></th>
                 </tr>
                 </table>
            
            <?php }else{ ?>
                    <tr>
                      <th>-</th>
                      <th>-</th>
                      <th>-</th>
                    </tr>   
            </table>
            <?php } ?>
            
            <a href='cadastrar.php' class="btn">Adicionar</a> 
            <a href='deletar.php' class="btn red">Remover</a> </div>
</div>


<?php include_once 'includes\footer.php'; ?>