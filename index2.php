<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: sans-serif;
        }

        /*Main*/

        main section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5rem 10rem;
            position: relative;
            /* Adicionado */
        }

        .main-text img {
            width: 15rem;
            margin-bottom: 3vh;
        }

        .main-text h3 {
            font-size: 3.5rem;
            margin-bottom: 2rem;
        }

        .main-text p {
            margin-bottom: 1.5rem;
        }

        .main-text h6 {
            color: #999;
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .main-text .btn {
            padding: 10px 25px;
            background: #0071e3;
            border-radius: 20px;
            color: #fff;
            font-size: 1.5rem;
            transition: all 0.5s;
        }

        .main-text .btn:hover {
            opacity: .85;
        }

        .main-text .text h5 {
            font-size: 1rem;
            color: #444;
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .main-text .content {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .main-text .content span {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 1px 1px #888;
            transition: all 0.5s;
        }

        .main-text .content span:hover {
            opacity: .80;
        }



        .main-img {
            transition: all 1s ease;
            z-index: 100;
        }




        .main-img img {
            width: 350px;
            transform: rotate(-7deg);
        }
    </style>
    <title>iPhone</title>
</head>

<body>
    <main>
        <section>
            <div class="main-text">
                <img src="https://cdn.discordapp.com/attachments/1134949806679281714/1247436129767260180/B1Mqzy9G3VFeAAAAAElFTkSuQmCC.png?ex=666004ed&is=665eb36d&hm=92f58a21d303daade3cd2e0bd8ad942f84577ac6ebea85f1dc0b67ea73c5dde0&" alt="">
                <h3>Video Aulas.</h3>
                <p>Em nosso aplicativo voce tem disponivel diversas video aulas <br> Podendo escolher uma variedade de
                    linguagens</p>
                <h6>GRATUITAMENTE</h6>
                <a href="#" class="btn">Baixar</a>
                <div class="text">
                    <h5>Escolha qual aula assistir em qualquer lugar</h5>
                </div>
                <div class="content">

                </div>
            </div>
            <div class="main-img">
                <img src="assets/av.png">
            </div>

        </section>
    </main>

    <script type="text/javascript">
        /*Função de mudar o celular*/
        function imgSlider(e) {
            document.querySelector('#phone').src = e;
        }
        /*Função de mudar a cor do circulo*/
        function circleChange(color) {
            const circle = document.querySelector('.circle');
            circle.style.background = color;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>