<?php
namespace App\Model;


class ProdutoDao{
    public function create(Produto $p){
        
        $sql = 'INSERT INTO clientes(nome,sobrenome,email) VALUES(?,?,?)';
       
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$p->getNome());
        $stmt->bindValue(2,$p->getSobrenome());
        $stmt->bindvalue(3,$p->getEmail());
        $stmt->execute();

    }
    public function read(){
        $sql = 'SELECT * FROM clientes';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function delete($id){
        $sql = "DELETE from clientes where id = ? ";
        $stmt =Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$id);
        $stmt->execute();

    }
}



?>