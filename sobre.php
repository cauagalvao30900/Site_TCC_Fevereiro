<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Estilo CSS atualizado */
        nav.nav {
            width: 100%;
            max-width: 100%;
            padding: 1.5rem 2rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: #363636;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
            /* Garante que a largura inclua padding e borda */
        }

        nav.nav .titulo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav.nav .menus {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            margin: 0;
            /* Removendo a margem padrão */
            padding: 0;
            /* Removendo o preenchimento padrão */
        }

        nav.nav .menus li {
            list-style: none;
            /* Removendo os marcadores de lista */
        }

        nav.nav .menus li a {
            text-decoration: none;
            color: #333333;
            font-size: 1.2rem;
            font-weight: bold;
        }

        a.github.nav {
            color: #363636;
            font-size: 1.2rem;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>

<body>
<nav class="nav">
    <span class="titulo">TechLearn</span>
    <ul class="menus">
      <li><a href="index.php" class="nav">Home</a></li>
      <li><a href="comunidade.php" class="nav">Comunidade</a></li>
      <li><a href="sobre.php" class="nav">Sobre Nós</a></li>
      <li><a href="politica.php" class="nav">Política de Privacidade</a></li>
    </ul>
    <img src="assets/L.png" style="width: 2.5%;">
  </nav>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Navbar</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
            /* Estilo CSS atualizado */
            nav.nav {
                width: 100%;
                max-width: 100%;
                padding: 1.5rem 2rem;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 1000;
                background-color: #363636;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                box-sizing: border-box;
                /* Garante que a largura inclua padding e borda */
            }

            nav.nav .titulo {
                font-size: 1.5rem;
                font-weight: bold;
                color: white;
            }

            nav.nav .menus {
                display: flex;
                gap: 1.5rem;
                justify-content: center;
                margin: 0;
                /* Removendo a margem padrão */
                padding: 0;
                /* Removendo o preenchimento padrão */
            }

            nav.nav .menus li {
                list-style: none;
                /* Removendo os marcadores de lista */
            }

            nav.nav .menus li a {
                text-decoration: none;
                color: white;
                font-size: 1.2rem;
                font-weight: bold;
            }

            a.github.nav {
                color: #333333;
                font-size: 1.2rem;
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: "Poppins", sans-serif;
                }

                body {
                    background: #F6F9FF;
                    height: 100vh;
                    width: 100%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    color: #434343;
                    font-size: 16px;
                }

                main.cards {
                    display: flex;
                    padding: 32px;
                    overflow-x: auto;
                    /* Adicionado para permitir rolagem horizontal */
                    scroll-snap-type: x mandatory;
                    /* Adicionado para rolar de forma suave até os cards */
                }

                main.cards::-webkit-scrollbar {
                    display: none;
                    /* Oculta a barra de rolagem */
                }

                main.cards section.card {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
                    background: #363636;
                    padding: 1rem 1.5rem;
                    border-radius: 10px;
                    height: 400px;
                    /* Altura fixa */
                    width: 300px;
                    /* Largura fixa */
                    margin-left: 32px;
                    scroll-snap-align: start;
                    /* Garante que os cards rolem de forma suave até o início do card */
                    position: relative;
                    /* Para posicionar o botão */
                    color: white
                }

                main.cards section.card:first-child {
                    margin-left: 0;
                }

                main.cards section.card .icon {
                    width: 64px;
                    height: 64px;
                    border-radius: 20px;
                    /* Arredonda a imagem */
                }

                main.cards section.card img {
                    width: 100%;
                    border-radius: 20px;
                    /* Arredonda a imagem */
                }

                main.cards section.card h3 {
                    font-size: 100%;
                    margin: 16px 0;
                }

                main.cards section.card span {
                    font-weight: 300;
                    max-width: 240px;
                    font-size: 80%;
                    margin-bottom: 16px;
                }

                main.cards section.card button {
                    padding: 0.5rem 1rem;
                    text-transform: uppercase;
                    border-radius: 32px;
                    border: 0;
                    cursor: pointer;
                    font-size: 80%;
                    font-weight: 500;
                    color: #fff;
                    margin-bottom: 16px 0;
                    position: absolute;
                    /* Posição absoluta para o botão */
                    bottom: 10px;
                    /* Distância do botão até a parte inferior */
                    left: 50%;
                    /* Posiciona o botão no meio horizontalmente */
                    transform: translateX(-50%);
                    /* Centraliza o botão */
                    background-color: #000;
                    /* Cor de fundo do botão */
                }

                main.cards section.card.extra1 button,
                main.cards section.card.extra2 button,
                main.cards section.card.extra3 button,
                main.cards section.card.extra4 button,
                main.cards section.card.extra5 button,
                main.cards section.card.extra6 button {
                    background: #00ffff;
                    color: black;
                }

                main.cards section.card.extra1 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                main.cards section.card.extra2 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                main.cards section.card.extra3 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                main.cards section.card.extra4 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                main.cards section.card.extra5 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                main.cards section.card.extra6 {
                    box-shadow: 20px 20px 50px -30px #00ffff;
                }

                .arrow {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    width: 32px;
                    height: 32px;
                    background: rgba(0, 0, 0, 0.5);
                    border-radius: 50%;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    cursor: pointer;
                    z-index: 1;
                }

                .arrow img {
                    width: 20px;
                    height: 20px;
                    transform: rotate(90deg);
                    filter: invert(1);
                }

                .arrow.left {
                    left: 16px;
                }

                .arrow.right {
                    right: 16px;
                }

                @media screen and (max-width: 720px) {
                    main.cards {
                        flex-direction: column;
                        align-items: center;
                    }

                    main.cards section.card {
                        margin-left: 0;
                        margin-bottom: 32px;
                    }

                    main.cards section.card:last-child {
                        margin-bottom: 0;
                    }

                    main.cards section.card button {
                        font-size: 70%;
                    }
                }

                /* Estilos do modal */
                .modal {
                    display: none;
                    /* Oculta o modal por padrão */
                    position: fixed;
                    /* Posição fixa para cobrir toda a tela */
                    z-index: 1;
                    /* Empilha o modal acima do conteúdo */
                    left: 0;
                    top: 0;
                    width: 100%;
                    height: 100%;
                    overflow: auto;
                    /* Adiciona rolagem se necessário */
                    background-color: rgba(0, 0, 0, 0.4);
                    /* Cor de fundo com opacidade */
                }

                .modal-content {
                    background-color: #fefefe;
                    margin: 15% auto;
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%;
                    border-radius: 10px;
                }

                .close {
                    color: #aaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                    cursor: pointer;
                }

                .close:hover,
                .close:focus {
                    color: black;
                    text-decoration: none;
                }
            </style>
        </head>

        <body>
            <main class="cards">
                <section class="card extra1">
                    <div class="icon">
                        <img src="assets/caua.jpg" alt="ft1.jpg">
                    </div>
                    <h3>Cauã Galvão</h3>
                    <span>Programador Mobile/Web Database, 17 Anos</span>
                    <button>Contato</button>
                </section>
                <section class="card extra2">
                    <div class="icon">
                        <img src="assets/tiago.jpg" alt="Shop here.">
                    </div>
                    <h3>Tiago</h3>
                    <span>Design, 18 Anos</span>
                    <button>Contato</button>
                </section>
                <section class="card extra3">
                    <div class="icon">
                        <img src="assets/erick.jpg" alt="About us.">
                    </div>
                    <h3>Erick</h3>
                    <span>Programador Web, 17 Anos</span>
                    <button>Contato</button>
                </section>
                <section class="card extra4">
                    <div class="icon">
                        <img src="assets/victor.jpg" alt="Extra card 1.">
                    </div>
                    <h3>Victor</h3>
                    <span>Comunicador Direto/Design, 18 Anos</span>
                    <button>Contato</button>
                </section>
                <section class="card extra5">
                    <div class="icon">
                        <img src="assets/heitor.jpg" alt="Extra card 2.">
                    </div>
                    <h3>Heitor</h3>
                    <span>Testador/é isso ai, 18Anos</span>
                    <button>Contato</button>
                </section>
                <section class="card extra6">
                    <div class="icon">
                        <img src="assets/guilherme.jpg" alt="Extra card 3.">
                    </div>
                    <h3>Guilherme</h3>
                    <span>Programador Web, 18 Anos</span>
                    <button>Contato</button>
                </section>
            </main>

            <!-- Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <p id="modal-info">Conteúdo do modal...</p>
                </div>
            </div>

            <script>
                // Função para rolar os cards para a esquerda ou direita
                function scrollCards(direction) {
                    const container = document.querySelector('.cards');
                    const scrollAmount = 300; // Quantidade de rolagem em pixels
                    container.scrollBy({
                        left: scrollAmount * direction,
                        behavior: 'smooth' // Rola de forma suave
                    });
                }

                // Dados de exemplo (substitua-os pelos seus próprios dados)
                const pessoas = [
                    { nome: 'Cauã Galvão', idade: '17 Anos', linkedin: 'https://www.linkedin.com/in/seu-linkedin', github: 'https://github.com/seu-github', gmail: 'cauadev20@gmail.com' },
                    { nome: 'Tiago', idade: '18 Anos', linkedin: '#', github: '#', gmail: '#' },
                    { nome: 'Erick', idade: '17 Anos', linkedin: '#', github: '#', gmail: '#' },
                    { nome: 'Victor', idade: '18 Anos', linkedin: '#', github: '#', gmail: '#' },
                    { nome: 'Heitor', idade: '18 Anos', linkedin: '#', github: '#', gmail: '#' },
                    { nome: 'Guilherme', idade: '18 Anos', linkedin: '#', github: '#', gmail: '#' }
                ];

                // Centralizar botões de contato
                const buttons = document.querySelectorAll('.card button');
                buttons.forEach(button => {
                    button.style.marginLeft = 'auto';
                    button.style.marginRight = 'auto';
                });

                // Abrir modal ao clicar no botão de contato
                buttons.forEach((button, index) => {
                    button.addEventListener('click', function () {
                        const pessoa = pessoas[index];
                        // Atualizar o título e as informações do modal com base na pessoa
                        document.getElementById('modal-info').innerHTML = `
                    <p>Nome: ${pessoa.nome}</p>
                    <p>Idade: ${pessoa.idade}</p>
                    <p><a href="${pessoa.linkedin}" target="_blank">LinkedIn</a></p>
                    <p><a href="${pessoa.github}" target="_blank">GitHub</a></p>
                    <p><a href="${pessoa.gmail}" target="_blank">Gmail</a></p>
                `;
                        document.getElementById('myModal').style.display = 'block';
                    });
                });

                // Fechar o modal ao clicar no botão "X" ou fora da área do modal
                const closeBtns = document.querySelectorAll('.close');
                closeBtns.forEach(closeBtn => {
                    closeBtn.addEventListener('click', function () {
                        document.getElementById('myModal').style.display = 'none';
                    });
                });

                window.onclick = function (event) {
                    const modal = document.getElementById('myModal');
                    if (event.target == modal) {
                        modal.style.display = 'none';
                    }
                };
            </script>
        </body>

        </html>

    </body>

    </html>

</body>

</html>