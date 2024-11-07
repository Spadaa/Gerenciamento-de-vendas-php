<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
    <?php 
    require("conecta.php");

    $query = $mysqli->query("SELECT * FROM vendas");
    echo $mysqli->error;

    echo "
    <table border='1' width='100%'>
        <tr>
            <th>ID Venda</th>
            <th>Nome Cliente</th>
            <th>Celular Cliente</th>
            <th>Email Cliente</th>
            <th>Produto 1</th>
            <th>Produto 2</th>
            <th>Produto 3</th>
            <th>Frete</th>
            <th>Valor Total</th>
            <th>Data da Venda</th>
            <th>Ações</th>
        </tr>";

    while ($tabela = $query->fetch_assoc()){
        echo "
        <tr>
            <td align='center'>$tabela[id_venda]</td>
            <td align='center'>$tabela[nome_cliente]</td>
            <td align='center'>$tabela[celular_cliente]</td>
            <td align='center'>$tabela[email_cliente]</td>
            <td align='center'>$tabela[produto1_nome]</td>
            <td align='center'>$tabela[produto2_nome]</td>
            <td align='center'>$tabela[produto3_nome]</td>
            <td align='center'>$tabela[tipo_frete]</td>
            <td align='center'>R$ $tabela[valor_total]</td>
            <td align='center'>$tabela[data_venda]</td>
            <td width='120'>
                <a href='exc_venda.php?excluir=$tabela[id_venda]'>[excluir]</a>
                <a href='alt_venda.php?alterar=$tabela[id_venda]'>[alterar]</a>
            </td>
        </tr>";
    }

    echo "</table>";

    $mysqli->close();
    ?>
</body>
