<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Funções</title>
	<script type="text/javascript">
		function calculaAreaTerreno(largura, comprimento){

			largura = parseFloat(largura);
			comprimento = parseFloat(comprimento);


			var area = largura * comprimento;
			return area;
		}

		var largura = prompt("Digite a largura do terreno");
		var comprimento = prompt("Digite o comprimento do terreno");

		var AreaTerreno = calculaAreaTerreno( largura, comprimento);
		document.write('O terreno possui ' + AreaTerreno + " metros quadrados");

		

		/*********sem return*********/

		/*function calculaAreaTerreno(largura, comprimento){

			largura = parseFloat(largura);
			comprimento = parseFloat(comprimento);


			document.write('O terreno possui ' + AreaTerreno + " metros quadrados");
		}

		var largura = prompt("Digite a largura do terreno");
		var comprimento = prompt("Digite o comprimento do terreno");

		calculaAreaTerreno( largura, comprimento);*/
	</script>
</head>
<body>

</body>
</html>