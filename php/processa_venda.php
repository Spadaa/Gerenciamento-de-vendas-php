<?php
$conn = new mysqli("localhost", "root", "", "lojafib");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$nome_cliente = $_POST['nome_cliente'];
$celular_cliente = $_POST['celular'];
$email_cliente = $_POST['email'];

$produto1_nome = $_POST['produto1'];
$produto1_preco = $_POST['preco1'];
$produto1_quantidade = $_POST['quantidade1'];

$produto2_nome = $_POST['produto2'];
$produto2_preco = $_POST['preco2'];
$produto2_quantidade = $_POST['quantidade2'];

$produto3_nome = $_POST['produto3'];
$produto3_preco = $_POST['preco3'];
$produto3_quantidade = $_POST['quantidade3'];

$tipo_frete = $_POST['frete'];
$valor_frete = ($tipo_frete == "economico") ? 10.00 : (($tipo_frete == "expresso") ? 20.00 : 30.00);

$total_produtos = ($produto1_preco * $produto1_quantidade) + 
                  ($produto2_preco * $produto2_quantidade) + 
                  ($produto3_preco * $produto3_quantidade);

$valor_total = $total_produtos + $valor_frete;

$sql = "INSERT INTO vendas 
        (nome_cliente, celular_cliente, email_cliente, 
         produto1_nome, produto1_preco, produto1_quantidade, 
         produto2_nome, produto2_preco, produto2_quantidade, 
         produto3_nome, produto3_preco, produto3_quantidade, 
         tipo_frete, valor_frete, valor_total) 
        VALUES 
        ('$nome_cliente', '$celular_cliente', '$email_cliente', 
         '$produto1_nome', '$produto1_preco', '$produto1_quantidade', 
         '$produto2_nome', '$produto2_preco', '$produto2_quantidade', 
         '$produto3_nome', '$produto3_preco', '$produto3_quantidade', 
         '$tipo_frete', '$valor_frete', '$valor_total')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Compra realizada com sucesso!</h1>";
    echo "<p>Resumo da Compra:</p>";
    echo "<p>Cliente: $nome_cliente</p>";
    echo "<p>Celular: $celular_cliente</p>";
    echo "<p>Email: $email_cliente</p>";
    echo "<h2>Produtos:</h2>";
    echo "<p>$produto1_nome - Preço: R$ $produto1_preco - Quantidade: $produto1_quantidade</p>";
    echo "<p>$produto2_nome - Preço: R$ $produto2_preco - Quantidade: $produto2_quantidade</p>";
    echo "<p>$produto3_nome - Preço: R$ $produto3_preco - Quantidade: $produto3_quantidade</p>";
    echo "<p>Frete: R$ $valor_frete</p>";
    echo "<p><strong>Total da Compra: R$ $valor_total</strong></p>";
} else {
    echo "Erro ao realizar a compra: " . $conn->error;
}

$conn->close();
?>
