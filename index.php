<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo à Tech Plus</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #003366;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header p {
            margin: 5px 0 0;
            font-size: 1.2em;
            color: #ccc;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .container h2 {
            font-size: 2em;
            color: #003366;
        }

        .container p {
            font-size: 1.2em;
            color: #666;
        }

        .container a {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            background-color: #006699;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1.2em;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .container a:hover {
            background-color: #005580;
        }

        footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
    
<body>
    <header>
        <h1>Tech Plus</h1>
        <p>A solução ideal para suas necessidades tecnológicas</p>
    </header>
    <h2></h2>
    <img src="image1.jpeg" alt="image1.jpeg">
    <h2></h2>
    <img src="image2.jpeg" alt="image2.jpeg">
    <h2></h2>
    <img src="image3.jpeg" alt="image3.jpeg">


    <div class="container">
        <h2>Bem-vindo ao sistema de gerenciamento da Tech Plus!</h2>
        <p>Abaixo estão as opções de cadastro e gestão para cada uma das tabelas do sistema.</p>  
    </div>
    <div class="loja">
        <h1>Menu da TechPlus</h1>
        <button id="cadastroBtn">Cadastro</button><br/><br/>
        <button id="vendaBtn">Venda</button>
    </div>
    <script type="text/javascript" src="js/menu.js"></script>

    <footer>
        <p>&copy; 2024 Tech Plus. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
