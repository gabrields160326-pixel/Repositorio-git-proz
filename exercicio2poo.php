<?php
	class contaBancaria{
		private string $titular;
		private float $saldo;

		public function __construct(string $titular, float $saldo){
			$this->titular = $titular;
			$this->saldo = $saldo;
		}

		public function depositar(float $valor){
			$this->saldo += $valor;
			echo "Depositei " . $valor;
	}

		public function sacar(float $valor){
			if($valor <= $this->saldo){
			$this->saldo -= $valor;
			echo "saque deu certo";
		} else {
			echo "saque deu errado, pois seu saque é maior doque tem na sua conta";
		}
	}
		public function getSaldo(){
			return $this->saldo;
		}
}

$minhaConta = new contaBancaria("Gabriel", 500);
$minhaConta->getSaldo();
echo "Saldo atual: " . $minhaConta->getSaldo();

echo "\n";
echo "---------------------\n";

$minhaConta->depositar(300);
echo "\n";
echo "Conta: " . $minhaConta->getSaldo();

echo "\n";

echo "---------------------\n";

$minhaConta->sacar(500);
echo "\n";
echo "Saldo atual: " . $minhaConta->getSaldo();
?>
