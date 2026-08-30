<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teline</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar">
        <!-- Espaço para o Logo (Texto ou Imagem) -->
        <div class="logo_menu">
            <img src="imagens/logo_teline.png" alt="Logo da Empresa" class="logo">
        </div>

        <!-- Os 4 Links do Menu -->
        <ul class="links_menu"> <!-- Ajustado de 'navbar-links' para 'menu-links' -->
            <li><a href="" class="ativado">Início</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
        </ul>
    </nav>

    <div class="carrossel-container">
        <div class="carrossel-slides">
            <!-- Imagem 1 -->
            <div class="slide">
                <img src="imagens/imagem1.jpg" alt="Descrição da Imagem 1">
            </div>
            <!-- Imagem 2 -->
            <div class="slide">
                <img src="imagens/imagem2.jpg" alt="Descrição da Imagem 2">
            </div>
            <!-- Imagem 3 -->
            <div class="slide">
                <img src="imagens/imagem3.jpg" alt="Descrição da Imagem 3">
            </div>
            <!-- Imagem 4 -->
            <div class="slide">
                <img src="imagens/imagem4.jpg" alt="Descrição da Imagem 4">
            </div>
        </div>
    </div>






    <script>
    const container = document.querySelector('.carrossel-container');
    const slides = document.querySelectorAll('.slide');
    let index = 0;

    function moverCarrossel() {
        index++;
        // Se chegar ao fim, volta para a primeira imagem
        if (index >= slides.length) {
            index = 0;
        }
        
        // Calcula a posição de rolagem com base na largura de cada slide
        const larguraSlide = slides[0].clientWidth;
        container.scrollTo({
            left: index * larguraSlide,
            behavior: 'smooth'
        });
    }

    // Inicia o movimento automático a cada 3 segundos (3000 milissegundos)
    setInterval(moverCarrossel, 5000);
</script>
</body>

</html>