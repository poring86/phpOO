<?php
require 'classes/produto.php';
require 'models/produto.php';

// use classes\Produto;
use classes\Produto as productClasses;
use models\Produto as productModels;
// $produto = new \classes\Produto();
$produto = new productClasses();
$produto->mostrarDetalhes();

$produto = new productModels();
$produto->mostrarDetalhes();