<?php
require_once 'Item.php';

class Documento extends Item {
    private $dataCriacao;

    public function __construct($nome, $descricao, $dataCriacao) {
        parent::__construct($nome, $descricao);
        $this->dataCriacao = $dataCriacao;
    }

    public function getDataCriacao() {
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }
}
?>
