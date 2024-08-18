<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as Músicas</title>
    <style>
        /* Importação das fontes e ícones necessários para o design */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

        /* Estilização base da página */
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('../assets/Bg - Azul claro 02.png');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333; /* Cor principal do texto */
        }

        /* Container principal para centralizar e alinhar os itens */
        .container {
            width: 90%;
            max-width: 1200px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px; /* Espaçamento entre os itens */
        }

        /* Estilização de cada item de música */
        .music-item {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo semi-transparente */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap; /* Permite melhor adaptação em telas menores */
        }

        /* Efeito de hover para destacar o item */
        .music-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Estilização do conteúdo textual */
        .content {
            flex-grow: 1;
            min-width: 200px;
        }

        .content h2 {
            margin: 0 0 10px 0;
            font-size: 1.5em;
            color: #013d86; /* Cor específica para títulos */
        }

        .content audio {
            width: 100%; /* O áudio ocupa a largura completa disponível */
        }

        /* Estilização da imagem de capa */
        .cover-image {
            width: 100%;
            max-width: 150px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Estilização do grupo de botões */
        .button-group {
            display: flex;
            gap: 10px;
            width: 100%;
            justify-content: center;
            margin-top: 10px;
        }

        /* Botões de download e compartilhamento */
        .download-button, .share-button {
            background-color: #28a745; /* Cor padrão dos botões */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%;
            max-width: 150px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px; /* Espaço entre o ícone e o texto */
        }

        /* Efeito de hover nos botões */
        .download-button:hover, .share-button:hover {
            background-color: #1e7e34; /* Cor ao passar o mouse */
            transform: scale(1.05);
        }

        /* Estilização do botão de compartilhar */
        .share-button {
            background-color: #007bff; /* Cor específica para compartilhamento */
        }

        /* Cor do botão ao passar o mouse */
        .share-button:hover {
            background-color: #0056b3;
        }

        /* Ajustes de responsividade para telas menores */
        @media (max-width: 768px) {
            .music-item {
                flex-direction: column;
                align-items: flex-start; /* Melhora o layout em telas pequenas */
            }

            .cover-image {
                max-width: 100%;
                height: auto;
            }

            .button-group {
                flex-direction: column;
                align-items: center;
                gap: 10px;
            }

            .download-button, .share-button {
                width: 100%;
                max-width: 300px;
                margin: 0;
            }
        }

        /* Ajustes de responsividade para telas muito pequenas */
        @media (max-width: 480px) {
            .content h2 {
                font-size: 1.2em;
            }

            .content audio {
                margin-top: 10px;
            }

            .download-button, .share-button {
                font-size: 0.9em;
                padding: 10px;
            }
        }

        /* Estilo da barra de navegação secundária */
        .secondary-topbar {
            background-color: #0050f1;
            overflow: hidden;
            text-align: center;
            padding: 10px;
            width: 100%;
        }

        .secondary-topbar a {
            float: none;
            display: inline-block;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-weight: bold;
            font-size: 17px;
            transition: color 0.3s;
        }

        .secondary-topbar a:hover {
            color: #5ceeff; /* Cor ao passar o mouse nos links */
        }

        /* Ícone de menu para dispositivos móveis */
        .secondary-topbar .icon {
            display: none;
        }

        /* Estilização do título da estação */
        .station-title {
            text-align: center;
            padding: 30px 20px;
            background-color: #fc79db;
            color: white;
            border-radius: 15px;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }

        .station-title h1 {
            font-size: 2.5em;
            margin: 0;
            font-weight: bold;
            letter-spacing: 2px; /* Estilo adicional para o título */
        }

        .station-title p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #d4f0ff;
        }

        /* Estilização do rodapé */
        .footer {
            display: block;
            width: 100%;
            background-color: #0d9ae6;
            text-align: center;
            color: #fff;
            padding: none;
            margin-top: 80px;
        }

        /* Estilização das imagens no topo e no rodapé */
        .topbar img, .footer img {
            width: 100%;
            display: block;
        }

        /* Estilo para posicionamento da barra de navegação */
        .topbar, .secondary-topbar {
            position: relative; /* Mudança de fixed para relative */
            top: 0; /* Alinhamento correto no topo */
        }

        /* Estilização dos ícones sociais no rodapé */
        .footer .social-icons {
            margin-top: 10px;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 50px; /* Tamanho maior para os ícones sociais */
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #d4f0ff; /* Cor ao passar o mouse nos ícones sociais */
        }

        .footer p {
            color: #fff;
            margin: 0;
            padding: 10px;
        }

        /* Remoção de sublinhado dos ícones sociais */
        .social-icons a {
            text-decoration: none;
        }

        /* Ajustes de responsividade para telas menores */
        @media screen and (max-width: 600px) {
            .topbar img {
                content: url('../assets/Topo site - 720 x 300 px - Mariana e Lara.png');
            }
            .footer img {
                content: url('../assets/Rodape site - 720 x 300 px - Mariana e Lara.png');
            }
            .secondary-topbar a:not(:first-child) {
                display: none; /* Oculta links na barra de navegação em telas pequenas */
            }
            .secondary-topbar a.icon {
                float: right;
                display: block;
            }

            .secondary-topbar.responsive {
                position: relative;
            }
            .secondary-topbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .secondary-topbar.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }
    </style>
