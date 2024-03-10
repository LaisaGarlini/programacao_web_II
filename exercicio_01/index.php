<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&display=swap">
    <title>Exercício 01</title>
</head>
<body>
    <div>
        <div class="cabecalho">
            <h1>Exercício 01</h1>
            <hr>
        </div>
        <div class="conteudo">
            <br>
            <form method="POST" action="destino.php">
                <label for="nome">Nome: </label>
                <input type="text" name="nome" id="nome" placeholder="Nome">
                <br>
                <label for="telefone">Telefone: </label>
                <input type="text" name="telefone" id="telefone" placeholder="(99) 99999-9999">
                <br>
                <label for="email">E-mail: </label>
                <input type="text" name="email" id="email" placeholder="Informe seu e-mail">
                <br>
                <label for="mensagem">Mensagem: </label>
                <textarea name="mensagem" id="mensagem" placeholder="Mensagem..."></textarea>
                <br>
                <br>
                <button type="submit" name="enviar" id="enviar">Enviar</button>
            </form>
            <br>
            <span>Você também pode fazer REQUEST na URL:</span>
            <br>
            <a href="destino.php?nome=Laisa+Garlini&fone=(47)98886-2421&email=laisa.garlini@hotmail.com">
                destino.php?nome=Laisa+Garlini&fone=(47)98886-2421&email=laisa.garlini@hotmail.com
            </a>
        </div>
    </div>
</body>
</html>