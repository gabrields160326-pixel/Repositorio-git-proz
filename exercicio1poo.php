<?php
	class Produto{
		public string $nome;
		public float $preco;
		public int $quantidade;

		public function calcularTotal(){
			return $this->preco * $this->quantidade;
		}
	}

$produto1 = new Produto();
$produto1->nome = "PC";
$produto1->preco = 5000;
$produto1->quantidade = 3;


echo "Produto 1: " . $produto1->nome;
echo "\n";
echo "Preço: " . $produto1->preco;
echo "\n";
echo "Quantidade: " . $produto1->quantidade;
echo "\n";
echo "Total: " . $produto1->calcularTotal();

echo "\n";
echo "-------------------\n";

$produto2 = new Produto();
$produto2->nome = "Iphone";
$produto2->preco = 5000;
$produto2->quantidade = 5;

echo "Produto 2: " . $produto2->nome;
echo "\n";
echo "Preço: " . $produto2->preco;
echo "\n";
echo "Quantidade: " . $produto2->quantidade;
echo "\n";
echo "Total: " . $produto2->calcularTotal();


?>