</head>
<body>
    <!-- Cabeçalho com imagem de topo -->
    <header class="topbar">
        <img src="../assets/Topo site - 1920 x 300 px - Mariana e Lara.png" alt="Topo do site">
    </header>

    <!-- Barra de navegação secundária -->
    <nav class="secondary-topbar" id="myTopnav">
        <a href="../index.php" class="active">Inicio</a>
        <a href="./todas_noticias.php">Blog Elas por Nós</a>
        <a href="./breve.html">Estação 55</a>
        <a href="./flash_55.php">Flash 55</a>
        <a href="./jingles.php">Paradão de Sucesso</a>
        <a href="./eventos.php">Tá no Plano</a>
        <a href="./contato.php">Contato</a>
        <!-- Ícone de menu para dispositivos móveis -->
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>

    <!-- Título da seção -->
    <div class="station-title">
        <h1>Contato</h1>
    </div>

    <!-- Container principal para exibição das músicas -->
    <div class="container">
        <?php
        // Conexão com o banco de dados
        $servername = "srv1437.hstgr.io";
        $username = "u928415167_root";
        $password = "Kellys0n_";
        $dbname = "u928415167_plano"; 

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se a conexão foi bem-sucedida
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Seleciona os dados das músicas do banco
        $sql = "SELECT id, titulo, url_musica, url_capa FROM musicas ORDER BY id DESC";
        $result = $conn->query($sql);

        // Exibe as músicas se houver registros
        if ($result->num_rows > 0) {
            while ($music = $result->fetch_assoc()) {
                echo "<div class='music-item'>";
                echo "<img class='cover-image' src='" . $music['url_capa'] . "' alt='Capa do Jingle'>";
                echo "<div class='content'>";
                echo "<h2>" . $music['titulo'] . "</h2>";
                echo "<audio controls>";
                echo "<source src='" . $music['url_musica'] . "' type='audio/mpeg'>";
                echo "Seu navegador não suporta o elemento de áudio.";
                echo "</audio>";
                echo "</div>";
                echo "<div class='button-group'>";
                echo "<a class='download-button' href='" . $music['url_musica'] . "' download><i class='fas fa-download'></i> Baixar</a>";
                echo "<button class='share-button' onclick='shareMusic(\"" . $music['titulo'] . "\", \"" . $music['url_musica'] . "\")'><i class='fas fa-share-alt'></i> Compartilhar</button>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            // Exibe uma mensagem se não houver músicas
            echo "<p>Nenhuma música encontrada.</p>";
        }

        // Fecha a conexão com o banco de dados
        $conn->close();
        ?>
    </div>

    <!-- Rodapé da página -->
    <footer class="footer">
        <div class="social-icons">
            <!-- Ícones sociais -->
            <a href="https://www.instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>

        <p>&copy; 2024 Portal de PDF360. Todos os direitos reservados.</p>

        <img src="../assets/Rodape site - 1920 x 300 px - Mariana e Lara.png" alt="Rodapé do site">
    </footer>

    <script>
        // Função para alternar o menu em dispositivos móveis
        function toggleMenu() {
            var x = document.getElementById("myTopnav");
            if (x.className === "secondary-topbar") {
                x.className += " responsive";
            } else {
                x.className = "secondary-topbar";
            }
        }

        // Função para compartilhar a música
        function shareMusic(title, url) {
            if (navigator.share) {
                navigator.share({
                    title: title,
                    text: 'Ouça este jingle incrível!',
                    url: url
                }).then(() => {
                    console.log('Compartilhamento bem-sucedido!');
                }).catch((error) => {
                    console.error('Erro ao compartilhar', error);
                });
            } else {
                // Fallback para copiar o link se o navegador não suportar o compartilhamento nativo
                const tempInput = document.createElement("input");
                tempInput.value = url;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand("copy");
                document.body.removeChild(tempInput);
                alert('Link copiado para a área de transferência. Compartilhe manualmente!');
            }
        }
    </script>
</body>
</html>
