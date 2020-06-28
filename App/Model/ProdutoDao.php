<?php
namespace App\Model;
class ProdutoDao{
    public function create(Produto $p){
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (?, ?)';
        $stm = Conexao::getConn()->prepare($sql);
        
        $stm->bindValue(1, $p->getNome());
        $stm->bindValue(2, $p->getDescricao());

        $stm->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM produtos';
        $stm = Conexao::getConn()->prepare($sql);
        $stm->execute();

        if($stm->rowCount() > 0){
            $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }

    public function update(Produto $p) {

		$sql = 'UPDATE produtos SET nome = ?, descricao = ? WHERE id = ?';

		$stm = Conexao::getConn()->prepare($sql);
		$stm->bindValue(1, $p->getNome());
		$stm->bindValue(2, $p->getDescricao());
		$stm->bindValue(3, $p->getId());

		$stm->execute();


	}

    public function delete($id) {

		$sql = 'DELETE FROM produtos WHERE id = ?';

		$stm = Conexao::getConn()->prepare($sql);
		$stm->bindValue(1, $id);
		$stm->execute();

	}
}