<?php

if (isset($_POST['submit'])) {

    include_once('configcontato.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    $result = mysqli_query($conexao, "INSERT INTO cliente(nome, email, mensagem) 
    VALUES ('$nome', '$email', '$mensagem')");

    header("Location: contato.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fui de Contatinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css" type="text/css">
    <link rel="stylesheet" href="contato.css" type="text/css">

</head>

<body>
    <nav>
        <!-- Menu de navegação aqui -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
            <div class="container">
            <img src="imagens1/Blue_and_Yellow_Illustrative_Travel_Agency_Logo-removebg-preview.png" alt="Logotipo" style="height: 80px;"> <!-- Ajuste o caminho e o alt conforme necessário -->
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.html">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="destino.html">Destino</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="promocoes.html">Promoções</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"> Cadastre-se </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cadastro.php">Cliente</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="acesso.php">Acesso</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex" role="search" action="https://www.google.com/search" method="GET">
                        <input class="form-control me-2" type="search" name="q" placeholder="Digite aqui"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>


                </div>
            </div>
        </nav>
    </nav>

    <main> <!-- Conteúdo principal aqui -->
        <br><br>

        <div class="container container-contato mt-5">
            <h1>Contato</h1>
            <p>Entre em contato conosco através do formulário abaixo:</p>
            <form action="contato.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="mensagem" class="form-label">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="5" required></textarea>
                </div>
                <input type="submit" name="submit" id="submit">
            </form>
        </div>

    </main> <!-- Encerra o conteúdo principal-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>