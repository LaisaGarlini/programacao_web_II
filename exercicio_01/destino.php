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
    <h1>Exercício 01</h1>
    <hr>
    <pre><?php var_dump($_REQUEST); ?></pre>
    <hr>
    <pre><?php 
        echo $_SERVER["REQUEST_METHOD"];
        echo "<br>"; 
        var_export(apache_request_headers());
    ?></pre>
    <a class="button" href="index.php">Voltar</a>
</body>
</html>