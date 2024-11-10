<?php
require_once 'Item.php';

class Objeto extends Item {
    private $peso;

    public function __construct($nome, $descricao, $peso) {
        parent::__construct($nome, $descricao);
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
    }
}
?>
