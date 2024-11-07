// Adiciona um evento de clique ao botão "Clientes"
document.getElementById("clientesBtn").addEventListener("click", function() {
    // Redireciona para o arquivo clientes.php
    window.location.href = "clientes.php";
    console.log("teste");

});

// Adiciona um evento de clique ao botão "Produtos"
document.getElementById("produtosBtn").addEventListener("click", function() {
    // Redireciona para o arquivo produtos.php
    window.location.href = "produtos.php";
    console.log("teste");
});


// Adiciona um evento de clique ao botão "Voltar"
document.getElementById("voltarBtn").addEventListener("click", function() {
    // Redireciona para o arquivo index.php
    window.location.href = "../index.php";
});

