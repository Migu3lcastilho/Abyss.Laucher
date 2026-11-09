
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abyss Laucher</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <?php
    require './view/header.php'; 
    ?>


   <div class="banner">
    <h1>Destaque da semana</h1>
    <img src="./imagens/Banner.png" alt="Destaque da semana: Phantom Blade Zero">
   </div>


     <div class="destaques">
        <div class="titulo">
            <h1>Jogos em destaque</h1>
            <div class="linha"></div>
        </div>

        <div class="jogos">
            <div class="iten">
                <img src="./imagens/Fifa.png" alt="EA Sports FC 27">
                <div class="informacoes">
                    <h2>EA Sports FC 27</h2>
                    <p>Esportes</p>
                    <div class="final">
                        <h3>R$ 349,99</h3>
                        <a href="#">Ver jogo <span>›</span></a>
                    </div>
                </div>
            </div>

            
        </div>
     </div>

    <?php
    require './view/footer.php';
    ?>
</body>
</html>
