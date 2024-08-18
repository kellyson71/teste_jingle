<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato</title>
    <style>
        /* Estilo global do corpo da página */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            background-image: linear-gradient(to right, #007bff, #00c2ff);
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 0;
        }

        /* Container principal do formulário de contato */
        .contact-container {
            margin-top: 40px; /* Garante que o formulário não fique escondido atrás da barra */

            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }

        /* Estilo do título do formulário */
        .contact-container h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #007bff;
        }

        /* Estilo dos labels e campos de entrada */
        .contact-container label {
            display: block;
            font-size: 1em;
            margin-bottom: 5px;
            color: #666;
        }

        .contact-container input,
        .contact-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1em;
        }

        /* Foco nos campos de entrada */
        .contact-container input:focus,
        .contact-container textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        /* Estilo do botão de envio */
        .contact-container button {
            width: 100%;
            padding: 12px;
            font-size: 1.2em;
            font-weight: bold;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-container button:hover {
            background-color: #0056b3;
        }

        /* Estilo do modal (popup) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.5);
            padding-top: 60px;
        }

        /* Conteúdo do modal */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: slideDown 0.5s ease-out;
        }

        /* Animação de deslizamento do modal */
        @keyframes slideDown {
            from { transform: translateY(-100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Estilo do botão de fechar o modal */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilos para barra secundária */
        .secondary-topbar {
            width: 100%; /* Ocupa toda a largura */
            background-color: #0050f1;
            overflow: hidden;
            text-align: center;
            padding: 10px;
            /* position: fixed; Fixa a barra no topo */
            top: 0;
            z-index: 1000; /* Garante que a barra esteja sobre outros elementos */
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
            color: #5ceeff;
        }

        .secondary-topbar .icon {
            display: none;
        }
        
        .station-title {
            text-align: center;
            padding: 30px;
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
            letter-spacing: 2px;
        }

        .station-title p {
            font-size: 1.2em;
            margin-top: 10px;
            color: #d4f0ff;
        }
        
        .footer {
            width: 100%;
            background-color: #0d9ae6;
            text-align: center;
            color: #fff;
            width: 100%;
            padding: none;
            margin-top: 80px;
        }

        .topbar img, .footer img {
            width: 100%;
            display: block;
        }

        .topbar, .secondary-topbar {
            position: relative; /* Mude de fixed para relative */
            top: 0; /* Certifique-se de que o topo esteja alinhado corretamente */
        }

        .footer .social-icons {
            margin-top: 10px;
        }

        .footer .social-icons a {
            margin: 0 10px;
            color: white;
            font-size: 50px;
            transition: color 0.3s;
        }

        .footer .social-icons a:hover {
            color: #d4f0ff;
        }

        .footer p {
            color: #fff;
            margin: 0;
            padding: 10px;
        }

        .social-icons a {
            text-decoration: none; /* Remove sublinhado dos ícones */
        }

        @media screen and (max-width: 600px) {
            .topbar img {
                content: url('../assets/Topo site - 720 x 300 px - Mariana e Lara.png');
            }
            .footer img {
                content: url('../assets/Rodape site - 720 x 300 px - Mariana e Lara.png');
            }
            .secondary-topbar a:not(:first-child) {
                display: none;
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
    <header class="topbar">
        <img src="../assets/Topo site - 1920 x 300 px - Mariana e Lara.png" alt="Topo do site">
    </header>

    <nav class="secondary-topbar" id="myTopnav">
        <a href="../index.php" class="active">Início</a>
        <a href="./todas_noticias.php">Blog Elas por Nós</a>
        <a href="./breve.html">Estação 55</a>
        <a href="./flash_55.php">Flash 55</a>
        <a href="./jingles.php">Paradão de Sucesso</a>
        <a href="./eventos.php">Tá no Plano</a>
        <a href="./contato.php">Contato</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
    
    <div class="station-title">
        <h1>Contato</h1>
    </div>

    <div class="contact-container">
        <h2>Formulário de Contato</h2>
        <?php
        // Verifica se o formulário foi enviado via método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Configuração dos parâmetros de conexão com o banco de dados
            $servername = "srv1437.hstgr.io";
            $username = "u928415167_root";
            $password = "Kellys0n_";
            $dbname = "u928415167_plano";

            // Criação de conexão com o banco de dados
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verifica se houve erro na conexão
            if ($conn->connect_error) {
                $message = "Conexão falhou: " . $conn->connect_error;
                $message_type = "error";
            } else {
                // Coleta dos dados do formulário
                $nome = $_POST['nome'];
                $telefone = $_POST['telefone'];
                $email = $_POST['email'];
                $assunto = $_POST['assunto'];
                $mensagem = $_POST['mensagem'];

                // Preparação e execução da query para inserção dos dados no banco
                $sql = "INSERT INTO contatos (nome, telefone, email, assunto, mensagem) VALUES (?, ?, ?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss", $nome, $telefone, $email, $assunto, $mensagem);

                // Verifica se a execução da query foi bem-sucedida
                if ($stmt->execute()) {
                    $message = "Mensagem enviada com sucesso!";
                    $message_type = "success";
                } else {
                    $message = "Erro ao enviar mensagem: " . $stmt->error;
                    $message_type = "error";
                }

                // Fecha a conexão com o banco de dados
                $stmt->close();
                $conn->close();
            }

            // Exibe o modal com a mensagem de feedback
            echo "<div id='myModal' class='modal'>
                    <div class='modal-content'>
                        <span class='close'>&times;</span>
                        <p>{$message}</p>
                    </div>
                  </div>";
        }
        ?>
        <!-- Formulário de contato -->
        <form action="contato.php" method="POST">
            <label for="nome">Seu nome *</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone Para Contato *</label>
            <input type="text" id="telefone" name="telefone" required>

            <label for="email">Seu e-mail *</label>
            <input type="email" id="email" name="email" required>

            <label for="assunto">Assunto *</label>
            <input type="text" id="assunto" name="assunto" required>

            <label for="mensagem">Sua mensagem (opcional)</label>
            <textarea id="mensagem" name="mensagem" rows="4"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
    
    <footer class="footer">
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
        <p>&copy; 2024 Mari e Lara 55. Todos os direitos reservados. CNPJ: 56.512.698/0001-89.</p>
        <img src="../assets/Rodape site - 1920 x 300 px - Mariana e Lara.png" alt="Rodapé do site">
    </footer>

    <script>
        // Seleciona o modal e o botão de fechar
        var modal = document.getElementById("myModal");
        var span = document.getElementsByClassName("close")[0];

        // Exibe o modal caso ele exista na página
        if (modal) {
            modal.style.display = "block";
        }

        // Fecha o modal ao clicar no "X" e recarrega a página
        span.onclick = function() {
            modal.style.display = "none";
            window.location.href = "../index.php";
        }

        // Fecha o modal ao clicar fora dele e recarrega a página
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                window.location.href = "../index.php";
            }
        }
    </script>

</body>
</html>
