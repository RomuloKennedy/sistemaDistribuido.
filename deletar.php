
<?php
include_once 'includes\header.php';


$produtoDao = new \App\Model\ProdutoDao();

?>
<link rel="stylesheet" href="style.css">

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light/">Clientes:</h3>
            <table class="striped">
                  <tr>
                   <th>Id:</th>
                   <th>Nome:</th>
                   <th>Sobrenome:</th>
                   <th>Email:</th>
                 </tr>

                 <?php if($produtoDao->read() == true){ foreach
                    ($produtoDao->read() as $produto){ ?>
                <tr>
                 <th><?php echo $produto['id']; ?></th>
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
                      <th>-</th>
                    </tr>   
            </table>
            <?php } ?>
            <form action="deletar.php" method="POST">
            <input placeholder="Digite o ID" type="text" name="remover" id="input">           
            <center><button type="submit" name="btn-deletar"class="btn red">Apagar</button></center>
        </form>
            
            
         </div>
        
</div>
<center><a href="index.php" class="btn">Listar </a> </center>
<?php
if(isset($_POST['btn-deletar'])){

        $produtoDao = new \App\Model\ProdutoDao();
        $produtoDao->delete($_POST['remover']);
        
            } ?>
        


<?php include_once 'includes\footer.php'; ?>