<?php
require_once 'Documento.php';
require_once 'Objeto.php';
require_once 'Pasta.php';
require_once 'Gaveta.php';
require_once 'Armario.php';
require_once 'Escritorio.php';

$documento1 = new Documento("Relatório 2024", "Relatório de atividades do ano", "2024-12-01");
$documento2 = new Documento("Projeto XYZ", "Plano de desenvolvimento do Projeto XYZ", "2024-11-15");
$documento3 = new Documento("Contrato de Trabalho", "Contrato de trabalho da empresa", "2023-06-20");

$objeto1 = new Objeto("Celular Xiaomi", "Modelo Mi 13 lite", 0.180);
$objeto2 = new Objeto("Fone de Ouvido", "Fone Xiaomi", 0.070);
$objeto3 = new Objeto("Notebook Dell", "Modelo Inspiron 15", 2.500);
$objeto4 = new Objeto("Câmera DSLR", "Canon EOS 70-200mm", 1.500);
$objeto5 = new Objeto("Pen Drive", "Kingston 32GB", 0.015);

$pasta1 = new Pasta("Pasta A", "Pasta de documentos pessoais", "Pessoal");
$pasta2 = new Pasta("Pasta B", "Pasta de projetos da empresa", "Profissional");
$pasta3 = new Pasta("Pasta C", "Pasta de contratos legais", "Legal");

$gaveta1 = new Gaveta();
$gaveta1->adicionarItem($documento1);
$gaveta1->adicionarItem($objeto1);
$gaveta1->adicionarItem($pasta1);

$gaveta2 = new Gaveta();
$gaveta2->adicionarItem($documento2);
$gaveta2->adicionarItem($objeto2);
$gaveta2->adicionarItem($pasta2);
$gaveta2->adicionarItem($objeto4);

$gaveta3 = new Gaveta();
$gaveta3->adicionarItem($documento3);
$gaveta3->adicionarItem($objeto3);
$gaveta3->adicionarItem($pasta3);
$gaveta3->adicionarItem($objeto5);

$gaveta4 = new Gaveta();
$gaveta4->adicionarItem($objeto1);
$gaveta4->adicionarItem($objeto3);

$armario1 = new Armario();
$armario1->adicionarGaveta($gaveta1);
$armario1->adicionarGaveta($gaveta2);

$armario2 = new Armario();
$armario2->adicionarGaveta($gaveta3);
$armario2->adicionarGaveta($gaveta4);

$escritorio = new Escritorio();
$escritorio->adicionarArmario($armario1);
$escritorio->adicionarArmario($armario2);

$escritorio->auditoria();

echo "<br>Remoções de Itens:<br>";
$escritorio->removerItem('Relatório 2024', 0, 0);
$escritorio->removerItem('Fone de Ouvido', 1, 0);  
$escritorio->removerItem("Pasta C", 2, 0);
$escritorio->removerItem("Câmera DSLR", 1, 0);
$escritorio->auditoriaComRemocoes();

?>
