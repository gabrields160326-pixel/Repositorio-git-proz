<?php
    class Pessoa {

        public string $nome;
		public string $mensagem;
        public int $idade;
        public float $altura;

        public function __construct(string $nome, int $idade, float $altura) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
        }

        public function falar(): string {
			$this->mensagem = "falou";
            return $this->mensagem;
        }
    }

$pessoa1 = new Pessoa("Gabriel", 16, 1.70);
$pessoa2 = new Pessoa("Eduardo", 34, 1.70);
$pessoa1->falar();

echo "O nome dele é " . $pessoa1->nome . "\n";
echo "A idade dele é " . $pessoa1->idade . "\n";
echo "A altura dele é " . $pessoa1->altura . "\n";
echo "O que ele fez? " . $pessoa1->mensagem . "\n";

echo "x\n";

echo "O nome dele é " . $pessoa2->nome . "\n";
echo "A idade dele é " . $pessoa2->idade . "\n";
echo "A altura dele é " . $pessoa2->altura . "\n";
?>
