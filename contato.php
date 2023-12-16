<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-contato.css">
    <title>Sobre</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/abra-o-livro.png" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="user.php">Início</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>

</header>

<section class="content">
    <h1>Entre em Contato</h1>
    <p>Estou ansioso para ouvir de você! Preencha o formulário abaixo e entrarei em contato o mais rápido possível.</p>

    <form action="contato.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="4" required></textarea>

        <button type="submit">Enviar Mensagem</button>
    </form>
</section>

<footer>
        <p>&copy; 2023 Caio Antônio</p>
    </footer>

</body>
</hmtl>