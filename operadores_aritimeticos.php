<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculos</title>
	<script type="text/javascript">
		// + 
		var num1 = prompt('Ditige o valor X:');
		var num2 = prompt('Ditige o valor y:');

		num1 = parseFloat(num1);
		num2 = parseFloat(num2);

		// ou parseInt(num1 e num2) que força o valores a serem inteiros

		document.write("A soma entre " + num1 + " e " + num2 + "," + " é: " + (num2 + num1) + '<br />' + '<br />');
		document.write("A subtração entre " + num2 + " e " + num1 + "," + " é: " + (num2 - num1) + '<br />' + '<br />');

		document.write("A multiĺicação entre " + num2 + " e " + num1 + "," + " é: " + (num2 * num1) + '<br />' + '<br />');

		document.write("A divisão entre " + num1 + " e " + num2 + "," + " é: " + (num1 / num2) + '<br />' + '<br />');

		document.write("O módulo entre " + num1 + " e " + num2 + "," + " é: " + (num1 % num2) + '<br />' + '<br />');

		document.write("O incremento de " + num1 + " é " + /*o certo é (++num1)*/(num1++) + '<br />' + '<br />');

		document.write(num1);
	</script>
</head>
<body>

</body>
</html>