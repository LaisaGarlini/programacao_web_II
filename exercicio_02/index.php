<?php
    require_once '../vendor/autoload.php';

    use Monolog\Level;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;

    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('your.log', Level::Warning));

    $log->warning('Foo');
    $log->error('Bar');

    $logContent = file_get_contents('your.log');

    if ($logContent === false) {
        $logContent = "Não foi possível ler o arquivo de log.";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 02</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>  
    <h1>Conteúdo do arquivo your.log</h1>
    <pre><?php echo htmlspecialchars($logContent); ?></pre>
</body>
</html>