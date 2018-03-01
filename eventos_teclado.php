<!DOCTYPE html>
<html>
<head>
	<title>Eventos_Teclado</title>
	<meta charset="utf-8">
	<script type="text/javascript">
	/*
	  onkeydown --> acionado no momento em que uma tecla é pressionada (soltando ou não o botão)
	  onkeypress --> acionado no momento em que uma tecla é pressionada (slt/ou/n), porém não captura todas as teclas, como por exemplo alt, crtl, esc, shift, etc.
	  onkeyup --> acionada no momento em que a tecla é liberada
	  pode ser usado mais de um elemento
	*/	

	function msg(){
		alert(' que tal ?')
	}
	</script> 
</head>
<body>
	<input onkeyup="msg();" type="text">
</body>
</html>