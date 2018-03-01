<!DOCTYPE html>
<html>
<head>
	<title>Eventos_Mouse</title>
	<meta charset="utf-8">
	<script type="text/javascript">
	/*
	  onclick --> acionando no clique do mouse
	  ondblclick --> acionado no clique duplo do mouse
	  onmousedown --> acionando no clique do mouse (soltando ou não o botão)
	  onmouseover --> acionado quando cursor do mouse sobrepõe o elemento da página
	  onmouseout --> acionado quando o cursor do mouse sai da área de um elemento da página
	  pode ser usado mais de um elemento
	*/	

	function msg(){
		alert(' que tal ?')
	}
	</script> 
</head>
<body>
	<div onmouseout="msg()" style="background: #CCC; height: 150px; width:150px;"></div>
</body>
</html>