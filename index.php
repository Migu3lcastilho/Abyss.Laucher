
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

   <section class="vitrine" aria-label="Jogos em destaque">
        <article class="jogo-principal" id="jogo-principal">
            <div class="jogo-conteudo">
                <img class="logo-jogo" src="./imagens/remothered nome.png" alt="Remothered: Red Nun’s Legacy" data-logo>
                <p class="disponibilidade" data-status>JÁ DISPONÍVEL</p>
                <p class="descricao" data-descricao>Uma mãe. Uma filha desaparecida. Um mistério esperando pra ser desvendado</p>
                <p class="preco" data-preco>R$ 80,00</p>
                <div class="acoes">
                    <a class="comprar" href="#">Compre agora</a>
                    <button type="button" aria-label="Presentear"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 10h18v11H3zM2 6h20v4H2zM12 6v15M12 6c-5 0-7-1-7-3a2 2 0 0 1 2-2c2 0 5 5 5 5Zm0 0c5 0 7-1 7-3a2 2 0 0 0-2-2c-2 0-5 5-5 5Z"/></svg></button>
                    <button type="button" aria-label="Favoritar"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 3.5h12v18l-6-4-6 4z"/></svg></button>
                </div>
            </div>
        </article>
        <nav class="lista-jogos" aria-label="Escolher jogo em destaque">
            <button class="jogo-opcao" type="button" data-jogo="vampyr" aria-pressed="false"><img src="./imagens/Vampir.png" alt=""><span>Vampir</span><i></i></button>
            <button class="jogo-opcao selecionado" type="button" data-jogo="remothered" aria-pressed="true"><img src="./imagens/remothered.png" alt=""><span>Remothered:<br> Red Nun’s...</span><i></i></button>
            <button class="jogo-opcao" type="button" data-jogo="lego" aria-pressed="false"><img src="./imagens/LEGO Batman.png" alt=""><span>Lego Batman: O ..</span><i></i></button>
            <button class="jogo-opcao" type="button" data-jogo="corsair" aria-pressed="false"><img src="./imagens/Corsair.png" alt=""><span>Corsair cove</span><i></i></button>
        </nav>
   </section>


    <script>
    (() => {
        const jogos = {
            vampyr: { banner: './imagens/vampyr banner.jpg', logo: './imagens/vampyr logo.png', alt: 'Vampyr', descricao: 'Em uma Londres tomada pela doença, escolha quem vive e quem morre.', preco: 'R$ 59,99' },
            remothered: { banner: './imagens/Remothered Banner.png', logo: './imagens/remothered nome.png', alt: 'Remothered: Red Nun’s Legacy', descricao: 'Uma mãe. Uma filha desaparecida. Um mistério esperando pra ser desvendado', preco: 'R$ 80,00' },
            lego: { banner: './imagens/LEGO batman banner.jpg', logo: './imagens/lego batman logo.png', alt: 'LEGO Batman', descricao: 'Vista a capa, proteja Gotham e viva uma aventura cheia de ação.', preco: 'R$ 99,99' },
            corsair: { banner: './imagens/Corsair banner.jpg', logo: './imagens/Corsair.png', alt: 'Corsair Cove', descricao: 'Explore novos mares e descubra os segredos de Corsair Cove.', preco: 'R$ 49,99' }
        };
        const principal = document.querySelector('#jogo-principal');
        const botoes = [...document.querySelectorAll('.jogo-opcao')];
        let atual = 1;
        let timer;
        function selecionar(indice, automatico = false) {
            atual = indice;
            const botao = botoes[indice];
            const jogo = jogos[botao.dataset.jogo];
            principal.style.backgroundImage = `linear-gradient(90deg, rgba(0,0,0,.86), rgba(0,0,0,.28) 58%, rgba(0,0,0,.05)), url("${jogo.banner}")`;
            principal.querySelector('[data-logo]').src = jogo.logo;
            principal.querySelector('[data-logo]').alt = jogo.alt;
            principal.querySelector('[data-descricao]').textContent = jogo.descricao;
            principal.querySelector('[data-preco]').textContent = jogo.preco;
            botoes.forEach((item, i) => {
                item.classList.toggle('selecionado', i === indice);
                item.setAttribute('aria-pressed', i === indice ? 'true' : 'false');
                item.style.setProperty('--progresso', '0%');
            });
            clearInterval(timer);
            let progresso = 0;
            timer = setInterval(() => {
                progresso += 2;
                botao.style.setProperty('--progresso', `${progresso}%`);
                if (progresso >= 100) selecionar((atual + 1) % botoes.length, true);
            }, 200);
        }
        botoes.forEach((botao, indice) => botao.addEventListener('click', () => selecionar(indice)));
        selecionar(atual, true);
    })();
    </script>

    <?php
    require './view/footer.php';
    ?>
</body>
</html>
