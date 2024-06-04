<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap');

        :root {
            --color-neutral-0: #ffffff;
            --color-neutral-10: #ffffff;
            --color-neutral-30: #a8a29e;
            --color-neutral-40: #000000;
        }

        * {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            letter-spacing: 1px;
        }

        main {
            height: 80vh;
        }

        footer {
    margin-top: 200px; /* Ajuste esse valor conforme necessário */
    width: 100%;
    color: var(--color-neutral-40);
}
        .footer-link {
            text-decoration: none;
        }

        #footer_content {
            background-color: var(--color-neutral-10);
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            padding: 3rem 3.5rem;
        }

        #footer_contacts h1 {
            margin-bottom: 0.75rem;
        }

        #footer_social_media {
            display: flex;
            gap: 2rem;
            margin-top: 1.5rem;
        }

        #footer_social_media .footer-link {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 2.5rem;
            width: 2.5rem;
            color: var(--color-neutral-40);
            border-radius: 50%;
            transition: all 0.4s;
        }

        #footer_social_media .footer-link i {
            font-size: 1.25rem;
        }

        #footer_social_media .footer-link:hover {
            opacity: 0.8;
        }

        #instagram {
            background: linear-gradient(#7f37c9, #ff2992, #ff9807);
        }

        #facebook {
            background-color: #4267b3;
        }

        #whatsapp {
            background-color: #25d366;
        }

        .footer-list {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            list-style: none;
        }

        .footer-list .footer-link {
            color: var(--color-neutral-30);
            transition: all 0.4s;
        }



        #footer_subscribe {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        #footer_subscribe p {
            color: var(--color-neutral-30);
        }

        #input_group {
            display: flex;
            align-items: center;
            background-color: var(--color-neutral-0);
            border-radius: 4px;
        }

        #input_group input {
            all: unset;
            padding: 0.75rem;
            width: 100%;
        }



        #input_group button:hover {
            opacity: 0.8;
        }

        #footer_copyright {
            display: flex;
            justify-content: center;
            background-color: var(--color-neutral-0);
            font-size: 0.9rem;
            padding: 1.5rem;
            font-weight: 100;
        }

        @media screen and (max-width: 768px) {
            #footer_content {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }
        }

        @media screen and (max-width: 426px) {
            #footer_content {
                grid-template-columns: repeat(1, 1fr);
                padding: 3rem 2rem;
            }
        }
    </style>
</head>

<body>
   
    <footer>
        <p class="tcl">TCC &lt;TechLearn /&gt; 2024</p>
        <p class="tcl-auto">Feito por um grupo de jovens estudantes de DS</p>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>Nossas Redes</h1>
                <p></p>

                <div id="footer_social_media">
                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Linguagens</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">PHP</a>
                </li>
                <li>
                    <a href="#" class="footer-link">SQL</a>
                </li>
                <li>
                    <a href="#" class="footer-link">CSS</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Onde estamos</h3>
                </li>
                <li>
                    <a href="#" class="footer-link">Aplicativo</a>
                </li>
                <li>
                    <a href="#" class="footer-link">Desktop</a>
                </li>
            </ul>

            <div id="footer_subscribe">
                <h3>Ajuda</h3>

                <p>
                   Termos de uso
                </p>

                <div id="input_group">
                    <input type="email" id="email">
                    <button>
                     
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2024 FATEC
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
</body>

</html>