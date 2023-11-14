<?php
    require_once "../vendor/autoload.php";
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Cabeçalho</title>
</head>
<body>
    <header>
        <nav class="menu">
            <span class="logotipo"><a href="index.php"> <img src="../imagens/pet1.png" alt="">  Salvapets</a></span>
            <ul>
                <li class="links-menu"><a href="">Cães</a></li>
                <li class="links-menu"><a href="">Gatos</a></li>
                <li class="links-menu"><a href="">Ajuda</a></li>
                <li class="links-menu"><a href="">Quem somos</a></li>
                <li class="links-menu"><a href="">Contato</a></li>
            </ul>
            <button class="bi bi-box-arrow-in-right botoes"> Entrar</button>
        </nav>

        <nav class="menu-responsivo">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>  

                <div class="logo">
                    <h1>user</h1>
                </div>

                <div class="menu-items">
                    <li><a href="#">Cães</a></li>
                    <li><a href="#">Gatos</a></li>
                    <li><a href="#">Ajuda</a></li>
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Contato</a></li>
                </div>
            </div>
        </nav>

    </header>
    <main>

</body>
</html>