<?php


	$operador = readline("Escolha seu operador: ");

	$num1 = (float)readline("escolha o seu primeiro numero: ");

	$num2 = (float)readline("Escolha o seu segundo numero: ");

switch($operador) {

	case '+':
		$resultado = $num1 + $num2;
		echo("O resultado é $resultado ");
		break;

	case '-':

		$resultado = $num1 - $num2;
		echo("O resultado é $resultado ");
		break;

	case '*':
		$resultado = $num1 * $num2;
		echo("O resultado é $resultado ");
		break;

	case '/':
		$resultado = $num1 / $num2;
		echo("O resultado é $resultado");
		break;
	default:
		print("Operação invalida");


}

?>
