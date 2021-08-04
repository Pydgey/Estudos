<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculo de Consumo de Combustível</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Resultado do cálculo de consumo</h2>
			<div class="conteudo-painel">
                <form action="calculo.php" method="POST">
                <label for="distancia">Distancia em kilometros a ser percorrida</label>
                <input type="number" name="distancia" required />

                <label for="autonomia">Consumo de combustivel do veiculo</label>
                <input type="number" name="autonomia" required/>
				
				<button class="botao" type="submit">calcular</button>
                </form>
			</div>
		</div>
	</main>
</body>
</html>