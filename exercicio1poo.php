<?php
class Produto {

	public string $nome;
	public float $preco;
	public int $quantidade;

	public function __construct(string $nome, float $preco, int $quantidade) {
		$this->nome = $nome;
		$this->preco = $preco;
		$this->quantidade = $quantidade;
	}

	public function calcularTotal(): float {
		return $this->preco * $this->quantidade;
	}
}

$produto1 = new Produto("Iphone", 3500.10, 5);
$produto2 = new Produto("PC Gamer", 6750.50, 3);

echo "Produto: " . $produto1->nome . "\n";
echo "Preço: " . $produto1->preco . "\n";
echo "Quantidade: " . $produto1->quantidade . "\n";
echo "Valor total: " . $produto1->calcularTotal() . "\n";

echo "----------------------------------------\n";

echo "Produto: " . $produto2->nome . "\n";
echo "Preço: " . $produto2->preco . "\n";
echo "Quantidade: " . $produto2->quantidade . "\n";
echo "Valor total: " . $produto2->calcularTotal() . "\n";


$totalGeral = $produto1->calcularTotal() + $produto2->calcularTotal();
echo "Valor total dos dois produtos: " . $totalGeral . "\n";


?>
