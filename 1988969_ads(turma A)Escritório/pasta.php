<?php
require_once 'Item.php';

class Pasta extends Item {
    private $categoria;

    public function __construct($nome, $descricao, $categoria) {
        parent::__construct($nome, $descricao);
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }
}
?>
