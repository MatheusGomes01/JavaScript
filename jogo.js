var timeId = null; //variavel que armazena a chamada da funcao timeout

function iniciaJogo(){

	var url = window.location.search;
	var nivel_jogo = url.replace("?", "");

	var tempo_segundos = 0;

	if(nivel_jogo ==1){//1 fácil --> 120 segundos
		tempo_segundos = 120;

	}

	if(nivel_jogo == 2){ //2 normal --> 60 segundos
		tempo_segundos = 60;
	}

	if(nivel_jogo == 3){//3 dificil --> 30 segundos
		tempo_segundos = 30;

	} 

	//inserindo os segundos no span
	document.getElementById('cronometro').innerHTML = tempo_segundos; //innerHTML insere um conteudo dentro da tag

	//quantidades de balões
	var qtde_baloes = 20;

	cria_baloes(qtde_baloes);

	//imprimir qtde de baloes inteiros
	document.getElementById('baloes_inteiros').innerHTML = qtde_baloes;
	document.getElementById('baloes_estourados').innerHTML = 0;

	contagem_tempo(tempo_segundos + 1);

}


function contagem_tempo(segundos){

	segundos = segundos - 1;

	if(segundos <= -1){
		clearTimeout(timeId); // para a excução da função do setTimeout
		game_ouver();
		return false;
	}

	document.getElementById('cronometro').innerHTML = segundos;

	timeId = setTimeout("contagem_tempo("+segundos+")", 1000);

}

function game_ouver(){
	alert('Fim de jogo, tente novamente.')
}

function cria_baloes(qtde_baloes){

	for(var i = 1; i <= qtde_baloes; i++){

		var balao = document.createElement("img");
		balao.src = 'estourando_baloes/imagens/balao_azul_pequeno.png';
		balao.style.margin = '10px';
		balao.id = 'b'+i;
		balao.onclick = function(){
			estourar(this);
		};

		document.getElementById('cenario').appendChild(balao); 
		/*appenChild coloca as tags img	da div*/
	}
}

function estourar(e){

	var id_balao = e.id;

	document.getElementById(id_balao).src = 'estourando_baloes/imagens/balao_azul_pequeno_estourado.png';
	pontuacao(-1);
}

function pontuacao(acao){
	var baloes_inteiros = document.getElementById('baloes_inteiros').innerHTML;
	var baloes_estourados = document.getElementById('baloes_estourados').innerHTML;

	baloes_inteiros = parseInt(baloes_inteiros);

	baloes_estourados = parseInt(baloes_estourados);

	baloes_inteiros = baloes_inteiros + acao;
	baloes_estourados + baloes_estourados - acao;

	alert(baloes_inteiros);

	alert(baloes_estourados);
}