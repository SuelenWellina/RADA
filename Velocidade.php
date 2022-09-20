<html>
<head>
    <meta charset="UTF-8">
     <link  href="css/bootstrap.css" rel="stylesheet" >
    <title>Multa</title>
	
</head>
	<body>

	<center class="border border-danger w-50 h-80 text-center mx-auto m-5 shadow">
		<h3 class="text-center  m-3">Valor da Multa</h3>
		<?php
		
		// Classe class Claculo, metodo funcyion...(){}, objeto instancia da classe,

		class Velocidade{ //Classe
				public $nome;//atributos
				public $velmax;
				public $velmot;
				public $multa10;
				public $multa11;
				public $multa31;
				public $total;
				public $resultado;
				
				
			function calcularMulta($nome,$velmax,$velmot){//Metodo
						
				
				if($velmax == $velmot){//Correções: tirei este if do geral e colocquei antes de calcular a multa 
					
					return "<h1>Nome<p>$nome</h1>
							<h1>Velocidade da Via<p>$velmax</h1>
							<h1>Velocidade do Motorista<p>$velmot</h1>
							Você não tem multa!!!";
				
				
				}
						$multa10=$velmax+10;
						$multa11=$velmax+30;
						$multa31=$velmax+31;
						
						
						if ($multa10 >= $velmot ){//Correções: troque o == pelo >= em todas as condiçoes. 
							
							return "<h1>Nome<p>$nome</h1>
									<h1>Velocidade da Via<p>$velmax</h1>
									<h1>Velocidade do Motorista<p>$velmot</h1>
									Sua Multa foi de R$ 50,00 reais";
						}
						elseif($multa11 >= $velmot ){
							
							return "<h1>Nome<p>$nome</h1>
									<h1>Velocidade da Via<p>$velmax</h1>
									<h1>Velocidade do Motorista<p>$velmot</h1>
									Sua Multa foi de R$ 100,00 reais";
							
						}
						elseif($multa31 >=$velmot ){
							
							return "<h1>Nome<p>$nome</h1>
									<h1>Velocidade da Via<p>$velmax</h1>
									<h1>Velocidade do Motorista<p>$velmot</h1>
									Sua Multa foi de R$ 200,00 reais";
							
						}
					
						else{
									
									return "Você não tem multa!!!";
								}
					
					
			}
			function imprimir($resultado){
				
				echo $resultado;
				
			}//fim mettodo

		}//fim classe

		//instacinando a classe
		$motorista = new Velocidade;		
		//objeto acessando o metodo calcular da "Classe Votacao"																																																																																																																																							
		$resultado = $motorista -> calcularMulta($_POST["nome"],$_POST["velmax"],$_POST["velmot"]); 
		//objeto acessando o metodo imprimir da "Classe Votacao"
		$motorista -> imprimir($resultado); 
		?>
	</center>	
	</body>
</html>

	