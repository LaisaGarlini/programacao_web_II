<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício - 03</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php

        require_once '../vendor/autoload.php';

        use Faker\Factory;

        $faker = Factory::create('pt_BR');

        echo "<b>Nome:</b> " . $faker->name . "<br>";
        echo "<b>Endereço:</b> " . $faker->address . "<br>";
        echo "<b>E-mail:</b> " . $faker->email . "<br>";
        echo "<b>Telefone:</b> " . $faker->phoneNumber . "<br>";
        echo "<b>Texto Aleatório:</b> " . $faker->text . "<br>";
        echo "<b>Endereço:</b> " . $faker->randomDigit . "<br>";
        echo "<b>Data:</b> " . $faker->date('d/m/y') . "<br>";
        echo "<b>Hora:</b> " . $faker->time . "<br>";
        // echo $faker->unixTime(new DateTime('+3 weeks'));

    ?>    
</body>
</html>