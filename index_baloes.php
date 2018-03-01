<!DOCTYPE html>
<html lang="pt-br">
<html>
	<head>
		<meta charset="utf-8">
		<title>Estourando balões</title>
	
		<script language='Javascript'>
			
			function iniciaJogo(){
				var nivel_jogo = document.getElementById('nivel_jogo').value;

				window.location.href = 'jogo.php?'+nivel_jogo;
			}
		</script>
	</head>
	<body>
	
		<div>
			<p><b>Nivel1:</b>
			<select id="nivel_jogo">
				<option value="1">Fácil</option>
				<option value="2">Normal</option>
				<option value="3">Dificil</option>
			</select>
			</p>

			<br />
			<img src="estourando_baloes/imagens/iniciar.png" onclick="iniciaJogo()" />
		</div>
	</body>
</html>