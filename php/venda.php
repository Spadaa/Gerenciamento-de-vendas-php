<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Tela de Venda</title>
</head>
<body>
	<h1>Tela de Venda</h1>

	<form action="processa_venda.php" method="POST">
		<h2>Dados do Cliente</h2>
		<label for="nome_cliente">Nome:</label>
		<input type="text" id="nome_cliente" name="nome_cliente" required><br><br>

		<label for="celular">Celular:</label>
		<input type="text" id="celular" name="celular" required><br><br>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br><br>

		<h2>Venda de Produtos</h2>
		<label for="produto1">Nome do Produto 1:</label>
		<input type="text" id="produto1" name="produto1" required>
		<label for="preco1">Preço:</label>
		<input type="number" id="preco1" name="preco1" step="0.01" required>
		<label for="quantidade1">Quantidade:</label>
		<input type="number" id="quantidade1" name="quantidade1" min="1" required><br><br>

		<label for="produto2">Nome do Produto 2:</label>
		<input type="text" id="produto2" name="produto2" required>
		<label for="preco2">Preço:</label>
		<input type="number" id="preco2" name="preco2" step="0.01" required>
		<label for="quantidade2">Quantidade:</label>
		<input type="number" id="quantidade2" name="quantidade2" min="1" required><br><br>

		<label for="produto3">Nome do Produto 3:</label>
		<input type="text" id="produto3" name="produto3" required>
		<label for="preco3">Preço:</label>
		<input type="number" id="preco3" name="preco3" step="0.01" required>
		<label for="quantidade3">Quantidade:</label>
		<input type="number" id="quantidade3" name="quantidade3" min="1" required><br><br>

		<h2>Opções de Frete</h2>
		<select name="frete" required>
			<option value="economico">Econômico - R$10,00</option>
			<option value="expresso">Expresso - R$20,00</option>
			<option value="super_expresso">Super Expresso - R$30,00</option>
		</select><br><br>

		<button type="submit">Finalizar Compra</button>
	</form>

	<a href="../index.php">Voltar</a>
</body>
</html>
