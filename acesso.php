<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fui de Acesso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="acesso.css" type="text/css">
</head>

<body>
    <nav>
        <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top border-bottom-0">
            <div class="container">
            <img src="imagens1/Blue_and_Yellow_Illustrative_Travel_Agency_Logo-removebg-preview.png" alt="Logotipo" style="height: 80px;"> <!-- Ajuste o caminho e o alt conforme necessário -->

                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Cadastre-se </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="cadastro.php">Cliente</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="acesso.html">Acesso</a></li>
                            </ul>
                        </li>
                    </ul>

                    <form class="d-flex" role="search" action="https://www.google.com/search" method="GET">
                        <input class="form-control me-2" type="search" name="q" placeholder="Dê um Google" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>

                </div>
            </div>
        </nav>
    </nav>

    <main>
        <br><br>
        <div class="login-container">
            <h1>Faça login</h1>
            <form action="testLogin.php" method="POST">
                <div class="input-container">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <div class="input-container">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="senha" required>
                </div>
                <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
</body>

</html>