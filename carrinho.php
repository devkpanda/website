<?php 
	session_start();
	$acao = $_REQUEST["acao"]; // 0  remover, 1 adicionar 
	$prod = $_REQUEST["prod"];
	$qtd  = $_REQUEST["qtd"];
	
	
	if (isset($_REQUEST["acao"]) && isset($_REQUEST["prod"])){
		if($acao == 1){
			
			if ($_SESSION["carrinho"][$prod] > 0){
				$_SESSION["carrinho"][$prod] = $_SESSION["carrinho"][$prod]+1;
			}else{
				$_SESSION["carrinho"][$prod] = 1;
			}
	# acao = 1 adicionar ao carrinho, se não houver nada no carrinho deste produto específico, ele muda o valor pra 1,
	# caso já tenha 1, ele soma +1 e fica 2, e de assim em diante...		
		}if($acao == 0){
			if ($_SESSION["carrinho"][$prod] > 1){
				$_SESSION["carrinho"][$prod] = $_SESSION["carrinho"][$prod]-1;
			}else{
				unset($_SESSION["carrinho"][$prod]);
			}
		}
		#acao = 0 pra remover um só, mesma lógica do de cima
		if($acao == 2){
			unset($_SESSION["carrinho"][$prod]);
		}
		# mesma lógica, porem este limpa completamente a varíavel carrinho do determinado produto.
	}
	echo json_encode($_SESSION["carrinho"]);
# Alterações Jhonnata Acima: Código que o cleber passou, ele puxa do html o codproduto (Como id do button), a quantidade
# que é definida pela quantidade de vezes que voce clicou em solicitar, e a acao, que definirá o que vai acontencer,
# com tais variáveis. A propósito, tudo isso vem do indexprod.js.
?>