<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Telaine | Contato</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- MENU -->

    <nav class="navbar">

        <div class="logo_menu">

            <img src="imagens/logo_telaine.png"
                 alt="Logo da Telaine"
                 class="logo">

        </div>


        <ul class="links_menu">

            <li>
                <a href="index.php">
                    Início
                </a>
            </li>

            <li>
                <a href="catalogo.php">
                    Catálogo
                </a>
            </li>

            <li>
                <a href="sobre.php">
                    Sobre
                </a>
            </li>

            <li>
                <a href="contato.php" class="ativado">
                    Contato
                </a>
            </li>

        </ul>

    </nav>


    <!-- CONTEÚDO PRINCIPAL -->

    <main>


        <!-- ==================== INTRODUÇÃO ==================== -->

        <section class="contato-introducao">

            <div class="contato-introducao-conteudo">

                <span class="subtitulo">
                    FALE CONOSCO
                </span>

                <h1>
                    Entre em contato
                </h1>

                <p>
                    Tem alguma dúvida, sugestão ou quer saber mais
                    sobre a Telaine? Estamos aqui para ouvir você.
                </p>

            </div>

        </section>


        <!-- ==================== ÁREA DE CONTATO ==================== -->

        <section class="contato">

            <div class="contato-conteudo">


                <!-- ==================== INFORMAÇÕES ==================== -->

                <div class="contato-informacoes">

                    <span class="subtitulo">
                        NOSSOS CANAIS
                    </span>

                    <h2>
                        Vamos conversar?
                    </h2>

                    <p>
                        Estamos sempre abertos para receber dúvidas,
                        sugestões e mensagens de quem deseja conhecer
                        melhor a Telaine.
                    </p>


                    <!-- INSTAGRAM -->

                    <div class="contato-item">

                        <div class="contato-icone">
                            📷
                        </div>

                        <div>

                            <h3>
                                Instagram
                            </h3>

                            <a href="https://www.instagram.com/telaine_tecidos"
                               target="_blank"
                               rel="noopener noreferrer">

                                @telaine_tecidos

                            </a>

                        </div>

                    </div>


                    <!-- E-MAIL -->

                    <div class="contato-item">

                        <div class="contato-icone">
                            ✉️
                        </div>

                        <div>

                            <h3>
                                E-mail
                            </h3>

                            <p class="campo-vazio">
                                <!-- E-mail será adicionado futuramente -->
                            </p>

                        </div>

                    </div>


                    <!-- TELEFONE -->

                    <div class="contato-item">

                        <div class="contato-icone">
                            📞
                        </div>

                        <div>

                            <h3>
                                Telefone
                            </h3>

                            <p class="campo-vazio">
                                <!-- Telefone será adicionado futuramente -->
                            </p>

                        </div>

                    </div>

                </div>


                <!-- ==================== FORMULÁRIO ==================== -->

                <div class="contato-formulario-container">


                    <!-- BOTÃO -->

                    <button
                        type="button"
                        class="botao-formulario"
                        onclick="mostrarFormulario()">

                        Enviar uma mensagem

                    </button>


                    <!-- FORMULÁRIO -->

                    <div
                        class="contato-formulario"
                        id="formulario">

                        <form action="#" method="post">


                            <!-- NOME -->

                            <div class="campo">

                                <label for="nome">
                                    Nome
                                </label>

                                <input
                                    type="text"
                                    id="nome"
                                    name="nome"
                                    placeholder="Digite seu nome"
                                    required>

                            </div>


                            <!-- E-MAIL -->

                            <div class="campo">

                                <label for="email">
                                    E-mail
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    placeholder="Digite seu e-mail"
                                    required>

                            </div>


                            <!-- TELEFONE -->

                            <div class="campo">

                                <label for="telefone">
                                    Telefone
                                </label>

                                <input
                                    type="tel"
                                    id="telefone"
                                    name="telefone"
                                    placeholder="Digite seu telefone">

                            </div>


                            <!-- ASSUNTO -->

                            <div class="campo">

                                <label for="assunto">
                                    Assunto
                                </label>

                                <input
                                    type="text"
                                    id="assunto"
                                    name="assunto"
                                    placeholder="Digite o assunto"
                                    required>

                            </div>


                            <!-- MENSAGEM -->

                            <div class="campo">

                                <label for="mensagem">
                                    Mensagem
                                </label>

                                <textarea
                                    id="mensagem"
                                    name="mensagem"
                                    rows="6"
                                    placeholder="Digite sua mensagem"
                                    required></textarea>

                            </div>


                            <!-- ENVIAR -->

                            <button type="submit">
                                Enviar mensagem
                            </button>


                        </form>

                    </div>

                </div>

            </div>

        </section>


        <!-- ==================== MENSAGEM FINAL ==================== -->

        <section class="contato-final">

            <span class="subtitulo">
                TELAINE
            </span>

            <h2>
                Sua mensagem faz parte da nossa história.
            </h2>

            <p>
                Reaproveitar, criar e transformar.
            </p>

        </section>

    </main>


    <!-- ==================== RODAPÉ ==================== -->

    <footer class="footer">

        <div class="footer-final">

            <p>
                © 2026 Telaine. Projeto desenvolvido por alunos do
                IFBA – Campus Brumado.
            </p>

        </div>

    </footer>


    <!-- ==================== JAVASCRIPT ==================== -->

    <script>

        function mostrarFormulario() {

            const formulario =
                document.getElementById("formulario");

            const botao =
                document.querySelector(".botao-formulario");


            formulario.classList.toggle("aberto");


            if (formulario.classList.contains("aberto")) {

                botao.textContent = "Fechar formulário";

            } else {

                botao.textContent = "Enviar uma mensagem";

            }

        }

    </script>


</body>

</html>
