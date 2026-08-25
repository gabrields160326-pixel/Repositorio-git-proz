<?php

class Funcionario;
{
	protected $nome;
	protected $salarioBase;

	public function __construct($nome, $salarioBase)
	{
		$this->nome = $nome;
		this->salarioBase = $salarioBase;
	}

	public function calcularSalario()
	{
		return $this->salarioBase;
	}
}

class Gerente extends Funcionario
{
	private $bonus;

	public function __construct($nome, $salarioBase, $base)
	{
		parent::__construct($nome, $salarioBase);
		$this->bonus = $bonus;
	}
}

	public function calcularSalario()
		{
			return $this->salarioBase
		}
?>
