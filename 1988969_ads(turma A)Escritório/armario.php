<?php
require_once 'Gaveta.php';

class Armario {
    private $gavetas = [];

    public function adicionarGaveta(Gaveta $gaveta) {
        $this->gavetas[] = $gaveta;
    }

    public function removerGaveta($indice) {
        if (isset($this->gavetas[$indice])) {
            unset($this->gavetas[$indice]);
            echo "A gaveta $indice foi removida do armário.<br>";
        } else {
            echo "A gaveta $indice não foi encontrada no armário.<br>";
        }
    }

    public function listarGavetas() {
        echo "Gavetas no armário:\n";
        foreach ($this->gavetas as $index => $gaveta) {
            echo "Gaveta $index:<br>";
            $gaveta->listarItens();
        }
    }

    public function getGavetas() {
        return $this->gavetas;
    }
}
?>
