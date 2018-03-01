<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Operadores Logicos</title>
	<script type="text/javascript">
		//&& // E--> verdadeito se todas as expressões forem verdadeiras 
		//|| // OU--> Verdadeiro de pelo menos uma das expressões for verdadeira
		//! //| Negaçãi --> Inverte o resultado da expressão


		/*if (2 == 2 && 4 == 4 && 'a' != 'b'){
			document.write('Verdadeiro');
		}else {
			document.write('Falso');
		}*/

		/*if (3 == 2 || 4 > 4 || 'a' === 'b'){
			document.write('Verdadeiro');
		}else {
			document.write('Falso');
		}*/

		/*if (!(3 > 2)){
			document.write('Verdadeiro');
		}else {
			document.write('Falso');
		}*/

		var nota = prompt('Digite a nota do aluno');
		var faltas = prompt('Digite a quantidade de faltas do aluno');

		var media = 7;
		var faltas_limite = 15; 

		if(nota >= media && faltas <= faltas_limite){
			document.write('Aprovado');
		}else {
			document.write('Reprovado')
		}

	</script>
</head>
<body>

</body>
</html>