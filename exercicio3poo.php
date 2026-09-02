<?php
	class aluno{
		private string $nome;
		private array $notas = [];

	public function __construct(string $nome){
		$this->nome = $nome;
	}
	public function adicionarNota(float $nota): bool{
		if ($nota >= 0 && $nota <= 10){
			$this->notas[] = $nota;
			return true;
		}
	
		return false;
	}
	public function calcularMedia(): float{
		if(count($this->notas) === 0) {
			return 0.0;
		}

	$soma = array_sum($this->notas);
	$quantidade = count($this->notas);

	return $soma / $quantidade;

	}

	public function isAprovado(){
		if($this->calcularMedia() >= 7.0){
			return "Aprovado";
		} else {
			return "Reprovado";
		}
}

	public function getNome(): string {
		return $this->nome;
	}
}

$aluno1 = new Aluno("Gabriel");
$aluno1->getNome();
$aluno1->adicionarNota(10);
$aluno1->adicionarNota(6.9);
$aluno1->adicionarNota(6.7);
$aluno1->calcularMedia();
$aluno1->isAprovado();

echo "Aluno: " . $aluno1->getNome();
echo "\n";
echo "Media: " . number_format($aluno1->calcularMedia(), 1);
echo "\n";
echo "Resultado: " . $aluno1->isAprovado();

?>
