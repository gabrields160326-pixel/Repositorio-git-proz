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
			echo "Deposito: " . $valor;
		}

		public function sacar(float $valor){
			if($valor < $this->saldo){
				$this->saldo -= $valor;
			echo "Voce fez um saque de " . $valor;
		} else {
			echo "Vc nao pode fazer o saque";
			}
		}
		public function getSaldo(){
			return $this->saldo;
		}

		public function getTitular(){
			return $this->titular;
		}
	}

$conta1 = new contaBancaria("Gabriel", 500);
$conta1->getSaldo();
$conta1->getTitular();

echo "Titular: " . $conta1->getTitular();
echo "\n";
echo "Saldo: " . $conta1->getSaldo();

echo "\n--------------------------";

echo "\n";

$conta1->depositar(300);
echo "\n";
echo "Saldo: " . $conta1->getSaldo();

echo "\n--------------------------";

echo "\n";

$conta1->sacar(500);
echo "\n";
echo "Saldo: " . $conta1->getSaldo();

echo "\n--------------------------";
?>
