<?php
require_once 'Item.php';

class Gaveta {
    private $itens = [];

    public function adicionarItem(Item $item) {
        $this->itens[] = $item;
    }

    public function removerItem($nome) {
        foreach ($this->itens as $key => $item) {
            if ($item->getNome() == $nome) {
                unset($this->itens[$key]);
                echo "O item '$nome' foi removido da gaveta.<br>";
                return;
            }
        }
        echo "O item '$nome' não foi encontrado na gaveta.<br>";
    }

    public function listarItens() {
        echo "Itens na gaveta:\n";
        foreach ($this->itens as $item) {
            echo "- {$item->getNome()}: {$item->getDescricao()}\n";
        }
    }

    public function getItens() {
        return $this->itens;
    }
}
?>
