<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios - Programação web II</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Exercícios</h1>
    <ul>
        <?php
        $pastas_exercicios = ['exercicio_01', 'exercicio_02', 'exercicio_03'];

        foreach ($pastas_exercicios as $pasta) {
            if (is_dir($pasta)) {
                $numero_exercicio = str_replace('exercicio_', '', $pasta);
                $link = "$pasta/index.php";
                echo "<li><a href='$link'>Exercício - $numero_exercicio</a></li>";
            } else {
                echo "<li>Pasta $pasta não encontrada</li>";
            }
        }
        ?>
    </ul>
</body>
</html>