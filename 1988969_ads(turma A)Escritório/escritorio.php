<?php

class Escritorio {
    private $armarios = [];
    public function adicionarArmario(Armario $armario) {
        $this->armarios[] = $armario;
    }

    public function removerArmario($indice) {
        unset($this->armarios[$indice]);
    }
    public function listarArmarios() {
        foreach ($this->armarios as $armario) {
            $armario->listarGavetas();
        }
    }
    public function auditoria() {
        echo "Relatório do Escritório:<br><br>";
        foreach ($this->armarios as $indexArmario => $armario) {
            echo "Armário " . $indexArmario . ":<br>";
            foreach ($armario->getGavetas() as $indexGaveta => $gaveta) {
                echo "<br>Gaveta " . $indexGaveta . ":<br>";
                echo "Itens na gaveta:<br>";
                foreach ($gaveta->getItens() as $item) {
                    echo "- " . $item->getNome() . ": " . $item->getDescricao() . "<br>";
                }
            }
            echo "<br>"; 
        }
    }
    public function removerItem($nomeItem, $indiceArmario, $indiceGaveta) {
        if (isset($this->armarios[$indiceArmario])) {
            $armario = $this->armarios[$indiceArmario];
                        if (isset($armario->getGavetas()[$indiceGaveta])) {
                $gaveta = $armario->getGavetas()[$indiceGaveta];
                $gaveta->removerItem($nomeItem);
                echo "O item '$nomeItem' foi removido da gaveta $indiceGaveta do armário $indiceArmario.<br>";
            } else {
                echo "A gaveta $indiceGaveta não foi encontrada no armário $indiceArmario.<br>";
            }
        } else {
            echo "O armário $indiceArmario não foi encontrado.<br>";
        }
    }
    
    public function auditoriaComRemocoes() {
        echo "<br>Após Remoções:<br><br>";
        foreach ($this->armarios as $indexArmario => $armario) {
            echo "Armário " . $indexArmario . ":<br>";
            foreach ($armario->getGavetas() as $indexGaveta => $gaveta) {
                echo "<br>Gaveta " . $indexGaveta . ":<br>";
                echo "Itens na gaveta:<br>";
                foreach ($gaveta->getItens() as $item) {
                    echo "- " . $item->getNome() . ": " . $item->getDescricao() . "<br>";
                }
            }
            echo "<br>"; 
        }
    }
}

